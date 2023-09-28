<?php

namespace App\Http\Controllers;

use Exception;

use App\Models\User;
use App\Mail\OtpMail;

use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rules;
use App\Mail\VerifyEmail;

use Twilio\Rest\Client;



class AuthController extends Controller
{

    public $twilio_sid;
    public $token;
    public $twilio_verify_sid;

    public function __construct(){
        $this->twilio_sid = Config::get('constants.TWILIO_SID');
        $this->token = Config::get('constants.TWILIO_AUTH_TOKEN');
        $this->twilio_verify_sid = Config::get('constants.TWILIO_VERIFY_SID');
    }

    private function twilioAuth(){
        return $twilio = new Client($this->twilio_sid, $this->token);
    }

    private function twilioSendOtp($request){
        $twilio = $this->twilioAuth();

        $twilio->verify->v2->services($this->twilio_verify_sid)
            ->verifications
            ->create($request->phone, "sms");
    }

    private function loginWithNumber($request){
        
            $validator = Validator::make($request->all(), [
                'phone' => 'required|string|min:10|max:15',
                'type' => 'required',
            ]); 

        if ($validator->fails()) {
            return response()->json([
                'status' => 'failed',
                'data' => array("message"=>$validator->errors()->first()),
                'code' => 400
            ],400);
        }
        try {
            
            if(!empty($request->register) && $request->register == "true"){

                $user_up = User::where('phone', $request->phone)->where("status", true)->whereNotNull('email')->first();

                if($user_up){
                    $isregsitered = true;
                }else{
                    $isregsitered = false;
                }
                $this->twilioSendOtp($request);
    
                if(isset($request->first_name) && isset($request->last_name)  && isset($request->phone)){
                    $user = User::updateOrCreate(
                        ['phone' => $request->phone,
                        'first_name' => $request->first_name,
                        'last_name' => $request->last_name,
                     ],[] 
                    );
                }else {
                    $user = User::updateOrCreate(
                        ['phone' => $request->phone,
                     ],[] 
                    );
                }
                return response()->json([
                    'status' => 'success',
                    'data' => array("message"=>"code sent successfully."),
                    'is_registered' => $isregsitered,
                    'code' => 200
                ],200);

            }
            if(!empty($request->login) && $request->login == "true"){
                $user_up = User::where('phone', $request->phone)->where("status", true)->first();
                if(isset($user_up)){
                    $this->twilioSendOtp($request);
                    return response()->json([
                        'status' => 'success',
                        'data' => array("message"=>"code sent successfully."),
                        'code' => 200
                    ],200);
                }else {
   
                    return response()->json([
                        'status' => 'failed',
                        'data' => array("message"=>"Invalid phone number!"),
                        'code' => 400
                    ],400);
                }
            }

        } catch (Exception $e) {
            return response()->json([
                'status' => 'failed',
                'data' => array("message" => $e->getMessage()),
                'code' => 400
            ]);
        }
    }

    public function register(Request $request){


        $validator = Validator::make($request->all(), [
            // 'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'dob' => 'required',
            'address' => 'required',
            // 'social_security'=>'required',
            'social_sec_code' => 'required|max:4',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // $user = User::where('phone', $request->phone)->where("status", true)->first();
        $user = User::where('phone', $request->phone)->first();
        // if(!$user){
        //     return response()->json([
        //         'status' => 'failed',
        //         'data' => array('message'=>"please verify your mobile number"),
        //         'is_registered' => false,
        //         'code' => 200
        //     ],200);
        // }

        $verificationToken = Str::random(40);

        if(!empty($user->email)){
            return response()->json([
                'status' => 'failed',
                'data' => array('message'=>"Already registered"),
                'is_registered' => true,
                'code' => 200
            ],200);
        }
    // $user_up = tap(User::where('phone', $request->phone))->update(['status' => true]);
        $user->update([
            // 'name' => $request->name,
            'email' => $request->email,
            'dob' => $request->dob,
            'address' => $request->address,
            'social_sec_code' => $request->social_sec_code,
            // 'review' => $request->review,
            'verification_token' => $verificationToken,
            'status' => true
        ]);


        $tokenResult = $user->createToken('authToken');
        $token = $tokenResult->plainTextToken;
       
        // // Send OTP to the user's email
        // Mail::to($user->email)->send(new VerifyEmail($verificationToken));

        return response()->json([
            'status' => 'success',
            'data' => array(
                "message"=>'Registration successful also verifiction mail sent to your email address to verify email address.',
                'accessToken'=> $token
            ),
            'code' => 200
        ],200);

    }

    public function loginAndverifyOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|string',
            'verification_code' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'failed',
                'data' => array("message" => $validator->errors()->first()),
                'code' => 400
            ],400);
        }

        /* Get credentials from .env */
        $twilio = $this->twilioAuth();

        try {
            $verification = $twilio->verify->v2->services($this->twilio_verify_sid)
                ->verificationChecks
                ->create([
                    'to' => $request->phone,
                    'code' => $request->verification_code
                ]);

            // Handle the verification check response

            if (isset($verification->status) && $verification->status == "approved") {
                
                $user = User::where('phone', $request->phone)->first();

                // $user_up = tap(User::where('phone', $request->phone))->update(['status' => true]);

              //  $user = User::where('phone', $request->phone)->where("status", true)->whereNotNull('email')->first();
                if($user){
                    $tokenResult = $user->createToken('authToken');
                    $token = $tokenResult->plainTextToken;
                    /* Authenticate user */
                    return response()->json([
                        'status' => 'success',
                        'data' => array('message'=>"phone number verified", 'accessToken'=> $token),
                        'is_registered' => false,
                        'code' => 200
                    ],200);
                }else{
                    return response()->json([
                        'status' => 'success',
                        'data' => array('message'=>"phone number not verified"),
                        'is_registered' => false,
                        'code' => 200
                    ],200);
                }

            }else{
                return response()->json([
                    'status' => 'failed',
                    'data' => array('message'=>"Invalid otp"),
                    'code' => 200
                ],200);
            }
        } catch (Exception $e) {
            // Handle exceptions
            return response()->json([
                'status' => 'failed',
                'data' => array('message'=> $e->getMessage()),
                'code' => 400
            ],400);
        }

    }

    public function verifyEmail(Request $request, $token){
        $user = User::where('verification_token', $token)->first();

        if ($user) {
            $user->email_verified_at = now();
            $user->verification_token = null;
            $user->save();

            return response()->json([
                'status' => 'success',
                'data' => array('message'=> "Token Verified"),
                'code' => 200
            ],200);
        } else {
            // Handle exceptions
            return response()->json([
                'status' => 'failed',
                'data' => array('message'=> "Expired or Wrong Token"),
                'code' => 200
            ],200);
        }
    }

    public function sendOtp(Request $request)
    {
    
        if($request->type == 'number') {
         
            return $this->loginWithNumber($request);
        }else{
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|exists:users,email',
            ]);
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $user = User::where('email', $request->email)->first();

            if ($user) {
                // $otp = mt_rand(100000, 999999);
                // $user->update(['otp' => $otp]); // Update the user's OTP

                // // Send the new OTP to the user's email
                // Mail::to($user->email)->send(new OtpMail($otp));

                // return response()->json(['message' => 'OTP resent successfully']);
                $verificationToken = Str::random(40);

                $user->update(['verification_token' => $verificationToken]);
                Mail::to($user->email)->send(new VerifyEmail($verificationToken));

                return response()->json([
                    'status' => 'success',
                    'data' => array('message'=> "Verifiction mail sent to your email address."),
                    'code' => 200
                ],200);
            }

            return response()->json([
                'status' => 'failed',
                'data' => array('message'=> "User not found"),
                'code' => 200
            ],200);
        }
    }

    public function forgotPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $status = Password::sendResetLink($request->only('email'));

        if ($status === Password::RESET_LINK_SENT) {
            return response()->json(['message' => 'Password reset link sent']);
        }

        return response()->json(['message' => 'Failed to send reset link'], 400);
    }

    public function passwordReset(Request $request)
    {
        return view('auth.reset-password', ['request' => $request]);
    }

    /**
     * Handle an incoming new password request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function passwordStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                ])->save();
            }
        );

        if ($status == Password::PASSWORD_RESET) {
            return response()->json([
                'status' => 'success',
                'data' => array('message'=> "Password reset successful"),
                'code' => 200
            ],200);
        } else {
            throw ValidationException::withMessages([
                'email' => [trans($status)],
            ]);
        }
        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return response()->json([
            'status' => 'success',
            'data' => array('message'=> $status),
            'code' => 200
        ],200);
    }

    /**
     * Reset Password WIth token
    *
    * @return [string] message
    */
    public function resetpassword(Request $request)
    {
        $user = $request->user();

        if($user){
            $validator = Validator::make($request->all(), [
                'password' => 'required',
                'confirm_password' => 'required|same:password'
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'status' => 'failed',
                    'data' => array("message" => $validator->errors()->first()),
                    'code' => 400
                ],400);
            }
            $email  = isset($request->email) ? $request->email : $user->email;
            $user_updated = User::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request->password),
                'email' => $email
            ]);

            if($user_updated){
                return response()->json([
                    'status' => 'success',
                    'data' => array("message" => "Password Updated"),
                    'code' => 200
                ],200);
            }else{
                return response()->json([
                    'status' => 'success',
                    'data' => array("message" => "Password updating have some issue"),
                    'code' => 401
                ],401);
            }
        }

        return response()->json([
            'status' => 'success',
            'data' => array('message'=> "Something wrong"),
            'code' => 401
        ],401);

    }

    /**
     * Reset Password WIth token
    *
    * @return [string] message
    */
    public function changepassword(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'failed',
                'data' => array("message" => $validator->errors()->first()),
                'code' => 400
            ],400);
        }

        if (!(Hash::check($request->old_password, Auth::user()->password))){
            return response()->json([
                'status' => 'error',
                'data' => array('message'=> "Your current password does not matches with the old password."),
                'code' => 401
            ]);
        }

        if(strcmp($request->old_password, $request->password) == 0){
            return response()->json([
                'status' => 'error',
                'data' => array('message'=> "New Password cannot be same as your current password."),
                'code' => 401
            ]);
        }

        $user_updated = User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->password)
        ]);

        if($user_updated){
            return response()->json([
                'status' => 'success',
                'data' => array("message" => "Password successfully changed!"),
                'code' => 200
            ]);
        }else{
            return response()->json([
                'status' => 'error',
                'data' => array("message" => "Password updating have some issue"),
                'code' => 401
            ]);
        }


    }

    /**
    * Logout user (Revoke the token)
    *
    * @return [string] message
    */
    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json([
            'status' => 'success',
            'data' => array(
                'message'=>'Successfully logged out'
            ),
            'code' => 200
        ]);

    }

}

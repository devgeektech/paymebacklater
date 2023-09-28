@extends('layouts.withoutheader')

@section('content')
<section>
    <div class="wrapper">
        <section class="2xl:h-[100vh] md:overflow-y-auto md:flex items-center">
            <div class="w-full lg:py-[90px] md:py-[60px] py-[40px]">
                <div class="container mx-auto">
                    <div class="md:flex items-center gap-[50px]">
                        <div class="md:w-[60%] w-full text-center">
                                <div class="active_button mb-[20px]">
                                        <span class="mr-[20px] p-[10px] border border-black btn1_ac">1</span>
                                        <span class="mr-[20px] p-[10px] border border-black btn2_ac">2</span>
                                        <span class="mr-[20px] p-[10px] border border-black btn3_ac">3</span>
                                </div>
                            <img src="images/bars-create-account.svg" class="mx-auto w-[100px]" />


                          <div id="form_div_sec"> 

                            <h2 class="text-[#2D3353] text-[26px] md:text-[32px] md:leading-[40px] leading-[32px] lg:text-[48px] leading-[56px] font-[700] md:my-[10px] lg:mt-[10px] lg:mb-[7px]">
                                Create an Account</h2>
                            <p class="text-[#2E3456] text-[18px] font-[500]">Tell us a bit about yourself. We just need the basics.</p>
                            <div class="w-[70%] mx-auto mt-[60px] mb-[26px]">
                                <form class="flex flex-col gap-[30px] relative" id="authform">
                                    <div class="flex border-[#4E6AFF] border-[1px] rounded-lg bg-[#fff] shadow-[0_1px_10px_0px_#d1d1d1] overflow-hidden">
                                        <select id="countries" name="code" class="font-[500] appearance-none text[#2E3456] text-[16px] rounded-lg focus:ring-blue-500 focus:border-blue-500 block py-[15px] px-[5px] dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 w-[100px] focus:outline-none bg-[#fff]">
                                            @foreach ($countryList as $countryCode => $country)
                                            <option value="{{ $country['phone_prefix'] }}">{{ $country['flag'] }} {{ $country['phone_prefix'] }}</option>
                                            @endforeach
                                        </select>
                                        <input type="number" name="phone" placeholder="New Number" class="placeholder:[#808080] text[#2E3456] text-[18px] w-[100%] p-[15px] font-[500] leading-[24px] w-[calc(100%-100px)] focus:outline-none border-l-[1px] border-[#4E6AFF]" required />
                                        <input type="hidden" name="type" value="number">
                                    </div>
                                    <input type="text" name="first_name" value="" placeholder="First Name" class="placeholder:[#808080] text[#2E3456] text-[18px] w-[100%] p-[15px] font-[500] leading-[24px] w-[calc(100%-100px)] focus:outline-none border-l-[1px] border-[#4E6AFF]">
                                    <input type="text" name="last_name" value="" placeholder="Last Name" class="placeholder:[#808080] text[#2E3456] text-[18px] w-[100%] p-[15px] font-[500] leading-[24px] w-[calc(100%-100px)] focus:outline-none border-l-[1px] border-[#4E6AFF]">
                                    <input type="hidden" name="register" value="true">
                                    
                                    <h4 class="text-[#2E3456] text-[18px] font-[500] mt-[26px] mb-[38px]"><a href="{{ route('login') }}">Already have an account? Login here</a></h4>
                                    <p class="text-[#2E3456] text-[18px] font-[400]">We’ll send you a
                                        verification code via SMS.
                                        By continuing, I agree to PayMeBackLater
                                        <span class="text-[#6161FF] font-[700]">Terms of Service</span> and
                                        authorize PayMeBackLater to obtain, use, and share
                                        consumer reports about me. See our
                                        <span class="text-[#6161FF] font-[700]">Privacy Policy</span> to learn
                                        more
                                        about our privacy practices.
                                    </p>
                                    <button type="submit" class="bg-[#6161FF] rounded-[30px] gap-[10px] flex items-center justify-center text-[#fff] text-[18px] font-[700] leading-[21px] w-full h-[50px] hover:bg-transparent hover:text-[#6161FF] border-[1px] mt-[42px] border-[#6161FF] transition ease-in-out delay-150">
                                        <img src="images/lock.svg" class="w-[16px] h-[16px]" />Continue</button>
                                </form>
                             </div>
                            <div id="messageContainer" class="mt-4"></div>
                         </div> 
                            <!-- start registration  -->
                                    <div class="register_div_sec_end"> 
                               
                                        <div class="w-[70%] mx-auto mt-[60px] mb-[26px]">
                                            <form class="flex flex-col gap-[30px] relative" id="final_registration_step">
                                                <input type="email" name="email" value="" placeholder="Email Address" required>
                                                <input type="date" name="dob" value="" placeholder="Date of birth" required>
                                                <input type="text" name="address" value="" placeholder="Home Address" required>
                                                <input type="text" name="social_sec_code" value="" placeholder="social security" required>
                                                <input type="hidden" name="phone" value='' id="phone_number_add">
                                                <h4 class="text-[#2E3456] text-[18px] font-[500] mt-[26px] mb-[38px]"><a href="{{ route('login') }}">Already have an account? Login here</a></h4>
                                                <p class="text-[#2E3456] text-[18px] font-[400]">We’ll send you a
                                                    verification code via SMS.
                                                    By continuing, I agree to PayMeBackLater
                                                    <span class="text-[#6161FF] font-[700]">Terms of Service</span> and
                                                    authorize PayMeBackLater to obtain, use, and share
                                                    consumer reports about me. See our
                                                    <span class="text-[#6161FF] font-[700]">Privacy Policy</span> to learn
                                                    more
                                                    about our privacy practices.
                                                </p>
                                                <button type="submit" class="bg-[#6161FF] rounded-[30px] gap-[10px] flex items-center justify-center text-[#fff] text-[18px] font-[700] leading-[21px] w-full h-[50px] hover:bg-transparent hover:text-[#6161FF] border-[1px] mt-[42px] border-[#6161FF] transition ease-in-out delay-150">
                                                    <img src="images/lock.svg" class="w-[16px] h-[16px]" />Continue</button>
                                            </form>
                                        </div>
                                        <div id="messageContainer" class="mt-4"></div>
                                </div> 
                           <!-- end registration -->
                           <!-- start verify_opt_section -->
                        <div class="verify_opt_section">
                            <div class="inline-block align-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full p-[20px] overflow-y-auto" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                                    <div class="bg-white p-[10px] text-center">
                                        <h4 class="text-[42px] text-[#000] font-[700] leading-[46px]">We just texted you</h4>
                                        <p class="text-[#5F5C5C] font-[400] text-[18px] my-[30px]">Please enter the verification code we just sent to <phonenumber></phonenumber>
                                        </p>
                                        <form class="flex flex-col gap-[30px]" id="authform_popup">
                                            <div class="flex items-center gap-[20px] justify-center">
                                                <input type="number" class="otp-automovetonextinput focus:outline-[#6161FF] border-[1px] rounded-[15px] bg-[#EAEAFF] h-[50px] w-[50px] p-[10px] text-center" min="0" max="9" name="otp1" required />
                                                <input type="number" class="otp-automovetonextinput focus:outline-[#6161FF] border-[1px] rounded-[15px] bg-[#EAEAFF] h-[50px] w-[50px] p-[10px] text-center" min="0" max="9" name="otp2" required />
                                                <input type="text" class="otp-automovetonextinput focus:outline-[#6161FF] border-[1px] rounded-[15px] bg-[#EAEAFF] h-[50px] w-[50px] p-[10px] text-center" min="0" max="9" name="otp3" required />
                                                <input type="number" class="otp-automovetonextinput focus:outline-[#6161FF] border-[1px] rounded-[15px] bg-[#EAEAFF] h-[50px] w-[50px] p-[10px] text-center" min="0" max="9" name="otp4" required />
                                                <input type="number" class="otp-automovetonextinput focus:outline-[#6161FF] border-[1px] rounded-[15px] bg-[#EAEAFF] h-[50px] w-[50px] p-[10px] text-center" min="0" max="9" name="otp5" required />
                                                <input type="number" class="otp-automovetonextinput focus:outline-[#6161FF] border-[1px] rounded-[15px] bg-[#EAEAFF] h-[50px] w-[50px] p-[10px] text-center" min="0" max="9" name="otp6" required />
                                            </div>
                                            <button class="my-[30px] bg-[#6161FF] rounded-[30px] gap-[10px] flex items-center justify-center text-[#fff] text-[18px] font-[700] leading-[21px] w-full h-[50px] hover:bg-transparent hover:text-[#6161FF] border-[1px] mt-[42px] border-[#6161FF] transition ease-in-out delay-150 verifyButton">Confirm</button>
                                            <input type="hidden" name="phone" value="">
                                        </form>
                                        <div class="messageContainer_sendotp"></div>
                                        <h4 class="text-[#6161FF] font-[500] text-[32px]"><a href="javascript:void(0);" class="resendOtp">Didn’t get a code?</a> </h4>
                                    </div>
                                </div>
                          </div> 
                          <!-- end verify_opt_section -->

                         </div> 
                        <div class="md:w-[40%] w-full">
                            <img src="images/create-account.png" class="w-[80%] mx-auto" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<!------------------Modal Fot OTP ------------------>
<!-- <div class="fixed z-10 overflow-y-auto top-0 w-full left-0 hidden" id="modal">
    <div class="flex items-center justify-center min-height-100vh pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-900 opacity-75">
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
        <div class="inline-block align-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full p-[20px] overflow-y-auto" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <button type="button" id="toggleModal"><img src="images/cancle.svg" class="w-[35px] p-[10px]"></button>
            <div class="bg-white p-[10px] text-center">
                <h4 class="text-[42px] text-[#000] font-[700] leading-[46px]">We just texted you</h4>
                <p class="text-[#5F5C5C] font-[400] text-[18px] my-[30px]">Please enter the verification code we just sent to <phonenumber></phonenumber>
                </p>
                <form class="flex flex-col gap-[30px]" id="authform_popup">
                    <div class="flex items-center gap-[20px] justify-center">
                        <input type="number" class="otp-automovetonextinput focus:outline-[#6161FF] border-[1px] rounded-[15px] bg-[#EAEAFF] h-[50px] w-[50px] p-[10px] text-center" min="0" max="9" name="otp1" required />
                        <input type="number" class="otp-automovetonextinput focus:outline-[#6161FF] border-[1px] rounded-[15px] bg-[#EAEAFF] h-[50px] w-[50px] p-[10px] text-center" min="0" max="9" name="otp2" required />
                        <input type="text" class="otp-automovetonextinput focus:outline-[#6161FF] border-[1px] rounded-[15px] bg-[#EAEAFF] h-[50px] w-[50px] p-[10px] text-center" min="0" max="9" name="otp3" required />
                        <input type="number" class="otp-automovetonextinput focus:outline-[#6161FF] border-[1px] rounded-[15px] bg-[#EAEAFF] h-[50px] w-[50px] p-[10px] text-center" min="0" max="9" name="otp4" required />
                        <input type="number" class="otp-automovetonextinput focus:outline-[#6161FF] border-[1px] rounded-[15px] bg-[#EAEAFF] h-[50px] w-[50px] p-[10px] text-center" min="0" max="9" name="otp5" required />
                        <input type="number" class="otp-automovetonextinput focus:outline-[#6161FF] border-[1px] rounded-[15px] bg-[#EAEAFF] h-[50px] w-[50px] p-[10px] text-center" min="0" max="9" name="otp6" required />
                    </div>
                    <button class="my-[30px] bg-[#6161FF] rounded-[30px] gap-[10px] flex items-center justify-center text-[#fff] text-[18px] font-[700] leading-[21px] w-full h-[50px] hover:bg-transparent hover:text-[#6161FF] border-[1px] mt-[42px] border-[#6161FF] transition ease-in-out delay-150 verifyButton">Confirm</button>
                    <input type="hidden" name="phone" value="">
                </form>
                <div class="messageContainer_sendotp"></div>
                <h4 class="text-[#6161FF] font-[500] text-[32px]"><a href="javascript:void(0);" class="resendOtp">Didn’t get a code?</a> </h4>
            </div>
        </div>
    </div>
</div> -->
<!------------------End Modal Fot OTP ------------------>
@endsection
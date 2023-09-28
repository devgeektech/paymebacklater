@extends('layouts.withoutheader')

@section('content')
<div class="wrapper">
        <section class="bg-[#EAEAFF] 2xl:h-[100vh] md:overflow-y-auto md:flex items-center">
            <div class="w-full lg:py-[90px] md:py-[60px] py-[40px]">
                <div class="container mx-auto px-[15px] max-w-[1140px]">
                    <div class="md:flex items-center gap-[100px]">
                        <div class="w-full md:w-[50%] text-center">
                          <img src="{{ asset('images/bars-create-account.svg') }}" class="mx-auto w-[100px]" />
                        <div id="form_div_sec">
                         <div class="w-full text-center">
                                        <div class="w-full mt-[70px]">
                                        <h2 class="text-[#2D3353] text-[56px] leading-[65px] font-[700] mt-[21px] mb-[7px]">
                                                Log In</h2>
                                            <p class="text-[#2E3456] text-[16px] font-[400]">Fill the information below!</p>
                                        </div>
                                    <form class="flex flex-col gap-[30px] relative" id="authform">
                                        <div class="flex border-[#4E6AFF] border-[1px] rounded-lg bg-[#fff] shadow-[0_1px_10px_0px_#d1d1d1] overflow-hidden">
                                                    <select
                                                        id="countries" name="code"
                                                        class="font-[500] appearance-none text[#2E3456] text-[16px] rounded-lg focus:ring-blue-500 focus:border-blue-500 block py-[15px] px-[5px] dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 w-[100px] uppercase focus:outline-none bg-[#fff]">
                                                        @foreach ($countryList as $countryCode => $country)
                                                            <option value="{{ $country['phone_prefix'] }}" > {{ $country['flag'] }} {{ $country['phone_prefix'] }}</option>
                                                        @endforeach
                                                    </select>
                                                    <input type="number" name="phone" placeholder="New Number" class="placeholder:[#808080] text[#2E3456] text-[18px] w-[100%] p-[15px] font-[500] leading-[24px] w-[calc(100%-100px)] focus:outline-none border-l-[1px] border-[#4E6AFF]" required/>
                                                    <input type="hidden" name="type" value="number">
                                                    <input type="hidden" name="login" value="true">
                                                </div>

                                                <div class="w-[60%] mx-auto">
                                                    <button class="text-[#fff] text-[18px] font-[500] bg-[#6161FF] rounded-[30px] border-[1px] border-[#6161FF] hover:bg-transparent w-full h-[60px] hover:text-[#6161FF]">Login</button>
                                                    <div id="messageContainer" class="mt-4"></div>
                                                </div>

                                            </form>
                                            <div class="w-full flex items-center gap-[15px] mt-[35px] mb-[18px] justify-center  md:flex-wrap">
                                                <a href="{{ route('term-services') }}">
                                                    <p class="text-[#2D3353] text-[16px] font-[400] leading-[18px]">
                                                        By Signing up you agree to our </p>
                                                </a><a href="{{ route('term-services') }}"><span
                                                        class="text-[#2D3353] text-[16px] font-[700] leading-[18px] bg-[#fff] py-[10px] px-[20px] border-[1px] border-[#4E6AFF] rounded-[30px]">Terms
                                                        & Service.</span></a>
                                            </div>
                                            <div class="w-full flex items-center gap-[15px] mb-[35px] mt-[40px] justify-center">
                                                <a href="{{ route('register') }}">
                                                    <p class="text-[#2D3353] text-[16px] font-[400] leading-[18px]">
                                                        Create new account?</p>
                                                </a><a href="{{ route('register') }}"><span
                                                        class="text-[#2D3353] text-[16px] font-[700] leading-[18px] bg-[#fff] py-[10px] px-[20px] border-[1px] border-[#4E6AFF] rounded-[30px]">Signup</span></a>
                                            </div>
                                  </div>
                           </div>
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

                        <div class="w-full md:w-[50%] mt-[20px] md:mt-0">
                            <img src="{{ asset('images/login.png') }}" class="w-full md:w-auto">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>




<!------------------Modal Fot OTP ------------------>
<!-- <div class="fixed z-10 overflow-y-auto top-0 w-full left-0 hidden" id="modal">
        <div class="flex items-center justify-center min-height-100vh pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-900 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
            <div class="inline-block align-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full p-[20px] overflow-y-auto"
                role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <button type="button" id="toggleModal"><img src="{{ asset('images/cancle.svg') }}" class="w-[35px] p-[10px]"></button>
                <div class="bg-white p-[10px] text-center">
                    <h4 class="text-[42px] text-[#000] font-[700] leading-[46px]">We just texted you</h4>
                    <p class="text-[#5F5C5C] font-[400] text-[18px] my-[30px]">Please enter the verification code we just sent to <phonenumber></phonenumber></p>
                    <form class="flex flex-col gap-[30px]" id="authform_popup">
                        <div class="flex items-center gap-[20px] justify-center">
                            <input type="number" class="otp-automovetonextinput focus:outline-[#6161FF] border-[1px] rounded-[15px] bg-[#EAEAFF] h-[50px] w-[50px] p-[10px] text-center" min="0" max="9" name="otp1" required/>
                            <input type="number" class="otp-automovetonextinput focus:outline-[#6161FF] border-[1px] rounded-[15px] bg-[#EAEAFF] h-[50px] w-[50px] p-[10px] text-center" min="0" max="9" name="otp2" required/>
                            <input type="text" class="otp-automovetonextinput focus:outline-[#6161FF] border-[1px] rounded-[15px] bg-[#EAEAFF] h-[50px] w-[50px] p-[10px] text-center" min="0" max="9" name="otp3" required/>
                            <input type="number" class="otp-automovetonextinput focus:outline-[#6161FF] border-[1px] rounded-[15px] bg-[#EAEAFF] h-[50px] w-[50px] p-[10px] text-center" min="0" max="9" name="otp4" required/>
                            <input type="number" class="otp-automovetonextinput focus:outline-[#6161FF] border-[1px] rounded-[15px] bg-[#EAEAFF] h-[50px] w-[50px] p-[10px] text-center" min="0" max="9" name="otp5" required/>
                            <input type="number" class="otp-automovetonextinput focus:outline-[#6161FF] border-[1px] rounded-[15px] bg-[#EAEAFF] h-[50px] w-[50px] p-[10px] text-center" min="0" max="9" name="otp6" required/>
                        </div>
                        <button class="my-[30px] bg-[#6161FF] rounded-[30px] gap-[10px] flex items-center justify-center text-[#fff] text-[18px] font-[700] leading-[21px] w-full h-[50px] hover:bg-transparent hover:text-[#6161FF] border-[1px] mt-[42px] border-[#6161FF] transition ease-in-out delay-150 verifyButton">Confirm</button>
                        <input type="hidden" name="phone" value="" >
                    </form>
                    <div class="messageContainer_sendotp"></div>
                    <h4 class="text-[#6161FF] font-[500] text-[32px]"><a href="javascript:void(0);" class="resendOtp">Didn’t get a code?</a></h4>

                </div>
            </div>
        </div>
    </div> -->

    
<!------------------End Modal Fot OTP ------------------>

@endsection

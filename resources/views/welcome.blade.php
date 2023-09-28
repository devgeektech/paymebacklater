@extends('layouts.app')

@section('content')
<!------------Bannner Section---------->
<section>
    <div class="back-img-banner bg-[url({{ asset('images/banner-bg.png') }})] bg-[bottom] bg-no-repeat bg-cover lg:pt-[0px] lg:pb-[150px] md:pt-[0px] md:pb-[100px] pb-[100px] pt-[40px]">
        <div class="container mx-auto xl:max-w-[1140px] px-[15px]">
            <div class="md:flex items-center justify-start">
                <div class="w-full md:w-1/2 " data-aos="fade-up" data-aos-duration="1500">
                    <h1 class="lg:text-[56px] md:text-[36px] md:leading-[46px] text-[#2D3353] font-[700] lg:leading-[64px] text-[26px] leading-[32px]">
                        Introducing our
                        convenient
                        bill
                        payment service! </h1>
                    <p class="text-[#54586C] md:text-[16px] my-[22px] font-[400]">
                        With our platform,
                        you
                        can easily upload any bills you have, such as utility bills, Car note, Rent, or monthly
                        subscriptions, and have them paid immediately. No more worrying about due dates or late
                        fees!</p>
                    <button class="px-[22px] lg:py-[10px] py-[10px] font-[500] bg-[#6161FF] shadow rounded-[10px] border-[1px] border-[#6161FF] text-[#fff] lg:text-[16px] md:text-[16px] hover:bg-transparent hover:text-[#6161FF] transition ease-in-out delay-150">Get
                        Started for Free</button>
                    <p class="text-[#54586C] lg:text-[18px] md:text-[18px] leading-[24px] font-[500] lg:mt-[39px] mb-[18px] mt-[20px]">
                        Join over <span class="text-[#6161FF]">500,000</span> happy customers!</p>
                    <div class="flex lg:w-[70%] w-full gap-[20px]">
                        <a href="#" class="w-[40%] hover:translate-y-2 transition ease-in duration-300"><img src="{{ asset('./images/google-play1.png')}}" class="w-[100%]" /></a>
                        <a href="#" class="w-[40%] hover:translate-y-2 transition ease-in duration-300"><img src="{{ asset('./images/app-store.png')}}" class="w-[100%]" /></a>
                    </div>
                </div>
                <div class="w-full md:w-1/2 text-center" data-aos="fade-up" data-aos-duration="1500">
                    <div class="max-w-full md:max-w-[80%] ml-auto">
                        <div id="default-carousel" class="relative mb-4 mt-4 ml-4" data-carousel="static">
                            <!-- Carousel wrapper -->
                            <div class="overflow-hidden relative lg:h-[540px]  h-[500px] rounded-lg">
                                <!-- Item 1 -->
                                <div class="hidden duration-700 ease-in-out z-[999]" data-carousel-item>
                                    <img src="{{ asset('./images/slider-1.png')}}" class="block absolute top-1/2 left-1/2 bg-[#fff] w-full rounded-[50%] -translate-x-1/2 -translate-y-1/2" alt="...">
                                </div>
                                <!-- Item 2 -->
                                <div class="hidden duration-700 ease-in-out z-[999]" data-carousel-item>
                                    <img src="{{ asset('./images/slider-1.png')}}" class="block absolute top-1/2 left-1/2 bg-[#fff] w-full rounded-[50%] -translate-x-1/2 -translate-y-1/2" alt="...">
                                </div>
                                <!-- Item 3 -->
                                <div class="hidden duration-700 ease-in-out z-[999]" data-carousel-item>
                                    <img src="{{ asset('./images/slider-1.png')}}" class="block absolute top-1/2 left-1/2 bg-[#fff] rounded-[50%] -translate-x-1/2 -translate-y-1/2" alt="...">
                                </div>
                            </div>
                            <!-- Slider indicators -->
                            <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                                <button type="button" class="w-[30px] h-3 rounded-full bg-[#000]" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                                <button type="button" class="w-[30px] h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                                <button type="button" class="w-[30px] h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------End Bannner Section---------->

<!------------Pay Yours Bills-------------->
<section>
    <div class="container mx-auto xl:max-w-[1140px] px-[15px]">
        <div class="flex lg:flex-nowrap flex-wrap items-center justify-between gap-[20px]">
            <div class="lg:w-[33%] md:w-[48%] w-full" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="text-[#2D3353] lg:text-[48px] text-[26px] md:leading-[40px] leading-[32px] lg:leading-[56px] text-center md:text-left md:text-[32px] font-[700]">
                    Pay Your Bills On Time with
                    PayMeBackLater</h2>
            </div>
            <div class="lg:w-[33%] md:w-[48%] w-full" data-aos="fade-up" data-aos-duration="1500">
                <img src="{{ asset('./images/Group 1000005423.png')}}" />
            </div>
            <div class="lg:w-[33%] md:w-[100%] w-full" data-aos="fade-up" data-aos-duration="1500">
                <!--------for image boxes----->
                <div class="w-full flex items-start gap-[20px] mb-[22px]">
                    <div class="w-1/5">
                        <img src="{{ asset('./images/admin-icon.svg')}}" class="mx-auto w-[45px]" />
                    </div>
                    <div class="w-3/4">
                        <h4 class="text-[#2D3353] text-[18px] md:text-[18px] lg:text-[22px] leading-[30px] font-[700]">
                            Create an
                            Account</h4>
                        <p class="text-[#54586C] lg:text-[16px] text-[16px] md:text-[16px] leading-[22px] font-[400] mt-[10px]">
                            Securely connect your bank accounts and credit cards to get a single view of where
                            you currently stand.</p>
                    </div>
                </div>
                <!--------End image boxes----->
                <!--------for image boxes----->
                <div class="w-full flex items-start gap-[20px] mb-[22px]">
                    <div class="w-1/5">
                        <img src="{{ asset('./images/icon-2.svg')}}" class="mx-auto w-[45px] p-[10px] bg-[#EAEAFF] rounded-[50%]" />
                    </div>
                    <div class="w-3/4">
                        <h4 class="text-[#2D3353] text-[18px] md:text-[18px] lg:text-[22px] leading-[30px] font-[700]">
                            Connect
                            Your Bank Account</h4>
                        <p class="text-[#54586C] text-[16px] leading-[22px] font-[400] mt-[10px]">
                            Understand what you can afford to spend each week and set a target for improvement.
                        </p>
                    </div>
                </div>
                <!--------End image boxes----->
                <!--------for image boxes----->
                <div class="w-full flex items-start gap-[20px] mb-[22px]">
                    <div class="w-1/5">
                        <img src="{{ asset('./images/uplod.svg')}}" class="mx-auto w-[45px]" />
                    </div>
                    <div class="w-3/4">
                        <h4 class="text-[#2D3353] text-[18px] md:text-[18px] lg:text-[22px] leading-[30px] font-[700]">
                            Upload
                            your Bills</h4>
                        <p class="text-[#54586C] text-[16px] leading-[22px] font-[400] mt-[10px]">
                            Take the first step towards effortless control over your bills - Upload any bills
                        </p>
                    </div>
                </div>
                <!--------End image boxes----->
                <!--------for image boxes----->
                <div class="w-full flex items-start gap-[20px] mb-[22px]">
                    <div class="w-1/5">
                        <img src="{{ asset('./images/uploadbills.svg')}}" class="mx-auto w-[45px] p-[10px] bg-[#EAEAFF] rounded-[50%]" />
                    </div>
                    <div class="w-3/4">
                        <h4 class="text-[#2D3353] text-[18px] md:text-[18px] lg:text-[22px] leading-[30px] font-[700]">
                            Verify
                            your Identity</h4>
                        <p class="text-[#54586C] text-[16px] leading-[22px] font-[400] mt-[10px]">
                            Take the first step towards effortless control over your bills - Verify your
                            identity
                        </p>
                    </div>
                </div>
                <!--------End image boxes----->
                <!--------for image boxes----->
                <div class="w-full flex items-start gap-[20px]">
                    <div class="w-1/5">
                        <img src="{{ asset('./images/bill-pay-icon1.svg')}}" class="mx-auto w-[45px] " />
                    </div>
                    <div class="w-3/4">
                        <h4 class="text-[#2D3353] text-[18px] md:text-[18px] lg:text-[22px] leading-[30px] font-[700]">
                            Your Bills
                            Get Paid</h4>
                        <p class="text-[#54586C] text-[16px] leading-[22px] font-[400] mt-[10px]">
                            Discover whether you can reduce your debt costs without affecting your credit score.
                        </p>
                    </div>
                </div>
                <!--------End image boxes----->
                <div class="text-center mt-[30px]">
                    <button class="px-[46px] lg:py-[10px] py-[10px] font-[500] bg-[#6161FF] shadow rounded-[10px] border-[1px] border-[#6161FF] text-[#fff]  text-[16px] lg:text-[16px] hover:bg-transparent hover:text-[#6161FF] transition ease-in-out delay-150">Get
                        Started</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------End Pay Yours Bills-------------->

<!------------Pay Now or Later-------------->
<section>
    <div class="bg-[url({{ asset('images/wave-bg-image.png') }})] md:pt-[160px] pb-[100px] pt-[80px] md:pb-[100px] lg:py-[280px] bg-cover bg-no-repeat bg-center 2xl:py-[380px] xl:py-[300px]">
        <div class="container mx-auto xl:max-w-[1140px] px-[15px]">
            <div class="flex flex-wrap md:flex-nowrap items-start justify-between gap-[40px] md:gap-[20px]">
                <div class="md:w-[33%] w-[90%] mx-auto text-center" data-aos="fade-up" data-aos-duration="1500">
                    <img src="{{ asset('./images/quick.svg')}}" class="mx-auto lg:w-[78px] lg:h-[80px] w-[40px]" />
                    <h4 class="my-[15px] md:my-[25px] text-[#2D3353] lg:text-[22px] font-[700] lg:leading-[30px] text-center lg:max-w-[80%] max-w-full  mx-auto text-[18px] leading-[23px] ">
                        The quickest and most effortless method to pay any bill</h4>
                    <p class="text-[#54586C] leading-[22px] text-[16px] font-[400] max-w-[90%] mx-auto">
                        Simply
                        take a photo of your bill and we take care of the rest!</p>
                </div>
                <div class="md:w-[33%] w-[90%] mx-auto text-center" data-aos="fade-up" data-aos-duration="1500">
                    <img src="{{ asset('./images/enhance.svg')}}" class="mx-auto lg:w-[110px] lg:h-[82px] w-[70px] h-[48px]" />
                    <h4 class="my-[15px] md:my-[25px] text-[#2D3353] lg:text-[22px] font-[700] lg:leading-[30px] text-center lg:max-w-[80%] max-w-full  mx-auto text-[18px] leading-[23px]">
                        Enhance and build your credit history</h4>
                    <p class="text-[#54586C] leading-[22px] text-[16px] font-[400] max-w-[90%] mx-auto">
                        Watch
                        your credit history flourish as PayMeBackLater reports each payment to credit bureaus
                    </p>
                </div>
                <div class="md:w-[33%] w-[90%] mx-auto text-center" data-aos="fade-up" data-aos-duration="1500">
                    <img src="{{ asset('./images/nomore.svg')}}" class="mx-auto lg:w-[85px] lg:h-[85px] w-[55px]" />
                    <h4 class="my-[15px] md:my-[25px] text-[#2D3353] lg:text-[22px] font-[700] lg:leading-[30px] text-center lg:max-w-[80%] max-w-full  mx-auto text-[18px] leading-[23px]">
                        No more rigid due dates or financial strains</h4>
                    <p class="text-[#54586C] text-[16px] leading-[22px] font-[400] max-w-[90%] mx-auto">
                        Take a
                        moment to upload your bills now and enjoy the unparalleled flexibility of paying later
                        in just few easy installments </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------End Pay Now or Later-------------->

<!------------Open An Account-------------->
<section>
    <div class="container mx-auto xl:max-w-[1140px] px-[15px]">
        <div class="flex flex-wrap md:flex-nowrap items-center justify-start gap-[40px] md:gap-[20px] lg:pt-[40px] lg:pb-[90px] md:pt-[60px] md:pb-[20px]">
            <div class="lg:w-[60%] md:w-[50%] w-full order-2 md:order-1" data-aos="fade-up" data-aos-duration="1500">
                <img src="{{ asset('images/my-profile.png')}}" />
            </div>
            <div class="text-center md:text-left lg:w-[40%] md:w-[50%] lg:ml-[70px] md:pl-[30px] w-full order-1 md:order-2" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="text-[#2D3353] lg:text-[48px] font-[700] text-[26px] leading-[32px] md:text-[32px] md:leading-[40px] lg:leading-[56px]">
                    Open an Account<br> in
                    Minutes</h2>
                <p class="text-[#54586C] text-[16px] leading-[22px] font-[400] my-[25px]">
                    It's
                    time to redefine the way you view your bills. They're no longer just expenses to be managed;
                    they're your pathway to credit success. Join us today and harness the power of everyday
                    payments to make a lasting impact on your credit journey. Let's build credit together, one
                    payment at a time.</p>
                <button class="px-[22px] lg:py-[10px] py-[10px] font-[500] bg-[#6161FF] shadow rounded-[10px] border-[1px] border-[#6161FF] text-[#fff] text-[16px] lg:text-[18px] hover:bg-transparent hover:text-[#6161FF] transition ease-in-out delay-150">Get
                    Started</button>
            </div>
        </div>
    </div>
</section>
<!------------End An Account-------------->

<!------------Build Your Credit -------------->
<section>
    <div class="container mx-auto xl:max-w-[1140px] px-[15px]">
        <div class="flex items-center flex-wrap md:flex-nowrap justify-start gap-[40px] md:gap-[20px] lg:pt-[0px] lg:pb-[90px] py-[40px] md:pt-[60px] md:pb-[20px]">
            <div class="text-center md:text-left lg:w-[45%] md:w-[50%] w-full md:pr-[30px]" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="text-[#2D3353] lg:text-[48px] font-[700] text-[26px] leading-[32px] md:text-[32px] md:leading-[40px] lg:leading-[56px]">
                    Build Credit PayMeBackLater</h2>
                <p class="text-[#54586C] text-[16px] leading-[22px] font-[400] my-[25px]">
                    Imagine turning your everyday expenses into valuable credit-building opportunities. With our
                    innovative approach, your routine bills become a stepping stone to a stronger credit
                    profile. How? It's simple – we ensure that each and every payment you make gets reported to
                    the leading credit bureaus: TransUnion®, Experian®, and Equifax®.</p>
                <button class="px-[22px] lg:py-[10px] py-[10px] font-[500] bg-[#6161FF] shadow rounded-[10px] border-[1px] border-[#6161FF] text-[#fff] text-[16px] lg:text-[18px] hover:bg-transparent hover:text-[#6161FF] transition ease-in-out delay-150">Get
                    Started</button>
            </div>
            <div class="lg:w-[55%] md:w-[50%] w-full" data-aos="fade-up" data-aos-duration="1500">
                <img src="{{ asset('images/build-credit.png')}}" />
            </div>
        </div>
    </div>
</section>
<!------------End Build Your Credit -------------->

<!------------Open An Account-------------->
<section>
    <div class="container mx-auto xl:max-w-[1140px] px-[15px]">
        <div class="flex items-center flex-wrap md:flex-nowrap justify-start gap-[40px] md:gap-[20px] lg:pt-[0px] lg:pb-[90px] md:pt-[60px] md:pb-[20px]">
            <div class="lg:w-[60%] md:w-[50%] w-full order-2 md:order-1" data-aos="fade-up" data-aos-duration="1500">
                <img src="{{ asset('images/safeway.png')}}" />
            </div>
            <div class="text-center md:text-left lg:w-[40%] md:w-[50%] lg:ml-[112px] md:pl-[30px] w-full order-1 md:order-2" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="text-[#2D3353] lg:text-[48px] font-[700] text-[26px] md:text-[32px] leading-[32px] md:leading-[40px] lg:leading-[56px]">
                    Safe way to<br class="none lg:block">
                    Build Credit</h2>
                <p class="text-[#54586C] text-[16px] leading-[22px] font-[400] my-[25px]">
                    This means that every time you settle a bill, you're not only fulfilling your financial
                    obligations, but you're also laying the groundwork for a more secure financial future. Your
                    responsible payment behavior is captured, recognized, and reflected in your credit history.
                </p>
                <button class="px-[22px] lg:py-[10px] py-[10px] font-[500] bg-[#6161FF] shadow rounded-[10px] border-[1px] border-[#6161FF] text-[#fff] text-[16px] lg:text-[18px] hover:bg-transparent hover:text-[#6161FF] transition ease-in-out delay-150">Get
                    Started</button>
            </div>
        </div>
    </div>
</section>
<!------------End An Account-------------->

<!------------Type Of Bill Pay-------------->
<section>
    <div class="bg-[url({{ asset('images/type-of-bill-bg.png') }})] bg-cover bg-no-repeat bg-[top] py-[40px] md:pb-[60px] md:pt-[100px] lg:pb-[90px] lg:pt-[150px]">
        <div class="container mx-auto xl:max-w-[1140px] px-[15px]">
            <div class="lg:max-w-[500px] md:w-[50%] mx-auto text-center" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="text-[#2D3353] text-[26px] md:text-[32px] leading-[32px] md:leading-[40px] lg:text-[48px] lg:leading-[56px] font-[700]">
                    Pay any type of
                    bill with PayBack Me</h2>
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 items-start gap-[10px] lg:gap-[30px] mt-[30px] md:mt-[53px] justify-center" data-aos="fade-up" data-aos-duration="1500">
                <!--cards-->
                <div class="p-[15px] lg:p-[20px] bg-[#fff] w-[100%] h-[100%] text-center rounded-[15px] shadow-[1px_1px_10px_1px_#0000001a]">
                    <img src="{{ asset('images/rent.svg')}}" class="mx-auto w-[40px] lg:w-auto" />
                    <h4 class="text-[#2D3353] text-[22px] mt-[20px] mb-[5px] leading-[30px] font-[700] lg:my-[9px]">
                        Rent</h4>
                    <p class="text-[#54586C] lg:text-[16px] text-[14px] font-[400] lg:leading-[22px]">
                        Stay in your comfort zone without worry – our rent bill solutions, paired with
                        PayMeBackLater's options, provide a reliable path to keeping a roof over your head.
                    </p>
                </div>
                <!--end cards-->
                <!--cards-->
                <div class="p-[15px] lg:p-[20px] bg-[#fff] w-[100%] h-[100%] text-center rounded-[15px] shadow-[1px_1px_10px_1px_#0000001a]">
                    <img src="{{ asset('images/car-note.svg')}}" class="mx-auto w-[40px] lg:w-auto" />
                    <h4 class="text-[#2D3353] text-[22px] mt-[20px] mb-[5px] lg:leading-[30px] font-[700] lg:my-[9px]">
                        Car Note</h4>
                    <p class="text-[#54586C] lg:text-[16px] text-[14px] font-[400] lg:leading-[22px]">
                        Keep your wheels in motion – our car note bill assistance, in partnership with
                        PayMeBackLater, offers a dependable solution when finances are tight.</p>
                </div>
                <!--end cards-->
                <!--cards-->
                <div class="p-[15px] lg:p-[20px] bg-[#fff] w-[100%] h-[100%] text-center rounded-[15px] shadow-[1px_1px_10px_1px_#0000001a]">
                    <img src="{{ asset('images/mortgage.svg')}}" class="mx-auto w-[40px] lg:w-auto" />
                    <h4 class="text-[#2D3353] text-[22px] mt-[20px] mb-[5px] lg:leading-[30px] font-[700] lg:my-[9px]">
                        Mortgage</h4>
                    <p class="text-[#54586C] lg:text-[16px] text-[14px] font-[400] lg:leading-[22px]">
                        Protect your home and ease financial strain – our mortgage bill support, coupled with
                        PayMeBackLater, offers stability during challenging times.
                    </p>
                </div>
                <!--end cards-->
                <div class="p-[20px] bg-[#fff] w-[100%] h-[100%] text-center rounded-[15px] shadow-[1px_1px_10px_1px_#0000001a]">
                    <img src="{{ asset('images/cylinder.svg')}}" class="mx-auto w-[40px] lg:w-auto" />
                    <h4 class="text-[#2D3353] text-[22px] mt-[20px] mb-[5px] lg:leading-[30px] font-[700] lg:my-[9px]">
                        Gas & Electric</h4>
                    <p class="text-[#54586C] lg:text-[16px] text-[14px] font-[400] lg:leading-[22px]">
                        Ease your financial burden and keep the lights on with our supportive gas and electric
                        services, complemented by PayMeBackLater's flexible bill payment solutions.
                    </p>
                </div>
                <!--end cards-->
                <div class="p-[15px] lg:p-[20px] bg-[#fff] w-[100%] h-[100%]  text-center rounded-[15px] shadow-[1px_1px_10px_1px_#0000001a]">
                    <img src="{{ asset('images/hospital.svg')}}" class="mx-auto w-[40px] lg:w-auto" />
                    <h4 class="text-[#2D3353] text-[22px] mt-[20px] mb-[5px] lg:leading-[30px] font-[700] lg:my-[9px]">
                        Hospital Bills</h4>
                    <p class="text-[#54586C] lg:text-[16px] text-[14px] font-[400] lg:leading-[22px]">
                        Your health is a priority, and so is your financial well-being – our hospital bill
                        solutions, in partnership with PayMeBackLater, provide a lifeline to manage medical
                        expenses without added stress.</p>
                </div>
                <!--end cards-->
                <!--cards-->
                <div class="p-[15px] lg:p-[20px] bg-[#fff] w-[100%] h-[100%] text-center rounded-[15px] shadow-[1px_1px_10px_1px_#0000001a]">
                    <img src="{{ asset('images/car-repair.svg')}}" class="mx-auto w-[40px] lg:w-auto" />
                    <h4 class="text-[#2D3353] text-[22px] mt-[20px] mb-[5px] lg:leading-[30px] font-[700] lg:my-[29px]">
                        Car Repair</h4>
                    <p class="text-[#54586C] lg:text-[16px] text-[14px] font-[400] lg:leading-[22px]">
                        Get your car back on the road without straining your wallet – PayMeBackLater offers
                        affordable car repair options, ensuring you can hit the road now and settle the bill
                        later when finances are more flexible.</p>
                </div>
                <!--end cards-->

                <!--cards-->
                <div class="p-[15px] lg:p-[20px] bg-[#fff] w-[100%] h-[100%] text-center rounded-[15px] shadow-[1px_1px_10px_1px_#0000001a]">
                    <img src="{{ asset('images/day-care.svg')}}" class="mx-auto w-[40px] lg:w-auto" />
                    <h4 class="text-[#2D3353] text-[22px] mt-[20px] mb-[5px] lg:leading-[30px] font-[700] lg:my-[9px]">
                        Day Care</h4>
                    <p class="text-[#54586C] lg:text-[16px] text-[14px] font-[400] lg:leading-[22px]">
                        Ensure your child's care and well-being – our day care bill assistance, enhanced by
                        PayMeBackLater, offers a helping hand during financial constraints.</p>
                </div>
                <!--end cards-->
                <!--cards-->
                <div class="p-[15px] lg:p-[20px] bg-[#fff] w-[100%] h-[100%]  text-center rounded-[15px] shadow-[1px_1px_10px_1px_#0000001a]">
                    <img src="{{ asset('images/insurance.png')}}" class="mx-auto w-[40px] lg:w-auto" />
                    <h4 class="text-[#2D3353] text-[22px] mt-[20px] mb-[5px] lg:leading-[30px] font-[700] lg:my-[9px]">
                        Insurance</h4>
                    <p class="text-[#54586C] lg:text-[16px] text-[14px] font-[400] lg:leading-[22px]">
                        Secure your peace of mind even when funds are limited – our insurance bill support,
                        paired with PayMeBackLater, offers a safety net to keep your coverage intact.</p>
                </div>
                <!--end cards-->
                <!--cards-->
                <div class="p-[15px] lg:p-[20px] bg-[#fff] w-[100%] h-[100%]  text-center rounded-[15px] shadow-[1px_1px_10px_1px_#0000001a]">
                    <img src="{{ asset('images/waterbill.svg')}}" class="mx-auto w-[40px] lg:w-auto" />
                    <h4 class="text-[#2D3353] text-[22px] mt-[20px] mb-[5px] lg:leading-[30px] font-[700] lg:my-[9px]">
                        Water Bills</h4>
                    <p class="text-[#54586C] lg:text-[16px] text-[14px] font-[400] lg:leading-[22px]">
                        Keep your taps flowing and your budget in check – our water bill assistance, combined
                        with PayMeBackLater, ensures you never compromise on this vital resource.</p>
                </div>
                <!--end cards-->
                <!--cards-->
                <div class="p-[15px] lg:p-[20px] bg-[#fff] w-[100%] h-[100%]  text-center rounded-[15px] shadow-[1px_1px_10px_1px_#0000001a]">
                    <img src="{{ asset('images/dental.svg')}}" class="mx-auto w-[40px] lg:w-auto" />
                    <h4 class="text-[#2D3353] text-[22px] mt-[20px] mb-[5px] lg:leading-[30px] font-[700] lg:my-[9px]">
                        Dental</h4>
                    <p class="text-[#54586C] lg:text-[16px] text-[14px] font-[400] lg:leading-[22px]">
                        Maintain your oral health without compromise – our dental bill assistance, complemented
                        by PayMeBackLater, ensures you can smile confidently.</p>
                </div>
                <!--end cards-->
                <!--cards-->
                <!--cards-->
                <div class="p-[15px] lg:p-[20px] bg-[#fff] w-[100%] h-[100%]  text-center rounded-[15px] shadow-[1px_1px_10px_1px_#0000001a]">
                    <img src="{{ asset('images/phonebill.svg')}}" class="mx-auto w-[40px] lg:w-auto" />
                    <h4 class="text-[#2D3353] text-[22px] mt-[20px] mb-[5px] lg:leading-[30px] font-[700] lg:my-[9px]">
                        Phone Bill</h4>
                    <p class="text-[#54586C] lg:text-[16px] text-[14px] font-[400] lg:leading-[22px]">
                        Keep your lines open and worry-free – our phone bill solutions, combined with
                        PayMeBackLater, offer a reliable way to stay connected without straining your budget.
                    </p>
                </div>
                <!--end cards-->
                <!--cards-->
                <div class="p-[15px] lg:p-[20px] bg-[#fff] w-[100%] h-[100%]  text-center rounded-[15px] shadow-[1px_1px_10px_1px_#0000001a]">
                    <img src="{{ asset('images/cable.svg')}}" class="mx-auto w-[40px] lg:w-auto" />
                    <h4 class="text-[#2D3353] text-[22px] mt-[20px] mb-[5px] lg:leading-[30px] font-[700] lg:my-[9px]">
                        Cable</h4>
                    <p class="text-[#54586C] lg:text-[16px] text-[14px] font-[400] lg:leading-[22px]">
                        Don't miss out on your favorite shows – our cable bill solutions, combined with
                        PayMeBackLater, ensure you can relax and enjoy without the worry of late payments.</p>
                </div>
                <!--end cards-->
            </div>
        </div>
    </div>
</section>
<!------------End An Account-------------->

<!------------End An Account-------------->
<section>
    <div class="container mx-auto xl:max-w-[1140px] px-[15px] text-center pt-[60px] lg:pt-[90px]">
        <div class="w-full lg:mb-[57px] mb-[20px]" data-aos="fade-up" data-aos-duration="1500">
            <h2 class="text-[#2D3353] md:text-[32px] text-[26px] leading-[32px] md:leading-[40px] lg:text-[48px] lg:leading-[56px] font-[700]">
                You're in great Hand!
            </h2>
            <h6 class="lg:max-w-[60%] lg:mx-auto text-[#54586C] leading-[20px] text-[16px] lg:text-[16px] lg:leading-[22px] font-[500] mt-[14px] mb-[22px]">
                Join a community of satisfied users who have experienced the convenience and excellence of our
                service – you're in great hand!</h6>
            <div class="flex flex-wrap md:flex-nowrap items-center justify-center gap-[20px]">
                <span class="w-[100%] md:w-auto text-[#54586C] text-[16px] leading-[22px] lg:text-[16px] lg:leading-[22px] font-[400] flex items-center justify-center gap-[10px] bg-[#EAEAFF] rounded-[30px] py-[13px] px-[33px]"><b>4.9</b><img src="{{ asset('images/star.svg')}}" class="w-[22px]" />On Facebook</span>
                <span class="w-[100%] md:w-auto text-[#54586C] text-[16px] leading-[22px] lg:text-[16px] lg:leading-[22px] font-[400] flex items-center justify-center gap-[10px] bg-[#EAEAFF] rounded-[30px] py-[13px] px-[33px]"><b>5.0</b><img src="{{ asset('images/star.svg')}}" class="w-[22px]" />On Google</span>
                <span class="w-[100%] md:w-auto text-[#54586C] text-[16px] leading-[22px] lg:text-[16px] lg:leading-[22px] font-[400] flex items-center justify-center gap-[10px] bg-[#EAEAFF] rounded-[30px] py-[13px] px-[33px]"><b>5.0</b><img src="{{ asset('images/star.svg')}}" class="w-[22px]" />On App Store</span>
            </div>
        </div>
    </div>
    <div class="container mx-auto xl:max-w-[1140px] px-[15px] relative overflow-hidden" data-aos="fade-up" data-aos-duration="1500">
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper pb-[60px] lg:pb-[100px] pt-[20px]">
                <div class="swiper-slide shadow-[1px_1px_10px_1px_#00000014] md:py-[37px] p-[15px] md:px-[63px] rounded-lg">
                    <img src="{{ asset('images/testimonial.png')}}" class="md:w-[97px] md:h-[97px] w-[50px] mx-auto" />
                    <h4 class="text-[#2D3353] text-[20px] md:leading-[30px] md:text-[22px] font-[700] md:my-[8px] mt-[10px]">
                        James D</h4>
                    <p class="text-[#54586C] text-[16px] md:text-[16px] font-[400] md:leading-[22px] mb-[20px]">
                        "Absolutely fantastic! This service has made my bill payments a breeze. Highly
                        recommended!"</p>
                    <img src="{{ asset('images/fivestars.svg')}}" class="md:w-[142px] w-[92px] mx-auto" />
                </div>
                <div class="swiper-slide shadow-[1px_1px_10px_1px_#00000014] md:py-[37px] p-[15px] md:px-[63px] rounded-lg">
                    <img src="{{ asset('images/testimonial1.png')}}" class="md:w-[97px] md:h-[97px] w-[50px] mx-auto" />
                    <h4 class="text-[#2D3353] text-[20px] md:leading-[30px] md:text-[22px] font-[700] md:my-[8px] mt-[10px]">
                        Alex X</h4>
                    <p class="text-[#54586C] text-[16px] md:text-[16px] font-[400] md:leading-[22px] mb-[20px]">
                        "Life-changing app! I can't believe how much time and stress I've saved. The best
                        financial decision I've made."</p>
                    <img src="{{ asset('images/fivestars.svg')}}" class="md:w-[142px] w-[92px] mx-auto" />
                </div>
                <div class="swiper-slide shadow-[1px_1px_10px_1px_#00000014] md:py-[37px] p-[15px] md:px-[63px] rounded-lg">
                    <img src="{{ asset('images/testimonial.png')}}" class="md:w-[97px] md:h-[97px] w-[50px] mx-auto" />
                    <h4 class="text-[#2D3353] text-[20px] md:leading-[30px] md:text-[22px] font-[700] md:my-[8px] mt-[10px]">
                        James D</h4>
                    <p class="text-[#54586C] text-[16px] md:text-[16px] font-[400] md:leading-[22px] mb-[20px]">
                        "Absolutely fantastic! This service has made my bill payments a breeze. Highly
                        recommended!"</p>
                    <img src="{{ asset('images/fivestars.svg')}}" class="md:w-[142px] w-[92px] mx-auto" />
                </div>
                <div class="swiper-slide shadow-[1px_1px_10px_1px_#00000014] md:py-[37px] p-[15px] md:px-[63px] rounded-lg">
                    <img src="{{ asset('images/testimonial1.png')}}" class="md:w-[97px] md:h-[97px] w-[50px] mx-auto" />
                    <h4 class="text-[#2D3353] text-[20px] md:leading-[30px] md:text-[22px] font-[700] md:my-[8px] mt-[10px]">
                        Alex X</h4>
                    <p class="text-[#54586C] text-[16px] md:text-[16px] font-[400] md:leading-[22px] mb-[20px]">
                        "Life-changing app! I can't believe how much time and stress I've saved. The best
                        financial decision I've made."</p>
                    <img src="{{ asset('images/fivestars.svg')}}" class="md:w-[142px] w-[92px] mx-auto" />
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<!------------End An Account-------------->

<!------------Free App on your Phone -------------->
<section>
    <div class="container mx-auto xl:max-w-[1140px] px-[15px] text-center lg:pt-[0px]" data-aos="fade-up" data-aos-duration="1500">
        <div class="max-w-[550px] mx-auto lg:py-[100px] md:py-[60px] py-[40px]">
            <h2 class="text-[#2D3353] text-[26px] leading-[32px] md:leading-[40px] md:text-[32px] lg:text-[48px] font-[700] lg:leading-[56px]">
                Get the Free App on
                Your Phone</h2>
            <p class="text-[#54586C] md:text-[16px] lg:text-[16px] font-[500] text-[16px] md:leading-[22px] lg:mt-[14px] md:mb-[32px] my-[15px]">
                Join over <span class="text-[#6161FF] font-[700]">500,000</span> happy
                customers!</p>
            <div class="flex w-[100%] gap-[20px] justify-center">
                <a href="#" class="w-[40%] hover:translate-y-2 transition ease-in duration-300"><img src="{{ asset('./images/google-play1.png')}}" class="w-[100%]" /></a>
                <a href="#" class="w-[40%] hover:translate-y-2 transition ease-in duration-300"><img src="{{ asset('./images/app-store.png')}}" class="w-[100%]" /></a>
            </div>
        </div>
    </div>
</section>
<!------------End Free App on your Phone -------------->

<!------------FAQ -------------->
<section data-aos="fade-up" data-aos-duration="1500">
    <div class="bg-[url('images/faq-bg.png')] bg-cover md:py-[60px] py-[40px] lg:py-[90px] bg-no-repeat bg-[bottom]">
    <div class="container mx-auto xl:max-w-[1140px] px-[15px]">
                    <h2 class="text-[#303343] text-[26px] md:text-[32px] lg:text-[48px] lg:leading-[56px] font-[700] text-center">
                        Frequently Asked Questions</h2>
                    <div class="w-full lg:my-[35px] md:my-[40px] mb-[40px]">
                        <div id="accordion-color" data-accordion="collapse"
                            data-active-classes="bg-transparent dark:bg-gray-800 text-[#303343] dark:text-white">
                            <div class="border-b-[1px] border-[#8A8A8A]">
                                <h2 id="accordion-color-heading-1">
                                    <button type="button"
                                        class="flex items-center justify-between w-full py-[25px] lg:py-[25px] font-[700] text-left text-[#303343] text-[18px] lg:text-[18px]"
                                        data-accordion-target="#accordion-color-body-1" aria-expanded="true"
                                        aria-controls="accordion-color-body-1">
                                        <span>What is PayMeBackLater and how does it work?</span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-color-body-1" class="hidden"
                                    aria-labelledby="accordion-color-heading-1">
                                    <div class="lg:pb-[42px] pb-[25px]">
                                        <p
                                            class="text-[#303343] text-[16px] leading-[22px] font-[400]">
                                            PayMeBackLater is a revolutionary bill payment platform that offers a
                                            flexible and convenient way to manage your bill payments. It allows you to
                                            upload your bills and choose to pay them in installments, providing you with
                                            the freedom to spread your payments over time while avoiding late fees and
                                            interest charges.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-b-[1px] border-[#8A8A8A]">
                                <h2 id="accordion-color-heading-2">
                                    <button type="button"
                                        class="flex items-center justify-between w-full py-[25px] lg:py-[25px] font-[700] text-left text-[#303343] text-[18px] lg:text-[18px]"
                                        data-accordion-target="#accordion-color-body-2" aria-expanded="false"
                                        aria-controls="accordion-color-body-2">
                                        <span>What affects my eligibility to use PayMeBackLater?</span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-color-body-2" class="hidden"
                                    aria-labelledby="accordion-color-heading-2">
                                    <div class="lg:pb-[42px] pb-[25px]">
                                        <p
                                            class="text-[#303343] text-[16px] leading-[22px] font-[400]">
                                            PayMeBackLater is a revolutionary bill payment platform that offers a
                                            flexible and convenient way to manage your bill payments. It allows you to
                                            upload your bills and choose to pay them in installments, providing you with
                                            the freedom to spread your payments over time while avoiding late fees and
                                            interest charges.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-b-[1px] border-[#8A8A8A]">
                                <h2 id="accordion-color-heading-3">
                                    <button type="button"
                                        class="flex items-center justify-between w-full py-[25px] lg:py-[25px] font-[700] text-left text-[#303343] text-[18px] lg:text-[18px]"
                                        data-accordion-target="#accordion-color-body-3" aria-expanded="false"
                                        aria-controls="accordion-color-body-3">
                                        <span>How will I keep track of my upcoming payments?</span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-color-body-3" class="hidden"
                                    aria-labelledby="accordion-color-heading-3">
                                    <div class="lg:pb-[42px] pb-[25px]">
                                        <p
                                            class="text-[#303343] text-[16px] leading-[22px] font-[400]">
                                            PayMeBackLater is a revolutionary bill payment platform that offers a
                                            flexible and convenient way to manage your bill payments. It allows you to
                                            upload your bills and choose to pay them in installments, providing you with
                                            the freedom to spread your payments over time while avoiding late fees and
                                            interest charges.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-b-[1px] border-[#8A8A8A]">
                                <h2 id="accordion-color-heading-4">
                                    <button type="button"
                                        class="flex items-center justify-between w-full py-[25px] lg:py-[25px] font-[700] text-left text-[#303343] text-[18px] lg:text-[18px]"
                                        data-accordion-target="#accordion-color-body-4" aria-expanded="false"
                                        aria-controls="accordion-color-body-4">
                                        <span>Will I get a receipt for my bill?</span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-color-body-4" class="hidden"
                                    aria-labelledby="accordion-color-heading-4">
                                    <div class="lg:pb-[42px] pb-[25px]">
                                        <p
                                            class="text-[#303343] text-[16px] leading-[22px] font-[400]">
                                            PayMeBackLater is a revolutionary bill payment platform that offers a
                                            flexible and convenient way to manage your bill payments. It allows you to
                                            upload your bills and choose to pay them in installments, providing you with
                                            the freedom to spread your payments over time while avoiding late fees and
                                            interest charges.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-b-[1px] border-[#8A8A8A]">
                                <h2 id="accordion-color-heading-5">
                                    <button type="button"
                                        class="flex items-center justify-between w-full py-[25px] lg:py-[25px] font-[700] text-left text-[#303343] text-[18px] lg:text-[18px]"
                                        data-accordion-target="#accordion-color-body-5" aria-expanded="false"
                                        aria-controls="accordion-color-body-5">
                                        <span>When and how much are the payments?</span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-color-body-5" class="hidden"
                                    aria-labelledby="accordion-color-heading-5">
                                    <div class="lg:pb-[42px] pb-[25px]">
                                        <p
                                            class="text-[#303343] text-[16px] leading-[22px] font-[400]">
                                            PayMeBackLater is a revolutionary bill payment platform that offers a
                                            flexible and convenient way to manage your bill payments. It allows you to
                                            upload your bills and choose to pay them in installments, providing you with
                                            the freedom to spread your payments over time while avoiding late fees and
                                            interest charges.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-b-[1px] border-[#8A8A8A]">
                                <h2 id="accordion-color-heading-6">
                                    <button type="button"
                                        class="flex items-center justify-between w-full py-[25px] lg:py-[25px] font-[700] text-left text-[#303343] text-[18px] lg:text-[18px]"
                                        data-accordion-target="#accordion-color-body-6" aria-expanded="false"
                                        aria-controls="accordion-color-body-6">
                                        <span>What if my scheduled payment fails?</span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-color-body-6" class="hidden"
                                    aria-labelledby="accordion-color-heading-6">
                                    <div class="lg:pb-[42px] pb-[25px]">
                                        <p
                                            class="text-[#303343] text-[16px] leading-[22px] font-[400]">
                                            PayMeBackLater is a revolutionary bill payment platform that offers a
                                            flexible and convenient way to manage your bill payments. It allows you to
                                            upload your bills and choose to pay them in installments, providing you with
                                            the freedom to spread your payments over time while avoiding late fees and
                                            interest charges.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-b-[1px] border-[#8A8A8A]">
                                <h2 id="accordion-color-heading-7">
                                    <button type="button"
                                        class="flex items-center justify-between w-full py-[25px] lg:py-[25px] font-[700] text-left text-[#303343] text-[18px] lg:text-[18px]"
                                        data-accordion-target="#accordion-color-body-7" aria-expanded="false"
                                        aria-controls="accordion-color-body-7">
                                        <span>I want to move my payment</span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-color-body-7" class="hidden"
                                    aria-labelledby="accordion-color-heading-7">
                                    <div class="lg:pb-[42px] pb-[25px]">
                                        <p
                                            class="text-[#303343] text-[16px] leading-[22px] font-[400]">
                                            PayMeBackLater is a revolutionary bill payment platform that offers a
                                            flexible and convenient way to manage your bill payments. It allows you to
                                            upload your bills and choose to pay them in installments, providing you with
                                            the freedom to spread your payments over time while avoiding late fees and
                                            interest charges.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-b-[1px] border-[#8A8A8A]">
                                <h2 id="accordion-color-heading-8">
                                    <button type="button"
                                        class="flex items-center justify-between w-full py-[25px] lg:py-[25px] font-[700] text-left text-[#303343] text-[18px] lg:text-[18px]"
                                        data-accordion-target="#accordion-color-body-8" aria-expanded="false"
                                        aria-controls="accordion-color-body-8">
                                        <span>What are the fees?</span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-color-body-8" class="hidden"
                                    aria-labelledby="accordion-color-heading-8">
                                    <div class="lg:pb-[42px] pb-[25px]">
                                        <p
                                            class="text-[#303343] text-[16px] leading-[22px] font-[400]">
                                            PayMeBackLater is a revolutionary bill payment platform that offers a
                                            flexible and convenient way to manage your bill payments. It allows you to
                                            upload your bills and choose to pay them in installments, providing you with
                                            the freedom to spread your payments over time while avoiding late fees and
                                            interest charges.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-b-[1px] border-[#8A8A8A]">
                                <h2 id="accordion-color-heading-9">
                                    <button type="button"
                                        class="flex items-center justify-between w-full py-[25px] lg:py-[25px] font-[700] text-left text-[#303343] text-[18px] lg:text-[18px]"
                                        data-accordion-target="#accordion-color-body-9" aria-expanded="false"
                                        aria-controls="accordion-color-body-9">
                                        <span>Is there really no interest?</span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-color-body-9" class="hidden"
                                    aria-labelledby="accordion-color-heading-9">
                                    <div class="lg:pb-[42px] pb-[25px]">
                                        <p
                                            class="text-[#303343] text-[16px] leading-[22px] font-[400]">
                                            PayMeBackLater is a revolutionary bill payment platform that offers a
                                            flexible and convenient way to manage your bill payments. It allows you to
                                            upload your bills and choose to pay them in installments, providing you with
                                            the freedom to spread your payments over time while avoiding late fees and
                                            interest charges.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-b-[1px] border-[#8A8A8A]">
                                <h2 id="accordion-color-heading-10">
                                    <button type="button"
                                        class="flex items-center justify-between w-full py-[25px] lg:py-[25px] font-[700] text-left text-[#303343] text-[18px] lg:text-[18px]"
                                        data-accordion-target="#accordion-color-body-10" aria-expanded="false"
                                        aria-controls="accordion-color-body-10">
                                        <span>What if I miss paying the monthly subscription fee?</span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-color-body-10" class="hidden"
                                    aria-labelledby="accordion-color-heading-10">
                                    <div class="lg:pb-[42px] pb-[25px]">
                                        <p
                                            class="text-[#303343] text-[16px] leading-[22px] font-[400]">
                                            PayMeBackLater is a revolutionary bill payment platform that offers a
                                            flexible and convenient way to manage your bill payments. It allows you to
                                            upload your bills and choose to pay them in installments, providing you with
                                            the freedom to spread your payments over time while avoiding late fees and
                                            interest charges.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-b-[1px] border-[#8A8A8A]">
                                <h2 id="accordion-color-heading-11">
                                    <button type="button"
                                        class="flex items-center justify-between w-full py-[25px] lg:py-[25px] font-[700] text-left text-[#303343] text-[18px] lg:text-[18px]"
                                        data-accordion-target="#accordion-color-body-11" aria-expanded="false"
                                        aria-controls="accordion-color-body-11">
                                        <span>Why did the PayMebackLater monthly subscription fee change?</span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-color-body-11" class="hidden"
                                    aria-labelledby="accordion-color-heading-11">
                                    <div class="lg:pb-[42px] pb-[25px]">
                                        <p
                                            class="text-[#303343] text-[16px] leading-[22px] font-[400]">
                                            PayMeBackLater is a revolutionary bill payment platform that offers a
                                            flexible and convenient way to manage your bill payments. It allows you to
                                            upload your bills and choose to pay them in installments, providing you with
                                            the freedom to spread your payments over time while avoiding late fees and
                                            interest charges.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full">
                                <h2 id="accordion-color-heading-12">
                                    <button type="button"
                                        class="flex items-center justify-between w-full py-[25px] lg:py-[25px] font-[700] text-left text-[#303343] text-[18px] lg:text-[18px]"
                                        data-accordion-target="#accordion-color-body-12" aria-expanded="false"
                                        aria-controls="accordion-color-body-12">
                                        <span>How do I upload a bill?</span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-color-body-12" class="hidden"
                                    aria-labelledby="accordion-color-heading-12">
                                    <div class="lg:pb-[42px] pb-[25px]">
                                        <p
                                            class="text-[#303343] text-[16px] leading-[22px] font-[400]">
                                            PayMeBackLater is a revolutionary bill payment platform that offers a
                                            flexible and convenient way to manage your bill payments. It allows you to
                                            upload your bills and choose to pay them in installments, providing you with
                                            the freedom to spread your payments over time while avoiding late fees and
                                            interest charges.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</section>
<!------------End FAQ -------------->

<!------------Ready to get started -------------->
<section>
            <div class="container mx-auto xl:max-w-[1140px] px-[15px] lg:py-[90px] md:py-[60px] py-[40px]"
                data-aos="fade-up" data-aos-duration="1500">
                <div class="bg-[#EAEAFF] rounded-[15px] p-[20px] md:p-[40px] lg:p-[63px] text-center">
                    <h2
                        class="text-[#2D3353] leadin-[32px] md:leadin-[40px] text-[26px] md:text-[32px] lg:text-[48px] lg:leading-[56px] font-[700]">
                        Ready to Get Started?</h2>
                    <p
                        class="lg:max-w-[70%] mx-auto text-[#2D3353] text-[16px] md:text-[16px] lg:text-[16px] font-[400] lg:mt-[15px] lg:mb-[25px] mt-[10px] mb-[20px]">
                        Life is full of surprises, and we believe your payment options should be just as flexible.
                        Whether you're looking for immediate resolution or pre fer to spread your payments over time,
                        we've got you covered.</p>
                    <button
                        class="font-[500] bg-[#fff] rounded-[10px] border-[1px] border-[#fff] hover:border-[#000] hover:bg-transparent px-[22px] lg:py-[10px] lg:text-[16px] shadow-[1px_1px_10px_1px_#0000001f] transition-all text-[16px] py-[10px]">Get
                        Started for Free</button>
                </div>
            </div>
        </section>
<!------------End Ready to get started  -------------->

@endsection
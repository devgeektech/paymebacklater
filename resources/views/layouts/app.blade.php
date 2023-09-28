<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
    <link href="https://unpkg.com/flowbite@1.4.0/dist/flowbite.min.css">
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
 

</head>
<body>
    <div id="app" class="wrapper">
        <!------------header--------------->
        <Header class="sticky top-0 z-50 shadow-[1px_1px_10px_#6161ff47] lg:shadow-none bg-[#EAEAFF]">
            <div class="w-full container max-w-[1140px] mx-auto px-[15px] py-[20px] flex items-center gap-x-[15px] relative">
                <div class="xl:w-[15%] lg:w-[14%]">
                    <a href="/">
                        <img src="{{ asset('images/logo.svg') }}" class="w-[100%]" />
                    </a>
                </div>
                <div class="w-[85%] lg:text-center text-right navbar">
                    <button data-collapse-toggle="navbar-default" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-default" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg width="38" height="32" viewBox="0 0 38 32" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="bars">
                            <g clip-path="url(#clip0_436_48434)">
                                <path
                                    d="M37.2692 14.6127L15.3462 14.6127C15.1523 14.6127 14.9665 14.6897 14.8294 14.8267C14.6924 14.9638 14.6154 15.1496 14.6154 15.3434C14.6154 15.5373 14.6924 15.7231 14.8294 15.8602C14.9665 15.9972 15.1523 16.0742 15.3462 16.0742L37.2692 16.0742C37.463 16.0742 37.6489 15.9972 37.786 15.8602C37.923 15.7231 38 15.5373 38 15.3434C38 15.1496 37.923 14.9638 37.786 14.8267C37.6489 14.6897 37.463 14.6127 37.2692 14.6127Z"
                                    fill="black" />
                                <path
                                    d="M0.73077 31.4219L37.2692 31.4219C37.463 31.4219 37.6489 31.3449 37.786 31.2078C37.923 31.0708 38 30.8849 38 30.6911C38 30.4973 37.923 30.3114 37.786 30.1744C37.6489 30.0373 37.463 29.9603 37.2692 29.9603L0.73077 29.9603C0.536958 29.9603 0.351095 30.0373 0.214049 30.1744C0.0770029 30.3114 7.96085e-07 30.4973 7.79142e-07 30.6911C7.62198e-07 30.8849 0.0770029 31.0708 0.214049 31.2078C0.351094 31.3449 0.536958 31.4219 0.73077 31.4219Z"
                                    fill="black" />
                                <path
                                    d="M37.2692 -0.000600998L0.73077 -0.000604192C0.536958 -0.000604209 0.351095 0.0763868 0.214049 0.213433C0.0770029 0.350478 7.96085e-07 0.536353 7.79142e-07 0.730165C7.62198e-07 0.923977 0.0770029 1.10985 0.214049 1.2469C0.351094 1.38394 0.536958 1.46093 0.73077 1.46093L37.2692 1.46094C37.463 1.46094 37.6489 1.38395 37.786 1.2469C37.923 1.10985 38 0.92398 38 0.730168C38 0.536356 37.923 0.350482 37.786 0.213436C37.6489 0.07639 37.463 -0.000600981 37.2692 -0.000600998Z"
                                    fill="black" />
                            </g>
                            <defs>
                                <clipPath id="clip0_436_48434">
                                    <rect width="38" height="31.4231" fill="white"
                                        transform="translate(38 31.4219) rotate(-180)" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg width="38" height="32" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="close">
                            <g opacity="0.75">
                                <path
                                    d="M0 14.6111L1.38889 16L8 9.38889L14.6111 16L16 14.6111L9.38889 8L16 1.38889L14.6111 0L8 6.61111L1.38889 0L0 1.38889L6.61111 8L0 14.6111Z"
                                    fill="black" fill-opacity="0.85" />
                            </g>
                        </svg>
                    </button>
                    <div class="hidden w-full lg:block md:w-auto" id="navbar-default">
                        <div
                            class="lg:flex items-center gap-[20px] justify-between absolute lg:relative left-[0] shadow-[1px_1px_10px_1px_#d9d9d9] p-[20px] top-[100%] rounded-[0_0_10px_10px] bg-[#fff] w-[100%] lg:bg-transparent lg:shadow-none lg:p-0 lg:top-[0]">
                            <nav class="xl:w-[55%] lg:w-[60%] w-[100%]">
                                <ul
                                    class="lg:flex items-center justify-center gap-[30px] xl:gap-[30px] lg:gap-[30px] text-left">
                                    <li class="mb-[10px] lg:mb-0"><a href="#"
                                            class="text-[#2D3353] font-[500] text-[16px] lg:text-[14px] xl:text-[16px] border-b-[3px] border-transparent hover:border-[#2D3353] transition ease-in duration-300 pb-[5px]">Product</a>
                                    </li>
                                    <li class="mb-[10px] lg:mb-0"><a href="#"
                                            class="text-[#2D3353] font-[500] text-[16px] lg:text-[14px] xl:text-[16px] border-b-[3px] border-transparent hover:border-[#2D3353] transition ease-in duration-300 pb-[5px]">Bill
                                            Payment</a></li>
                                    <li class="mb-[10px] lg:mb-0"><a href="#"
                                            class="text-[#2D3353] font-[500] text-[16px] lg:text-[14px] xl:text-[16px] border-b-[3px] border-transparent hover:border-[#2D3353] transition ease-in duration-300 pb-[5px]">Savings
                                            to
                                            Build Credit</a></li>
                                </ul>
                            </nav>
                            <div
                                class="xl:w-[45%] w-[100%] lg:w-[40%] flex-wrap lg:flex-nowrap flex none items-center gap-[10px] justify-start lg:justify-end lg:mt-0 md:mt-[40px]">
                                <button
                                    class="font-[700] xl:text-[16px] w-full lg:w-auto  md:w-[48%] md:mb-[10px] lg:mb-0 lg:text-[12px] bg-transparent border-[#000] border-[1px] rounded xl:px-[12px] lg:px-[5px] px-[12px] py-[10px] hover:bg-[#6161FF] hover:text-[#fff] hover:border-[#6161FF] transition ease-in-out delay-150">Get
                                    Started</button>
                                <button
                                    class="font-[700] xl:text-[16px] w-full lg:w-auto md:w-[48%] md:mb-[10px] lg:mb-0 lg:text-[12px] bg-transparent border-[#000] border-[1px] rounded xl:px-[12px] lg:px-[5px] px-[12px] py-[10px] hover:bg-[#6161FF] hover:text-[#fff] hover:border-[#6161FF] transition ease-in-out delay-150">Business</button>
                                <button
                                    class="font-[700] xl:text-[16px] w-full lg:w-auto  md:w-[48%] md:mb-[10px] lg:mb-0 lg:text-[12px] bg-transparent border-[#000] border-[1px] rounded xl:px-[12px] lg:px-[5px] px-[12px] py-[10px] hover:bg-[#6161FF] hover:text-[#fff] hover:border-[#6161FF] transition ease-in-out delay-150">Partners</button>
                                    @if(auth()->check()) <!-- User is logged in -->
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <button type="submit" class="font-[700] xl:text-[16px] w-full lg:w-auto  md:w-[48%] md:mb-[10px] lg:mb-0 lg:text-[12px] bg-transparent border-[#000] border-[1px] rounded xl:px-[12px] lg:px-[5px] px-[12px] py-[10px] hover:bg-[#6161FF] hover:text-[#fff] hover:border-[#6161FF] transition ease-in-out delay-150">Logout</button>
                                        </form>
                                    @else <!-- User is not logged in -->
                                        <a class="font-[700] xl:text-[16px] w-full lg:w-auto  md:w-[48%] md:mb-[10px] lg:mb-0 lg:text-[12px] bg-transparent border-[#000] border-[1px] rounded xl:px-[12px] lg:px-[5px] px-[12px] py-[10px] hover:bg-[#6161FF] hover:text-[#fff] hover:border-[#6161FF] transition ease-in-out delay-150" href="{{ route('login') }}">Login</a>
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </Header>
        <!------------End Header--------------->


        <main class="">
            @yield('content')
        </main>

        <!------------Footer -------------->
        <footer>
            <div class="container mx-auto xl:max-w-[1140px] px-[15px] lg:pt-[90px] pb-[25px]">
                <div class="w-full flex flex-wrap lg:flex-nowrap items-start md:gap-[20px] gap-[30px]">
                    <div class="lg:w-[20%] md:w-[31%] w-[100%]">
                        <h4 class="text-[#2D3353] text-[20px] font-[700] mb-[10px] lg:mb-[16px]">About us
                        </h4>
                        <ul>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">AkeemAI
                                    Platform</a></li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Forms</a>
                            </li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Documents</a>
                            </li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Sign</a>
                            </li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Formstack
                                    for Salesforce</a></li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Integrations</a>
                            </li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Pricing</a>
                            </li>
                        </ul>
                    </div>
                    <div class="lg:w-[20%] md:w-[31%] w-[100%]">
                        <h4
                            class="text-[#2D3353] leading-[26px] text-[20px] lg:text-[20px] font-[700] mb-[10px] lg:mb-[16px]">
                            Support</h4>
                        <ul>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Support
                                    Center</a></li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Find
                                    a
                                    Partner</a></li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Professional
                                    Services</a></li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Release
                                    Notes</a></li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Developers
                                    and API</a></li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Documents
                                    API</a></li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">System
                                    Status</a></li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Report
                                    Abuse</a></li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Contact
                                    Us</a></li>
                        </ul>
                    </div>
                    <div class="lg:w-[20%] md:w-[31%] w-[100%]">
                        <h4
                            class="text-[#2D3353] leading-[26px] text-[20px] lg:text-[20px] font-[700] mb-[10px] lg:mb-[16px]">
                            Products</h4>
                        <ul>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">AkeemAI
                                    Platform</a></li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Forms</a>
                            </li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Documents</a>
                            </li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Sign</a>
                            </li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Formstack
                                    for Salesforce</a></li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Integrations</a>
                            </li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Pricing</a>
                            </li>
                        </ul>
                    </div>
                    <div class="lg:w-[20%] md:w-[31%] w-[100%]">
                        <h4
                            class="text-[#2D3353] leading-[26px] text-[20px] lg:text-[20px] font-[700] mb-[10px] lg:mb-[16px]">
                            Resources</h4>
                        <ul>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Resource
                                    Center</a></li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Templates</a>
                            </li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Blog</a>
                            </li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Newsletter</a>
                            </li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Site
                                    Map</a></li>
                        </ul>
                    </div>
                    <div class="lg:w-[20%] md:w-[31%] w-[100%]">
                        <h4
                            class="text-[#2D3353] leading-[26px] text-[20px] lg:text-[20px] font-[700] mb-[10px] lg:mb-[16px]">
                            Company</h4>
                        <ul>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">About
                                    Us</a></li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Press</a>
                            </li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Brand</a>
                            </li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Partner
                                    Program</a></li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Careers</a>
                            </li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Do
                                    Not Sell My</a></li>
                            <li><a href="#"
                                    class="text-[#54586C] text-[16px] leading-[26px] lg:text-[16px] font-[400] lg:leading-[34px]">Personal
                                    Information</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!------------End Footer-------------->
    </div>

    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script> -->

</body>
</html>

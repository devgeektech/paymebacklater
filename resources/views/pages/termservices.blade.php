@extends('layouts.app')

@section('content')



        <!------------Bannner Section---------->
        <section>
            <div class="back-img-banner bg-[url('{{ asset('images/banner-bg.png') }}')] bg-[bottom] bg-no-repeat bg-cover pt-[90px] pb-[150px]">
                <div class="container mx-auto xl:max-w-[1440px] px-[15px]">
                    <div class="md:flex items-center justify-start">
                        <div class="w-1/2">
                            <h1 class="text-[65px] text-[#2D3353] font-[700] leading-[75px]">Term and Services </h1>
                            <p class="text-[#54586C] text-[24px] my-[23px] font-[ProductSans-Medium]">With our platform,
                                you
                                can easily upload any bills you have, such as utility bills, Car note, Rent, or monthly
                                subscriptions, and have them paid immediately. No more worrying about due dates or late
                                fees!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!------------End Bannner Section---------->
@endsection

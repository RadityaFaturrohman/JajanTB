@extends('main')

@section('content')
    
    <div class="w-full h-screen p-20 font-heebo flex flex-col gap-9">

        <div class="flex pl-10">

            <div class="flex flex-col items-start w-2/4">

                <div class="flex items-center w-full justify-between">
                    <p class="font-extrabold text-2xl">Your Cart</p>
                    <p class="font-medium text-sm text-light-grey-main opacity-80">4 Items in Cart</p>
                </div>

                <div class="mt-4 mb-9 w-full h-1px opacity-60 bg-light-grey-main"></div>

                <div class="h-full overflow-auto w-full hide-scroll">

                    <div class="flex w-full h-32 pt-3 mb-4 justify-between border-b border-new-grey-main anim -translate-y-1">
    
                        <div class="w-24 h-100px rounded-lg -mt-3 bg-light-blue-main flex justify-center items-center drop-shadow-sm">
                            <div class="w-16 h-70px -ml-2 bg-cover" style="background-image: url({{asset('img/lays.png')}})"></div>
                        </div>
    
                        <div class="flex flex-col -ml-24 h-20 justify-between">
    
                            <div class="flex items-start gap-3 font-semibold">
                                <p class="w-40">Chitato (China Tanpa Toko)</p>
                                <p class="text-sm mt-1px">1x</p>
                            </div>
                            <p class="font-medium opacity-75 hover:opacity-95 transition-all ease duration-200 text-sm text-blue-main ">Snacks</p>
                        </div>
    
                        <p class="font-semibold">Rp.50.000</p>
    
                        <svg class="cursor-pointer opacity-50 hover:opacity-95" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.0312 3.5625H13.0625V2.96875C13.0625 2.49633 12.8748 2.04327 12.5408 1.70922C12.2067 1.37517 11.7537 1.1875 11.2812 1.1875H7.71875C7.24633 1.1875 6.79326 1.37517 6.45922 1.70922C6.12517 2.04327 5.9375 2.49633 5.9375 2.96875V3.5625H2.96875C2.81128 3.5625 2.66026 3.62506 2.54891 3.73641C2.43756 3.84776 2.375 3.99878 2.375 4.15625C2.375 4.31372 2.43756 4.46474 2.54891 4.57609C2.66026 4.68744 2.81128 4.75 2.96875 4.75H3.5625V15.4375C3.5625 15.7524 3.68761 16.0545 3.91031 16.2772C4.13301 16.4999 4.43506 16.625 4.75 16.625H14.25C14.5649 16.625 14.867 16.4999 15.0897 16.2772C15.3124 16.0545 15.4375 15.7524 15.4375 15.4375V4.75H16.0312C16.1887 4.75 16.3397 4.68744 16.4511 4.57609C16.5624 4.46474 16.625 4.31372 16.625 4.15625C16.625 3.99878 16.5624 3.84776 16.4511 3.73641C16.3397 3.62506 16.1887 3.5625 16.0312 3.5625ZM7.125 2.96875C7.125 2.81128 7.18756 2.66026 7.29891 2.54891C7.41025 2.43756 7.56128 2.375 7.71875 2.375H11.2812C11.4387 2.375 11.5897 2.43756 11.7011 2.54891C11.8124 2.66026 11.875 2.81128 11.875 2.96875V3.5625H7.125V2.96875ZM14.25 15.4375H4.75V4.75H14.25V15.4375ZM8.3125 7.71875V12.4688C8.3125 12.6262 8.24994 12.7772 8.13859 12.8886C8.02725 12.9999 7.87622 13.0625 7.71875 13.0625C7.56128 13.0625 7.41025 12.9999 7.29891 12.8886C7.18756 12.7772 7.125 12.6262 7.125 12.4688V7.71875C7.125 7.56128 7.18756 7.41025 7.29891 7.29891C7.41025 7.18756 7.56128 7.125 7.71875 7.125C7.87622 7.125 8.02725 7.18756 8.13859 7.29891C8.24994 7.41025 8.3125 7.56128 8.3125 7.71875ZM11.875 7.71875V12.4688C11.875 12.6262 11.8124 12.7772 11.7011 12.8886C11.5897 12.9999 11.4387 13.0625 11.2812 13.0625C11.1238 13.0625 10.9728 12.9999 10.8614 12.8886C10.7501 12.7772 10.6875 12.6262 10.6875 12.4688V7.71875C10.6875 7.56128 10.7501 7.41025 10.8614 7.29891C10.9728 7.18756 11.1238 7.125 11.2812 7.125C11.4387 7.125 11.5897 7.18756 11.7011 7.29891C11.8124 7.41025 11.875 7.56128 11.875 7.71875Z" fill="black" fill-opacity=""/>
                        </svg>                        
    
                    </div>
    
                    <div class="flex w-full h-32 pt-3 mb-4 justify-between border-b border-new-grey-main anim -translate-y-3">
    
                        <div class="w-24 h-100px rounded-lg -mt-3 bg-light-blue-main flex justify-center items-center drop-shadow-sm">
                            <div class="w-16 h-70px -ml-2 bg-cover" style="background-image: url({{asset('img/lays.png')}})"></div>
                        </div>
    
                        <div class="flex flex-col -ml-24 h-20 justify-between">
    
                            <div class="flex items-start gap-3 font-semibold">
                                <p class="w-40">Chitato (China Tanpa Toko)</p>
                                <p class="text-sm mt-1px">1x</p>
                            </div>
                            <p class="font-medium opacity-75 hover:opacity-95 transition-all ease duration-200 text-sm text-blue-main ">Snacks</p>
                        </div>
    
                        <p class="font-semibold">Rp.50.000</p>
    
                        <svg class="cursor-pointer opacity-50 hover:opacity-95" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.0312 3.5625H13.0625V2.96875C13.0625 2.49633 12.8748 2.04327 12.5408 1.70922C12.2067 1.37517 11.7537 1.1875 11.2812 1.1875H7.71875C7.24633 1.1875 6.79326 1.37517 6.45922 1.70922C6.12517 2.04327 5.9375 2.49633 5.9375 2.96875V3.5625H2.96875C2.81128 3.5625 2.66026 3.62506 2.54891 3.73641C2.43756 3.84776 2.375 3.99878 2.375 4.15625C2.375 4.31372 2.43756 4.46474 2.54891 4.57609C2.66026 4.68744 2.81128 4.75 2.96875 4.75H3.5625V15.4375C3.5625 15.7524 3.68761 16.0545 3.91031 16.2772C4.13301 16.4999 4.43506 16.625 4.75 16.625H14.25C14.5649 16.625 14.867 16.4999 15.0897 16.2772C15.3124 16.0545 15.4375 15.7524 15.4375 15.4375V4.75H16.0312C16.1887 4.75 16.3397 4.68744 16.4511 4.57609C16.5624 4.46474 16.625 4.31372 16.625 4.15625C16.625 3.99878 16.5624 3.84776 16.4511 3.73641C16.3397 3.62506 16.1887 3.5625 16.0312 3.5625ZM7.125 2.96875C7.125 2.81128 7.18756 2.66026 7.29891 2.54891C7.41025 2.43756 7.56128 2.375 7.71875 2.375H11.2812C11.4387 2.375 11.5897 2.43756 11.7011 2.54891C11.8124 2.66026 11.875 2.81128 11.875 2.96875V3.5625H7.125V2.96875ZM14.25 15.4375H4.75V4.75H14.25V15.4375ZM8.3125 7.71875V12.4688C8.3125 12.6262 8.24994 12.7772 8.13859 12.8886C8.02725 12.9999 7.87622 13.0625 7.71875 13.0625C7.56128 13.0625 7.41025 12.9999 7.29891 12.8886C7.18756 12.7772 7.125 12.6262 7.125 12.4688V7.71875C7.125 7.56128 7.18756 7.41025 7.29891 7.29891C7.41025 7.18756 7.56128 7.125 7.71875 7.125C7.87622 7.125 8.02725 7.18756 8.13859 7.29891C8.24994 7.41025 8.3125 7.56128 8.3125 7.71875ZM11.875 7.71875V12.4688C11.875 12.6262 11.8124 12.7772 11.7011 12.8886C11.5897 12.9999 11.4387 13.0625 11.2812 13.0625C11.1238 13.0625 10.9728 12.9999 10.8614 12.8886C10.7501 12.7772 10.6875 12.6262 10.6875 12.4688V7.71875C10.6875 7.56128 10.7501 7.41025 10.8614 7.29891C10.9728 7.18756 11.1238 7.125 11.2812 7.125C11.4387 7.125 11.5897 7.18756 11.7011 7.29891C11.8124 7.41025 11.875 7.56128 11.875 7.71875Z" fill="black" fill-opacity=""/>
                        </svg>                        
    
                    </div>
    
                    <div class="flex w-full h-32 pt-3 mb-4 justify-between border-b border-new-grey-main anim -translate-y-5">
    
                        <div class="w-24 h-100px rounded-lg -mt-3 bg-light-blue-main flex justify-center items-center drop-shadow-sm">
                            <div class="w-16 h-70px -ml-2 bg-cover" style="background-image: url({{asset('img/lays.png')}})"></div>
                        </div>
    
                        <div class="flex flex-col -ml-24 h-20 justify-between">
    
                            <div class="flex items-start gap-3 font-semibold">
                                <p class="w-40">Chitato (China Tanpa Toko)</p>
                                <p class="text-sm mt-1px">1x</p>
                            </div>
                            <p class="font-medium opacity-75 hover:opacity-95 transition-all ease duration-200 text-sm text-blue-main ">Snacks</p>
                        </div>
    
                        <p class="font-semibold">Rp.50.000</p>
    
                        <svg class="cursor-pointer opacity-50 hover:opacity-95" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.0312 3.5625H13.0625V2.96875C13.0625 2.49633 12.8748 2.04327 12.5408 1.70922C12.2067 1.37517 11.7537 1.1875 11.2812 1.1875H7.71875C7.24633 1.1875 6.79326 1.37517 6.45922 1.70922C6.12517 2.04327 5.9375 2.49633 5.9375 2.96875V3.5625H2.96875C2.81128 3.5625 2.66026 3.62506 2.54891 3.73641C2.43756 3.84776 2.375 3.99878 2.375 4.15625C2.375 4.31372 2.43756 4.46474 2.54891 4.57609C2.66026 4.68744 2.81128 4.75 2.96875 4.75H3.5625V15.4375C3.5625 15.7524 3.68761 16.0545 3.91031 16.2772C4.13301 16.4999 4.43506 16.625 4.75 16.625H14.25C14.5649 16.625 14.867 16.4999 15.0897 16.2772C15.3124 16.0545 15.4375 15.7524 15.4375 15.4375V4.75H16.0312C16.1887 4.75 16.3397 4.68744 16.4511 4.57609C16.5624 4.46474 16.625 4.31372 16.625 4.15625C16.625 3.99878 16.5624 3.84776 16.4511 3.73641C16.3397 3.62506 16.1887 3.5625 16.0312 3.5625ZM7.125 2.96875C7.125 2.81128 7.18756 2.66026 7.29891 2.54891C7.41025 2.43756 7.56128 2.375 7.71875 2.375H11.2812C11.4387 2.375 11.5897 2.43756 11.7011 2.54891C11.8124 2.66026 11.875 2.81128 11.875 2.96875V3.5625H7.125V2.96875ZM14.25 15.4375H4.75V4.75H14.25V15.4375ZM8.3125 7.71875V12.4688C8.3125 12.6262 8.24994 12.7772 8.13859 12.8886C8.02725 12.9999 7.87622 13.0625 7.71875 13.0625C7.56128 13.0625 7.41025 12.9999 7.29891 12.8886C7.18756 12.7772 7.125 12.6262 7.125 12.4688V7.71875C7.125 7.56128 7.18756 7.41025 7.29891 7.29891C7.41025 7.18756 7.56128 7.125 7.71875 7.125C7.87622 7.125 8.02725 7.18756 8.13859 7.29891C8.24994 7.41025 8.3125 7.56128 8.3125 7.71875ZM11.875 7.71875V12.4688C11.875 12.6262 11.8124 12.7772 11.7011 12.8886C11.5897 12.9999 11.4387 13.0625 11.2812 13.0625C11.1238 13.0625 10.9728 12.9999 10.8614 12.8886C10.7501 12.7772 10.6875 12.6262 10.6875 12.4688V7.71875C10.6875 7.56128 10.7501 7.41025 10.8614 7.29891C10.9728 7.18756 11.1238 7.125 11.2812 7.125C11.4387 7.125 11.5897 7.18756 11.7011 7.29891C11.8124 7.41025 11.875 7.56128 11.875 7.71875Z" fill="black" fill-opacity=""/>
                        </svg>                        
    
                    </div>
    
                    <div class="flex w-full h-32 pt-3 mb-4 justify-between border-b border-new-grey-main anim -translate-y-7">
    
                        <div class="w-24 h-100px rounded-lg -mt-3 bg-light-blue-main flex justify-center items-center drop-shadow-sm">
                            <div class="w-16 h-70px -ml-2 bg-cover" style="background-image: url({{asset('img/lays.png')}})"></div>
                        </div>
    
                        <div class="flex flex-col -ml-24 h-20 justify-between">
    
                            <div class="flex items-start gap-3 font-semibold">
                                <p class="w-40">Chitato (China Tanpa Toko)</p>
                                <p class="text-sm mt-1px">1x</p>
                            </div>
                            <p class="font-medium opacity-75 hover:opacity-95 transition-all ease duration-200 text-sm text-blue-main ">Snacks</p>
                        </div>
    
                        <p class="font-semibold">Rp.50.000</p>
    
                        <svg class="cursor-pointer opacity-50 hover:opacity-95" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.0312 3.5625H13.0625V2.96875C13.0625 2.49633 12.8748 2.04327 12.5408 1.70922C12.2067 1.37517 11.7537 1.1875 11.2812 1.1875H7.71875C7.24633 1.1875 6.79326 1.37517 6.45922 1.70922C6.12517 2.04327 5.9375 2.49633 5.9375 2.96875V3.5625H2.96875C2.81128 3.5625 2.66026 3.62506 2.54891 3.73641C2.43756 3.84776 2.375 3.99878 2.375 4.15625C2.375 4.31372 2.43756 4.46474 2.54891 4.57609C2.66026 4.68744 2.81128 4.75 2.96875 4.75H3.5625V15.4375C3.5625 15.7524 3.68761 16.0545 3.91031 16.2772C4.13301 16.4999 4.43506 16.625 4.75 16.625H14.25C14.5649 16.625 14.867 16.4999 15.0897 16.2772C15.3124 16.0545 15.4375 15.7524 15.4375 15.4375V4.75H16.0312C16.1887 4.75 16.3397 4.68744 16.4511 4.57609C16.5624 4.46474 16.625 4.31372 16.625 4.15625C16.625 3.99878 16.5624 3.84776 16.4511 3.73641C16.3397 3.62506 16.1887 3.5625 16.0312 3.5625ZM7.125 2.96875C7.125 2.81128 7.18756 2.66026 7.29891 2.54891C7.41025 2.43756 7.56128 2.375 7.71875 2.375H11.2812C11.4387 2.375 11.5897 2.43756 11.7011 2.54891C11.8124 2.66026 11.875 2.81128 11.875 2.96875V3.5625H7.125V2.96875ZM14.25 15.4375H4.75V4.75H14.25V15.4375ZM8.3125 7.71875V12.4688C8.3125 12.6262 8.24994 12.7772 8.13859 12.8886C8.02725 12.9999 7.87622 13.0625 7.71875 13.0625C7.56128 13.0625 7.41025 12.9999 7.29891 12.8886C7.18756 12.7772 7.125 12.6262 7.125 12.4688V7.71875C7.125 7.56128 7.18756 7.41025 7.29891 7.29891C7.41025 7.18756 7.56128 7.125 7.71875 7.125C7.87622 7.125 8.02725 7.18756 8.13859 7.29891C8.24994 7.41025 8.3125 7.56128 8.3125 7.71875ZM11.875 7.71875V12.4688C11.875 12.6262 11.8124 12.7772 11.7011 12.8886C11.5897 12.9999 11.4387 13.0625 11.2812 13.0625C11.1238 13.0625 10.9728 12.9999 10.8614 12.8886C10.7501 12.7772 10.6875 12.6262 10.6875 12.4688V7.71875C10.6875 7.56128 10.7501 7.41025 10.8614 7.29891C10.9728 7.18756 11.1238 7.125 11.2812 7.125C11.4387 7.125 11.5897 7.18756 11.7011 7.29891C11.8124 7.41025 11.875 7.56128 11.875 7.71875Z" fill="black" fill-opacity=""/>
                        </svg>                        
    
                    </div>

                </div>


            </div>

            <div class="w-550px h-full pl-14 pt-24">

                <div class="flex items-start justify-between mb-6 border-b border-grey-main border-opacity-80 w-full h-12 text-lg">
                    <p class="font-medium">Subtotal</p>
                    <p class="text-gray-800 opacity-80">Rp. 200.000</p>
                </div>

                <div class="flex items-start justify-between mb-6 border-b border-grey-main border-opacity-80 w-full h-12 text-lg">
                    <p class="font-medium">Admin Fee</p>
                    <p class="text-gray-800 opacity-80">Rp. 2.000</p>
                </div>

                <div class="flex items-start justify-between mb-6 border-b border-grey-main border-opacity-80 w-full h-12 text-lg">
                    <p class="font-medium">Tax</p>
                    <p class="text-gray-800 opacity-80">Rp. 6.000</p>
                </div>

                <div class="flex items-start justify-between mb-6 border-b border-grey-main border-opacity-80 w-full h-12 text-lg">
                    <p class="font-medium">Shipping</p>
                    <p class="text-gray-800 opacity-80">Rp. 6.000</p>
                </div>

                <div class="flex items-start justify-between mb-6 w-full h-12 font-bold text-lg">
                    <p class="font-bold">Total</p>
                    <p class="text-gray-800 opacity-90">Rp. 214.000</p>
                </div>

                <div class="flex flex-col px-10 gap-6">
                    <a href="/order"><button class="w-full hover:scale-95 transition-all ease duration-300 h-16 text-white rounded-lg font-medium drop-shadow-sm hover:drop-shadow-xl hover:font-semibold bg-black-main-200">Checkout</button></a>
                    <a href="/"><button class="w-full h-16 hover:scale-95 transition-all ease duration-300 border rounded-lg font-medium drop-shadow-sm hover:font-semibold hover:drop-shadow-xl border-grey-main">Continue Shopping</button></a>
                </div>

            </div>

        </div>

    </div>

@endsection
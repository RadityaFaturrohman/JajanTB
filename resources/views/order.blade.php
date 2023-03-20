@extends('main')

@section('content')
    
    <div class="w-full h-screen p-20 pt-12 font-heebo flex flex-col gap-9 anim">

        <div class="flex pl-14">

            <div class="flex flex-col w-6/12">

                <div class="flex gap-4">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_78_169)">
                        <path d="M20 0C21.8359 0 23.6068 0.234375 25.3125 0.703125C27.0182 1.17188 28.6068 1.84896 30.0781 2.73438C31.5495 3.61979 32.8971 4.66146 34.1211 5.85938C35.3451 7.05729 36.3932 8.40495 37.2656 9.90234C38.138 11.3997 38.8086 12.9948 39.2773 14.6875C39.7461 16.3802 39.987 18.151 40 20C40 21.8359 39.7656 23.6068 39.2969 25.3125C38.8281 27.0182 38.151 28.6068 37.2656 30.0781C36.3802 31.5495 35.3385 32.8971 34.1406 34.1211C32.9427 35.3451 31.5951 36.3932 30.0977 37.2656C28.6003 38.138 27.0052 38.8086 25.3125 39.2773C23.6198 39.7461 21.849 39.987 20 40C18.1641 40 16.3932 39.7656 14.6875 39.2969C12.9818 38.8281 11.3932 38.151 9.92188 37.2656C8.45052 36.3802 7.10286 35.3385 5.87891 34.1406C4.65495 32.9427 3.60677 31.5951 2.73438 30.0977C1.86198 28.6003 1.19141 27.0052 0.722656 25.3125C0.253906 23.6198 0.0130208 21.849 0 20C0 18.1641 0.234375 16.3932 0.703125 14.6875C1.17188 12.9818 1.84896 11.3932 2.73438 9.92188C3.61979 8.45052 4.66146 7.10286 5.85938 5.87891C7.05729 4.65495 8.40495 3.60677 9.90234 2.73438C11.3997 1.86198 12.9948 1.19141 14.6875 0.722656C16.3802 0.253906 18.151 0.0130208 20 0ZM31.7773 13.3789L29.1211 10.7227L16.25 23.5938L10.8789 18.2227L8.22266 20.8789L16.25 28.9062L31.7773 13.3789Z" fill="#4ECB71"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_78_169">
                        <rect width="40" height="40" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>  
                    
                    <div>
                        <p class="font-bold text-xl">We Received Your Order!</p>
                        <p class="font-semibold text-sm text-grey-main opacity-80">Your Order #23021941 is Completed and Go to canteen to take your order</p>
                    </div>
                </div>

                <div class="mt-10 mb-5 w-full h-1px opacity-80 bg-light-grey-main"></div>

                <p class="font-bold text-grey-main">Product Details</p>

                <div class="w-full h-200px overflow-auto hide-scroll">

                    <div class="w-full flex h-40 pb-10 border-b mt-6 gap-8 border-grey-main border-opacity-50">
    
                        <div class="w-120px h-32 bg-light-blue-main rounded-lg flex justify-center items-center">
                            <div class="w-24 h-28 -ml-2 bg-cover" style="background-image: url({{asset('img/lays.png')}})"></div>
                        </div>
    
                        <div class="flex flex-col justify-between py-1">
                            <div class="flex flex-col">
                                <p class="font-bold text-lg">Chitato (China Tanpa Toko)</p>
                                <p class="font-semibold text-blue-main opacity-70">Snacks</p>
                            </div>
                            <p class="font-bold ">Rp. 50.000</p>
                        </div>
    
                    </div>
    
                    <div class="w-full mt-6 flex h-40 pb-10 border-b gap-8 border-grey-main border-opacity-50">
    
                        <div class="w-120px h-32 bg-light-blue-main rounded-lg flex justify-center items-center">
                            <div class="w-24 h-28 -ml-2 bg-cover" style="background-image: url({{asset('img/lays.png')}})"></div>
                        </div>
    
                        <div class="flex flex-col justify-between py-1">
                            <div class="flex flex-col">
                                <p class="font-bold text-lg">Chitato (China Tanpa Toko)</p>
                                <p class="font-semibold text-blue-main opacity-70">Snacks</p>
                            </div>
                            <p class="font-bold ">Rp. 50.000</p>
                        </div>
    
                    </div>

                    <div class="w-full flex h-40 pb-10 border-b mt-6 gap-8 border-grey-main border-opacity-50">
    
                        <div class="w-120px h-32 bg-light-blue-main rounded-lg flex justify-center items-center">
                            <div class="w-24 h-28 -ml-2 bg-cover" style="background-image: url({{asset('img/lays.png')}})"></div>
                        </div>
    
                        <div class="flex flex-col justify-between py-1">
                            <div class="flex flex-col">
                                <p class="font-bold text-lg">Chitato (China Tanpa Toko)</p>
                                <p class="font-semibold text-blue-main opacity-70">Snacks</p>
                            </div>
                            <p class="font-bold ">Rp. 50.000</p>
                        </div>
    
                    </div>
    
                    <div class="w-full mt-6 flex h-40 pb-10 border-b gap-8 border-grey-main border-opacity-50">
    
                        <div class="w-120px h-32 bg-light-blue-main rounded-lg flex justify-center items-center">
                            <div class="w-24 h-28 -ml-2 bg-cover" style="background-image: url({{asset('img/lays.png')}})"></div>
                        </div>
    
                        <div class="flex flex-col justify-between py-1">
                            <div class="flex flex-col">
                                <p class="font-bold text-lg">Chitato (China Tanpa Toko)</p>
                                <p class="font-semibold text-blue-main opacity-70">Snacks</p>
                            </div>
                            <p class="font-bold ">Rp. 50.000</p>
                        </div>
    
                    </div>

                </div>

                <div class="w-full px-6 flex flex-col gap-4">

                    <div class="flex items-center w-full justify-between mt-6">
                        <p class="font-medium text-grey-main">Subtotal</p>
                        <p class="text-grey-main font-medium">Rp. 200.000</p>
                    </div>

                    <div class="flex items-center w-full justify-between">
                        <p class="font-medium text-grey-main">Admin Fee</p>
                        <p class="text-grey-main font-medium">Rp. 2.000</p>
                    </div>

                    <div class="flex items-center w-full justify-between">
                        <p class="font-medium text-grey-main">Tax</p>
                        <p class="text-grey-main font-medium">Rp. 6.000</p>
                    </div>

                    <div class="flex items-center w-full justify-between">
                        <p class="font-medium text-grey-main">Shipping</p>
                        <p class="text-grey-main font-medium">Rp. 6.000</p>
                    </div>

                    <div class="flex items-center w-full justify-between">
                        <p class="font-bold text-lg">Total</p>
                        <p class="font-bold">Rp. 214.000</p>
                    </div>

                </div>

            </div>

            <div class="flex flex-col pt-28 ml-24 w-96">

                <p class="font-bold text-grey-main mb-6">Order Details</p>

                <div class="flex justify-start items-center mb-7">
                    <p class="font-bold text-lg w-20">Order Id</p>
                    <p class="font-semibold ml-28 opacity-80 text-sm text-grey-main">#23021941</p>
                </div>

                <div class="flex justify-start mb-7">
                    <p class="font-bold text-lg w-20">Receiver</p>
                    
                    <div class="flex flex-col ml-28 gap-1 text-sm mt-1">
                        <p class="font-semibold opacity-80 text-grey-main">Asep bin Udin</p>
                        <p class="font-semibold opacity-80 text-grey-main">XI PPLG 2</p>
                    </div>
                </div>

                <div class="flex justify-start">
                    <p class="font-bold text-lg w-28">Payment Info</p>
                    
                    <div class="flex flex-col ml-20 gap-1 text-sm mt-1">
                        <p class="font-semibold opacity-80 text-grey-main">Dana</p>
                        <p class="font-semibold opacity-80 text-grey-main">Rp. 214.000</p>
                    </div>
                </div>

                <a href="/"><button class="w-72 ml-1 h-11 font-medium drop-shadow-lg hover:drop-shadow-xl hover:font-semibold transition-all ease duration-300 mt-8 text-white bg-black-main-200 rounded-lg">Close</button></a>

            </div>

        </div>

    </div>

@endsection
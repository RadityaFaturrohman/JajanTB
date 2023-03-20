@extends('main')

@section('content')
    
    <div class="w-full h-screen flex justify-start relative font-poppins">

        <svg viewBox="0 0 709 913" class="w-fit h-full absolute left-0 -z-10 drop-shadow-2xl" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect y="0.00012207" width="750" height="913" fill="#17191E"/>
            <mask id="mask0_11_1092" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="709" height="913">
            <rect y="0.00012207" width="709" height="913" fill="#0F172A"/>
            </mask>
            <g mask="url(#mask0_11_1092)">
            <path opacity="0.1" d="M110.973 5.10434C43.2609 107.951 -86.2929 143.577 -178.172 85.869C-270.051 28.1612 -290.617 -101.752 -222.905 -204.599C-155.193 -307.445 -25.6392 -343.071 66.24 -285.364C158.119 -227.656 178.685 -97.7421 110.973 5.10434Z" stroke="white" stroke-width="7"/>
            <path d="M947.5 997.158C947.5 1051.83 916.471 1101.66 865.638 1137.96C814.812 1174.26 744.417 1196.82 666.5 1196.82C588.583 1196.82 518.188 1174.26 467.362 1137.96C416.529 1101.66 385.5 1051.83 385.5 997.158C385.5 942.482 416.529 892.651 467.362 856.352C518.188 820.058 588.583 797.5 666.5 797.5C744.417 797.5 814.812 820.058 865.638 856.352C916.471 892.651 947.5 942.482 947.5 997.158Z" stroke="white" stroke-width="7"/>
            </g>
        </svg>
            
        <div class="w-750px h-full p-24 pl-32 flex flex-col justify-between">
            <div class="flex flex-col">
                <p class="font-semibold text-5xl tracking-tight text-white anim -translate-y-1">Welcome to <span class="text-blue-main">Klik JajanTB</span></p>
                <p class="text-blue-grey-main mt-5 font-light anim -translate-y-3">Explore a Variety of Delicious Menus at Our School Canteen!</p>
            </div>

            <div id="webrev1" class="flex flex-col gap-5 anim transition-all duration-500">

                <div class="flex gap-1">
                    <svg width="20" height="18" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                    <path d="M12.0683 0.288007L15.3452 6.95422L22.6831 8.02052C22.7762 8.03432 22.8636 8.07382 22.9354 8.13458C23.0072 8.19534 23.0606 8.27495 23.0895 8.36443C23.1184 8.45392 23.1218 8.54973 23.0992 8.64108C23.0765 8.73243 23.0288 8.81568 22.9614 8.88147L17.6474 14.0726L18.8943 21.4004C18.9104 21.493 18.9002 21.5883 18.8648 21.6755C18.8294 21.7627 18.7703 21.8382 18.6942 21.8936C18.6181 21.949 18.5279 21.982 18.4341 21.9889C18.3402 21.9957 18.2463 21.9762 18.163 21.9324L11.6017 18.476L5.03416 21.9391C4.95088 21.983 4.85696 22.0028 4.76306 21.9962C4.66916 21.9895 4.57905 21.9566 4.50297 21.9013C4.4269 21.846 4.3679 21.7705 4.33269 21.6833C4.29749 21.5961 4.28748 21.5008 4.30381 21.4081L5.56397 14.0778L0.257758 8.89122C0.190478 8.82549 0.142927 8.74228 0.120461 8.65095C0.0979953 8.55962 0.101506 8.46381 0.130599 8.3743C0.159691 8.28479 0.21321 8.20513 0.285128 8.14431C0.357045 8.08349 0.444505 8.04391 0.537658 8.03004L7.87741 6.95743L11.1679 0.288394C11.2089 0.203883 11.2729 0.132599 11.3526 0.0827055C11.4323 0.0328123 11.5244 0.00632856 11.6183 0.00628819C11.7123 0.00624782 11.8044 0.0326524 11.8839 0.0824772C11.9635 0.132302 12.0274 0.203532 12.0683 0.288007V0.288007Z" fill="#FDE047"/>
                    </svg>
                    <svg width="20" height="18" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.0683 0.288007L15.3452 6.95422L22.6831 8.02052C22.7762 8.03432 22.8636 8.07382 22.9354 8.13458C23.0072 8.19534 23.0606 8.27495 23.0895 8.36443C23.1184 8.45392 23.1218 8.54973 23.0992 8.64108C23.0765 8.73243 23.0288 8.81568 22.9614 8.88147L17.6474 14.0726L18.8943 21.4004C18.9104 21.493 18.9002 21.5883 18.8648 21.6755C18.8294 21.7627 18.7703 21.8382 18.6942 21.8936C18.6181 21.949 18.5279 21.982 18.4341 21.9889C18.3402 21.9957 18.2463 21.9762 18.163 21.9324L11.6017 18.476L5.03416 21.9391C4.95088 21.983 4.85696 22.0028 4.76306 21.9962C4.66916 21.9895 4.57905 21.9566 4.50297 21.9013C4.4269 21.846 4.3679 21.7705 4.33269 21.6833C4.29749 21.5961 4.28748 21.5008 4.30381 21.4081L5.56397 14.0778L0.257758 8.89122C0.190478 8.82549 0.142927 8.74228 0.120461 8.65095C0.0979953 8.55962 0.101506 8.46381 0.130599 8.3743C0.159691 8.28479 0.21321 8.20513 0.285128 8.14431C0.357045 8.08349 0.444505 8.04391 0.537658 8.03004L7.87741 6.95743L11.1679 0.288394C11.2089 0.203883 11.2729 0.132599 11.3526 0.0827055C11.4323 0.0328123 11.5244 0.00632856 11.6183 0.00628819C11.7123 0.00624782 11.8044 0.0326524 11.8839 0.0824772C11.9635 0.132302 12.0274 0.203532 12.0683 0.288007V0.288007Z" fill="#FDE047"/>
                    </svg>
                    <svg width="20" height="18" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.0683 0.288007L15.3452 6.95422L22.6831 8.02052C22.7762 8.03432 22.8636 8.07382 22.9354 8.13458C23.0072 8.19534 23.0606 8.27495 23.0895 8.36443C23.1184 8.45392 23.1218 8.54973 23.0992 8.64108C23.0765 8.73243 23.0288 8.81568 22.9614 8.88147L17.6474 14.0726L18.8943 21.4004C18.9104 21.493 18.9002 21.5883 18.8648 21.6755C18.8294 21.7627 18.7703 21.8382 18.6942 21.8936C18.6181 21.949 18.5279 21.982 18.4341 21.9889C18.3402 21.9957 18.2463 21.9762 18.163 21.9324L11.6017 18.476L5.03416 21.9391C4.95088 21.983 4.85696 22.0028 4.76306 21.9962C4.66916 21.9895 4.57905 21.9566 4.50297 21.9013C4.4269 21.846 4.3679 21.7705 4.33269 21.6833C4.29749 21.5961 4.28748 21.5008 4.30381 21.4081L5.56397 14.0778L0.257758 8.89122C0.190478 8.82549 0.142927 8.74228 0.120461 8.65095C0.0979953 8.55962 0.101506 8.46381 0.130599 8.3743C0.159691 8.28479 0.21321 8.20513 0.285128 8.14431C0.357045 8.08349 0.444505 8.04391 0.537658 8.03004L7.87741 6.95743L11.1679 0.288394C11.2089 0.203883 11.2729 0.132599 11.3526 0.0827055C11.4323 0.0328123 11.5244 0.00632856 11.6183 0.00628819C11.7123 0.00624782 11.8044 0.0326524 11.8839 0.0824772C11.9635 0.132302 12.0274 0.203532 12.0683 0.288007V0.288007Z" fill="#FDE047"/>
                    </svg>
                    <svg width="20" height="18" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.0683 0.288007L15.3452 6.95422L22.6831 8.02052C22.7762 8.03432 22.8636 8.07382 22.9354 8.13458C23.0072 8.19534 23.0606 8.27495 23.0895 8.36443C23.1184 8.45392 23.1218 8.54973 23.0992 8.64108C23.0765 8.73243 23.0288 8.81568 22.9614 8.88147L17.6474 14.0726L18.8943 21.4004C18.9104 21.493 18.9002 21.5883 18.8648 21.6755C18.8294 21.7627 18.7703 21.8382 18.6942 21.8936C18.6181 21.949 18.5279 21.982 18.4341 21.9889C18.3402 21.9957 18.2463 21.9762 18.163 21.9324L11.6017 18.476L5.03416 21.9391C4.95088 21.983 4.85696 22.0028 4.76306 21.9962C4.66916 21.9895 4.57905 21.9566 4.50297 21.9013C4.4269 21.846 4.3679 21.7705 4.33269 21.6833C4.29749 21.5961 4.28748 21.5008 4.30381 21.4081L5.56397 14.0778L0.257758 8.89122C0.190478 8.82549 0.142927 8.74228 0.120461 8.65095C0.0979953 8.55962 0.101506 8.46381 0.130599 8.3743C0.159691 8.28479 0.21321 8.20513 0.285128 8.14431C0.357045 8.08349 0.444505 8.04391 0.537658 8.03004L7.87741 6.95743L11.1679 0.288394C11.2089 0.203883 11.2729 0.132599 11.3526 0.0827055C11.4323 0.0328123 11.5244 0.00632856 11.6183 0.00628819C11.7123 0.00624782 11.8044 0.0326524 11.8839 0.0824772C11.9635 0.132302 12.0274 0.203532 12.0683 0.288007V0.288007Z" fill="#FDE047"/>
                    </svg>
                    <svg width="20" height="18" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.0683 0.288007L15.3452 6.95422L22.6831 8.02052C22.7762 8.03432 22.8636 8.07382 22.9354 8.13458C23.0072 8.19534 23.0606 8.27495 23.0895 8.36443C23.1184 8.45392 23.1218 8.54973 23.0992 8.64108C23.0765 8.73243 23.0288 8.81568 22.9614 8.88147L17.6474 14.0726L18.8943 21.4004C18.9104 21.493 18.9002 21.5883 18.8648 21.6755C18.8294 21.7627 18.7703 21.8382 18.6942 21.8936C18.6181 21.949 18.5279 21.982 18.4341 21.9889C18.3402 21.9957 18.2463 21.9762 18.163 21.9324L11.6017 18.476L5.03416 21.9391C4.95088 21.983 4.85696 22.0028 4.76306 21.9962C4.66916 21.9895 4.57905 21.9566 4.50297 21.9013C4.4269 21.846 4.3679 21.7705 4.33269 21.6833C4.29749 21.5961 4.28748 21.5008 4.30381 21.4081L5.56397 14.0778L0.257758 8.89122C0.190478 8.82549 0.142927 8.74228 0.120461 8.65095C0.0979953 8.55962 0.101506 8.46381 0.130599 8.3743C0.159691 8.28479 0.21321 8.20513 0.285128 8.14431C0.357045 8.08349 0.444505 8.04391 0.537658 8.03004L7.87741 6.95743L11.1679 0.288394C11.2089 0.203883 11.2729 0.132599 11.3526 0.0827055C11.4323 0.0328123 11.5244 0.00632856 11.6183 0.00628819C11.7123 0.00624782 11.8044 0.0326524 11.8839 0.0824772C11.9635 0.132302 12.0274 0.203532 12.0683 0.288007V0.288007Z" fill="#FDE047"/>
                    </svg>                                                    
                </div>
                
                <p class="text-white text-base leading-relaxed">"Website terkeren yang pernah aku liat, trus juga barang barang di kantin jadi lebih menarik loh, Keren!”</p>

                <div class="flex items-center gap-9px">

                    <div class="rounded-full w-10 h-10 bg-cover" style="background-image: url({{asset('img/pp.jpg')}})"></div>

                    <div class="flex flex-col">
                        <p class="text-white text-sm font-medium">Agus Ganteng</p>
                        <p class="text-blue-grey-main text-xs">Student</p>
                    </div>

                </div>

            </div>

            <div id="webrev2" class="flex flex-col gap-5 hidden anim duration-500">

                <div class="flex gap-1">
                    <svg width="20" height="18" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                    <path d="M12.0683 0.288007L15.3452 6.95422L22.6831 8.02052C22.7762 8.03432 22.8636 8.07382 22.9354 8.13458C23.0072 8.19534 23.0606 8.27495 23.0895 8.36443C23.1184 8.45392 23.1218 8.54973 23.0992 8.64108C23.0765 8.73243 23.0288 8.81568 22.9614 8.88147L17.6474 14.0726L18.8943 21.4004C18.9104 21.493 18.9002 21.5883 18.8648 21.6755C18.8294 21.7627 18.7703 21.8382 18.6942 21.8936C18.6181 21.949 18.5279 21.982 18.4341 21.9889C18.3402 21.9957 18.2463 21.9762 18.163 21.9324L11.6017 18.476L5.03416 21.9391C4.95088 21.983 4.85696 22.0028 4.76306 21.9962C4.66916 21.9895 4.57905 21.9566 4.50297 21.9013C4.4269 21.846 4.3679 21.7705 4.33269 21.6833C4.29749 21.5961 4.28748 21.5008 4.30381 21.4081L5.56397 14.0778L0.257758 8.89122C0.190478 8.82549 0.142927 8.74228 0.120461 8.65095C0.0979953 8.55962 0.101506 8.46381 0.130599 8.3743C0.159691 8.28479 0.21321 8.20513 0.285128 8.14431C0.357045 8.08349 0.444505 8.04391 0.537658 8.03004L7.87741 6.95743L11.1679 0.288394C11.2089 0.203883 11.2729 0.132599 11.3526 0.0827055C11.4323 0.0328123 11.5244 0.00632856 11.6183 0.00628819C11.7123 0.00624782 11.8044 0.0326524 11.8839 0.0824772C11.9635 0.132302 12.0274 0.203532 12.0683 0.288007V0.288007Z" fill="#FDE047"/>
                    </svg>
                    <svg width="20" height="18" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.0683 0.288007L15.3452 6.95422L22.6831 8.02052C22.7762 8.03432 22.8636 8.07382 22.9354 8.13458C23.0072 8.19534 23.0606 8.27495 23.0895 8.36443C23.1184 8.45392 23.1218 8.54973 23.0992 8.64108C23.0765 8.73243 23.0288 8.81568 22.9614 8.88147L17.6474 14.0726L18.8943 21.4004C18.9104 21.493 18.9002 21.5883 18.8648 21.6755C18.8294 21.7627 18.7703 21.8382 18.6942 21.8936C18.6181 21.949 18.5279 21.982 18.4341 21.9889C18.3402 21.9957 18.2463 21.9762 18.163 21.9324L11.6017 18.476L5.03416 21.9391C4.95088 21.983 4.85696 22.0028 4.76306 21.9962C4.66916 21.9895 4.57905 21.9566 4.50297 21.9013C4.4269 21.846 4.3679 21.7705 4.33269 21.6833C4.29749 21.5961 4.28748 21.5008 4.30381 21.4081L5.56397 14.0778L0.257758 8.89122C0.190478 8.82549 0.142927 8.74228 0.120461 8.65095C0.0979953 8.55962 0.101506 8.46381 0.130599 8.3743C0.159691 8.28479 0.21321 8.20513 0.285128 8.14431C0.357045 8.08349 0.444505 8.04391 0.537658 8.03004L7.87741 6.95743L11.1679 0.288394C11.2089 0.203883 11.2729 0.132599 11.3526 0.0827055C11.4323 0.0328123 11.5244 0.00632856 11.6183 0.00628819C11.7123 0.00624782 11.8044 0.0326524 11.8839 0.0824772C11.9635 0.132302 12.0274 0.203532 12.0683 0.288007V0.288007Z" fill="#FDE047"/>
                    </svg>
                    <svg width="20" height="18" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 0L6.97937 6.21885H0.440491L5.73056 10.0623L3.70993 16.2812L9 12.4377L14.2901 16.2812L12.2694 10.0623L17.5595 6.21885H11.0206L9 0Z" fill="#D9D9D9"/>
                    </svg> 
                    <svg width="20" height="18" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 0L6.97937 6.21885H0.440491L5.73056 10.0623L3.70993 16.2812L9 12.4377L14.2901 16.2812L12.2694 10.0623L17.5595 6.21885H11.0206L9 0Z" fill="#D9D9D9"/>
                    </svg> 
                    <svg width="20" height="18" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 0L6.97937 6.21885H0.440491L5.73056 10.0623L3.70993 16.2812L9 12.4377L14.2901 16.2812L12.2694 10.0623L17.5595 6.21885H11.0206L9 0Z" fill="#D9D9D9"/>
                    </svg>                                                    
                </div>
                
                <p class="text-white text-base leading-relaxed">"Konon katanya disini harganya mahal mahal banget!”</p>

                <div class="flex items-center gap-9px">

                    <div class="rounded-full w-10 h-10 bg-cover" style="background-image: url({{asset('img/pp.jpg')}})"></div>

                    <div class="flex flex-col">
                        <p class="text-white text-sm font-medium">Agus Cilangkap</p>
                        <p class="text-blue-grey-main text-xs">Student</p>
                    </div>

                </div>

            </div>

            <div id="webrev3" class="flex flex-col gap-5 hidden anim duration-200">

                <div class="flex gap-1">
                    <svg width="20" height="18" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                    <path d="M12.0683 0.288007L15.3452 6.95422L22.6831 8.02052C22.7762 8.03432 22.8636 8.07382 22.9354 8.13458C23.0072 8.19534 23.0606 8.27495 23.0895 8.36443C23.1184 8.45392 23.1218 8.54973 23.0992 8.64108C23.0765 8.73243 23.0288 8.81568 22.9614 8.88147L17.6474 14.0726L18.8943 21.4004C18.9104 21.493 18.9002 21.5883 18.8648 21.6755C18.8294 21.7627 18.7703 21.8382 18.6942 21.8936C18.6181 21.949 18.5279 21.982 18.4341 21.9889C18.3402 21.9957 18.2463 21.9762 18.163 21.9324L11.6017 18.476L5.03416 21.9391C4.95088 21.983 4.85696 22.0028 4.76306 21.9962C4.66916 21.9895 4.57905 21.9566 4.50297 21.9013C4.4269 21.846 4.3679 21.7705 4.33269 21.6833C4.29749 21.5961 4.28748 21.5008 4.30381 21.4081L5.56397 14.0778L0.257758 8.89122C0.190478 8.82549 0.142927 8.74228 0.120461 8.65095C0.0979953 8.55962 0.101506 8.46381 0.130599 8.3743C0.159691 8.28479 0.21321 8.20513 0.285128 8.14431C0.357045 8.08349 0.444505 8.04391 0.537658 8.03004L7.87741 6.95743L11.1679 0.288394C11.2089 0.203883 11.2729 0.132599 11.3526 0.0827055C11.4323 0.0328123 11.5244 0.00632856 11.6183 0.00628819C11.7123 0.00624782 11.8044 0.0326524 11.8839 0.0824772C11.9635 0.132302 12.0274 0.203532 12.0683 0.288007V0.288007Z" fill="#FDE047"/>
                    </svg>
                    <svg width="20" height="18" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.0683 0.288007L15.3452 6.95422L22.6831 8.02052C22.7762 8.03432 22.8636 8.07382 22.9354 8.13458C23.0072 8.19534 23.0606 8.27495 23.0895 8.36443C23.1184 8.45392 23.1218 8.54973 23.0992 8.64108C23.0765 8.73243 23.0288 8.81568 22.9614 8.88147L17.6474 14.0726L18.8943 21.4004C18.9104 21.493 18.9002 21.5883 18.8648 21.6755C18.8294 21.7627 18.7703 21.8382 18.6942 21.8936C18.6181 21.949 18.5279 21.982 18.4341 21.9889C18.3402 21.9957 18.2463 21.9762 18.163 21.9324L11.6017 18.476L5.03416 21.9391C4.95088 21.983 4.85696 22.0028 4.76306 21.9962C4.66916 21.9895 4.57905 21.9566 4.50297 21.9013C4.4269 21.846 4.3679 21.7705 4.33269 21.6833C4.29749 21.5961 4.28748 21.5008 4.30381 21.4081L5.56397 14.0778L0.257758 8.89122C0.190478 8.82549 0.142927 8.74228 0.120461 8.65095C0.0979953 8.55962 0.101506 8.46381 0.130599 8.3743C0.159691 8.28479 0.21321 8.20513 0.285128 8.14431C0.357045 8.08349 0.444505 8.04391 0.537658 8.03004L7.87741 6.95743L11.1679 0.288394C11.2089 0.203883 11.2729 0.132599 11.3526 0.0827055C11.4323 0.0328123 11.5244 0.00632856 11.6183 0.00628819C11.7123 0.00624782 11.8044 0.0326524 11.8839 0.0824772C11.9635 0.132302 12.0274 0.203532 12.0683 0.288007V0.288007Z" fill="#FDE047"/>
                    </svg>
                    <svg width="20" height="18" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.0683 0.288007L15.3452 6.95422L22.6831 8.02052C22.7762 8.03432 22.8636 8.07382 22.9354 8.13458C23.0072 8.19534 23.0606 8.27495 23.0895 8.36443C23.1184 8.45392 23.1218 8.54973 23.0992 8.64108C23.0765 8.73243 23.0288 8.81568 22.9614 8.88147L17.6474 14.0726L18.8943 21.4004C18.9104 21.493 18.9002 21.5883 18.8648 21.6755C18.8294 21.7627 18.7703 21.8382 18.6942 21.8936C18.6181 21.949 18.5279 21.982 18.4341 21.9889C18.3402 21.9957 18.2463 21.9762 18.163 21.9324L11.6017 18.476L5.03416 21.9391C4.95088 21.983 4.85696 22.0028 4.76306 21.9962C4.66916 21.9895 4.57905 21.9566 4.50297 21.9013C4.4269 21.846 4.3679 21.7705 4.33269 21.6833C4.29749 21.5961 4.28748 21.5008 4.30381 21.4081L5.56397 14.0778L0.257758 8.89122C0.190478 8.82549 0.142927 8.74228 0.120461 8.65095C0.0979953 8.55962 0.101506 8.46381 0.130599 8.3743C0.159691 8.28479 0.21321 8.20513 0.285128 8.14431C0.357045 8.08349 0.444505 8.04391 0.537658 8.03004L7.87741 6.95743L11.1679 0.288394C11.2089 0.203883 11.2729 0.132599 11.3526 0.0827055C11.4323 0.0328123 11.5244 0.00632856 11.6183 0.00628819C11.7123 0.00624782 11.8044 0.0326524 11.8839 0.0824772C11.9635 0.132302 12.0274 0.203532 12.0683 0.288007V0.288007Z" fill="#FDE047"/>
                    </svg>
                    <svg width="20" height="18" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 0L6.97937 6.21885H0.440491L5.73056 10.0623L3.70993 16.2812L9 12.4377L14.2901 16.2812L12.2694 10.0623L17.5595 6.21885H11.0206L9 0Z" fill="#D9D9D9"/>
                    </svg> 
                    <svg width="20" height="18" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 0L6.97937 6.21885H0.440491L5.73056 10.0623L3.70993 16.2812L9 12.4377L14.2901 16.2812L12.2694 10.0623L17.5595 6.21885H11.0206L9 0Z" fill="#D9D9D9"/>
                    </svg>                                                   
                </div>
                
                <p class="text-white text-base leading-relaxed ">"Katanya kalo ga ngasih bintang 5 ga akan naik kelas, jadi aku kasih bintang 5!”</p>

                <div class="flex items-center gap-9px">

                    <div class="rounded-full w-10 h-10 bg-cover" style="background-image: url({{asset('img/pp.jpg')}})"></div>

                    <div class="flex flex-col">
                        <p class="text-white text-sm font-medium">Agus Tiger</p>
                        <p class="text-blue-grey-main text-xs">Teacher</p>
                    </div>

                </div>

            </div>
        </div>

        <div class="flex flex-col pt-24 pl-14 mt-2">

            <div id="regis" class="hidden anim">
                <p class="font-bold text-5xl tracking-tight text-black-main-200">Sign Up</p>
                <p class="text-gray-600 w-96 mt-5 tracking-tight">HI, Welcome to our school canteen website, create new account for your best Experience!</p>

                <form action="" class="mt-8 flex flex-col gap-4">

                    <div class="flex flex-col gap-1">
                        <label class="text-black-main-200 text-sm font-medium" for="">Full name</label>
                        <input type="text" class="w-550px rounded-lg pl-3 text-sm h-12 border border-new-grey-main focus:outline-none focus:border-light-grey-main">
                    </div>

                    <div class="flex flex-col gap-1">
                        <label class="text-black-main-200 text-sm font-medium" for="">Email</label>
                        <input type="email" class="w-550px rounded-lg pl-3 text-sm h-12 border border-new-grey-main focus:outline-none focus:border-light-grey-main">
                    </div>

                    <div class="flex flex-col gap-1">
                        <label class="text-black-main-200 text-sm font-medium" for="">Password</label>
                        <input type="password" class="w-550px rounded-lg pl-3 text-sm h-12 border border-new-grey-main focus:outline-none focus:border-light-grey-main">
                    </div>

                    <div class="flex items-center justify-between w-550px">

                        <div class="flex gap-2">
                            <input class="w-4 h-4 rounded border border-light-grey-main cursor-pointer" type="checkbox">
                            <label for="" class="text-xs">Remember me</label>
                        </div>

                        <a href="" class="text-xs font-normal text-blue-main hover:font-medium transition-all ease duration-200">Forgot Password?</a>

                    </div>

                    <button class="w-40 h-10 bg-blue-main text-white font-medium rounded-lg mt-7 shadow-md hover:font-semibold hover:shadow-lg">Sign Up</button>
                    
                </form>
                <p class="text-sm text-grey-main mt-4">Already have an account? <button onclick="reg()" href="" class="text-blue-main hover:font-medium">Login</button></p>
            </div>

            <div id="login" class="anim">

                <p class="font-bold text-5xl tracking-tight text-black-main-200">Welcome Back!</p>
                <p class="text-gray-600 w-96 mt-5 tracking-tight">Login to your account to access our newest product</p>

                <form action="" class="mt-8 flex flex-col gap-4">

                    <div class="flex flex-col gap-1">
                        <label class="text-black-main-200 text-sm font-medium" for="">Email address</label>
                        <input type="email" class="w-550px rounded-lg pl-3 text-sm h-12 border border-new-grey-main focus:outline-none focus:border-light-grey-main">
                    </div>

                    <div class="flex flex-col gap-1">
                        <label class="text-black-main-200 text-sm font-medium" for="">Password</label>
                        <input type="password" class="w-550px rounded-lg pl-3 text-sm h-12 border border-new-grey-main focus:outline-none focus:border-light-grey-main">
                    </div>

                    <div class="flex items-center justify-between w-550px">

                        <div class="flex gap-2">
                            <input class="w-4 h-4 rounded border border-light-grey-main cursor-pointer" type="checkbox">
                            <label for="" class="text-xs">Remember me</label>
                        </div>

                        <a href="" class="text-xs font-normal text-blue-main hover:font-medium transition-all ease duration-200">Forgot Password?</a>

                    </div>

                    <button class="w-40 h-10 bg-blue-main text-white font-medium rounded-lg mt-7 shadow-md hover:font-semibold hover:shadow-lg">Sign In</button>
                    
                </form>
                <p class="text-sm text-grey-main mt-4">Doesn't have an account? <button onclick="log()" href="" class="text-blue-main hover:font-medium">Create a free account</button></p>
            </div>
            
        </div>
        
    </div>

@endsection

@section('customjs')
    
    <script>
        window.onload = function() {

            const rev1 = document.querySelector('#webrev1');
            const rev2 = document.querySelector('#webrev2');
            const rev3 = document.querySelector('#webrev3');

            const login = document.querySelector('#login');
            const regis = document.querySelector('#regis');

            setInterval(() => {
                if(rev1.classList.contains('hidden') && rev2.classList.contains('hidden')){
                    rev1.classList.remove('hidden');
                    rev1.classList.add('webrevdis');
                    rev2.classList.add('hidden');
                    rev3.classList.add('hidden');
                }else if(rev2.classList.contains('hidden') && rev3.classList.contains('hidden')){
                    rev1.classList.add('hidden');
                    rev3.classList.add('hidden');
                    rev2.classList.remove('hidden');
                    rev2.classList.add('webrevdis');
                }else if(rev3.classList.contains('hidden') && rev1.classList.contains('hidden')){
                    rev3.classList.remove('hidden');
                    rev3.classList.add('webrevdis');
                    rev2.classList.add('hidden');
                    rev1.classList.add('hidden');
                }
            }, 5000);
        }
        function log(){
            login.classList.add('hidden');
            regis.classList.remove('hidden');
        }

        function reg(){
            login.classList.remove('hidden');
            regis.classList.add('hidden');
        }

    </script>

@endsection
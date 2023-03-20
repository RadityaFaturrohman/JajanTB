@extends('main')

@section('content')

    <div class="w-full h-screen p-10 pb-96 px-50px font-jakarta">

        <div class="flex flex-col">

            <a href="/"><button class="flex items-center text-lg font-medium group/back hover:font-semibold text-light-grey-main">
                <svg width="20" height="20" class="group-hover/back:-mr-1px transition-all ease duration-200" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.36465 19.3417L0.64173 11.6417C0.550063 11.55 0.485286 11.4507 0.447397 11.3437C0.408897 11.2368 0.389647 11.1222 0.389647 11C0.389647 10.8778 0.408897 10.7632 0.447397 10.6562C0.485286 10.5493 0.550064 10.45 0.64173 10.3583L8.36465 2.63541C8.57854 2.42152 8.8459 2.31458 9.16673 2.31458C9.48757 2.31458 9.76256 2.42916 9.99173 2.65833C10.2209 2.88749 10.3355 3.15485 10.3355 3.46041C10.3355 3.76597 10.2209 4.03333 9.99173 4.26249L3.25423 11L9.99173 17.7375C10.2056 17.9514 10.3126 18.2148 10.3126 18.5277C10.3126 18.8412 10.198 19.1125 9.96881 19.3417C9.73965 19.5708 9.47228 19.6854 9.16673 19.6854C8.86117 19.6854 8.59381 19.5708 8.36465 19.3417Z" fill="#6F6F6F"/>
                </svg>
                Back
            </button></a>

            <div class="flex justify-start items-start px-6 mt-10 gap-16">

                <div class="flex flex-col justify-between items-center w-40 gap-4">

                    <div class="w-full h-24 bg-light-blue-main flex justify-center items-center rounded-md cursor-pointer border border-new-grey-main shadow-md">
                        <div class="w-5/12 h-20 bg-cover" style="background-image: url({{asset('img/lays.png')}})"></div>
                    </div>

                    <div class="w-full h-24 bg-light-blue-main flex justify-center items-center rounded-md cursor-pointer shadow-sm hover:shadow-md transition ease duration-300 border border-new-grey-main border-opacity-90">
                        <div class="w-5/12 h-20 bg-cover" style="background-image: url({{asset('img/lays.png')}})"></div>
                    </div>

                    <div class="w-full h-24 bg-light-blue-main flex justify-center items-center rounded-md cursor-pointer shadow-sm hover:shadow-md transition ease duration-300 border border-new-grey-main border-opacity-90">
                        <div class="w-5/12 h-20 bg-cover" style="background-image: url({{asset('img/lays.png')}})"></div>
                    </div>

                    <div class="w-full h-24 bg-light-blue-main flex justify-center items-center rounded-md cursor-pointer shadow-sm hover:shadow-md transition ease duration-300 border border-new-grey-main border-opacity-90">
                        <div class="w-5/12 h-20 bg-cover" style="background-image: url({{asset('img/lays.png')}})"></div>
                    </div>

                </div>

                <div class="w-550px h-530px bg-light-blue-main flex justify-center items-center rounded-lg" style="filter: drop-shadow(0px 1px 2px rgba(0, 0, 0, 0.25));">

                    <div class="w-9/12 h-500px bg-cover" style="background-image: url({{asset('img/lays.png')}})"></div>

                </div>

                <div class="flex flex-col font-heebo mt-2 gap-4 fixed right-44 pl-24 h-screen bg-white z-10">

                    <p class="font-extrabold text-3xl w-96 text-black-main-200">Chitato (China Tanpa Toko)</p>

                    <div class="flex justify-start items-center">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.23912 3.14165C7.4786 2.4046 8.52133 2.40461 8.76081 3.14165L9.61646 5.77509C9.72356 6.10471 10.0307 6.32788 10.3773 6.32788H13.1463C13.9212 6.32788 14.2435 7.31957 13.6165 7.77509L11.3764 9.40265C11.096 9.60636 10.9786 9.96745 11.0857 10.2971L11.9414 12.9305C12.1809 13.6676 11.3373 14.2805 10.7103 13.8249L8.47019 12.1974C8.1898 11.9937 7.81012 11.9937 7.52973 12.1974L5.2896 13.8249C4.66263 14.2805 3.81904 13.6676 4.05853 12.9305L4.91418 10.2971C5.02128 9.96745 4.90395 9.60636 4.62356 9.40265L2.38343 7.77509C1.75646 7.31957 2.07868 6.32788 2.85366 6.32788H5.62262C5.9692 6.32788 6.27636 6.10471 6.38346 5.77509L7.23912 3.14165Z" fill="#FECE23"/>
                        </svg>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.23912 3.14165C7.4786 2.4046 8.52133 2.40461 8.76081 3.14165L9.61646 5.77509C9.72356 6.10471 10.0307 6.32788 10.3773 6.32788H13.1463C13.9212 6.32788 14.2435 7.31957 13.6165 7.77509L11.3764 9.40265C11.096 9.60636 10.9786 9.96745 11.0857 10.2971L11.9414 12.9305C12.1809 13.6676 11.3373 14.2805 10.7103 13.8249L8.47019 12.1974C8.1898 11.9937 7.81012 11.9937 7.52973 12.1974L5.2896 13.8249C4.66263 14.2805 3.81904 13.6676 4.05853 12.9305L4.91418 10.2971C5.02128 9.96745 4.90395 9.60636 4.62356 9.40265L2.38343 7.77509C1.75646 7.31957 2.07868 6.32788 2.85366 6.32788H5.62262C5.9692 6.32788 6.27636 6.10471 6.38346 5.77509L7.23912 3.14165Z" fill="#FECE23"/>
                        </svg>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.23912 3.14165C7.4786 2.4046 8.52133 2.40461 8.76081 3.14165L9.61646 5.77509C9.72356 6.10471 10.0307 6.32788 10.3773 6.32788H13.1463C13.9212 6.32788 14.2435 7.31957 13.6165 7.77509L11.3764 9.40265C11.096 9.60636 10.9786 9.96745 11.0857 10.2971L11.9414 12.9305C12.1809 13.6676 11.3373 14.2805 10.7103 13.8249L8.47019 12.1974C8.1898 11.9937 7.81012 11.9937 7.52973 12.1974L5.2896 13.8249C4.66263 14.2805 3.81904 13.6676 4.05853 12.9305L4.91418 10.2971C5.02128 9.96745 4.90395 9.60636 4.62356 9.40265L2.38343 7.77509C1.75646 7.31957 2.07868 6.32788 2.85366 6.32788H5.62262C5.9692 6.32788 6.27636 6.10471 6.38346 5.77509L7.23912 3.14165Z" fill="#FECE23"/>
                        </svg>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.23912 3.14165C7.4786 2.4046 8.52133 2.40461 8.76081 3.14165L9.61646 5.77509C9.72356 6.10471 10.0307 6.32788 10.3773 6.32788H13.1463C13.9212 6.32788 14.2435 7.31957 13.6165 7.77509L11.3764 9.40265C11.096 9.60636 10.9786 9.96745 11.0857 10.2971L11.9414 12.9305C12.1809 13.6676 11.3373 14.2805 10.7103 13.8249L8.47019 12.1974C8.1898 11.9937 7.81012 11.9937 7.52973 12.1974L5.2896 13.8249C4.66263 14.2805 3.81904 13.6676 4.05853 12.9305L4.91418 10.2971C5.02128 9.96745 4.90395 9.60636 4.62356 9.40265L2.38343 7.77509C1.75646 7.31957 2.07868 6.32788 2.85366 6.32788H5.62262C5.9692 6.32788 6.27636 6.10471 6.38346 5.77509L7.23912 3.14165Z" fill="#FECE23"/>
                        </svg>
                        <svg width="16" height="15" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 0L6.97937 6.21885H0.440491L5.73056 10.0623L3.70993 16.2812L9 12.4377L14.2901 16.2812L12.2694 10.0623L17.5595 6.21885H11.0206L9 0Z" fill="#D9D9D9"/>
                        </svg>   
                        <p class="font-medium text-xs ml-2">157 Reviews</p>
                    </div>

                    <div class="flex justify-start items-center mt-5 gap-5 font-jakarta">
                        <p class="font-bold text-2xl text-black-main-200 tracking-tight">Rp.50.000</p>
                        <p class="font-bold text-blue-main relative">
                            Rp.100.000
                            <span class="absolute w-28 top-3 h-1px bg-blue-main -left-2"></span>
                        </p>
                    </div>

                    <p class="flex items-center font-jakarta font-medium text-xs gap-5px text-grey-main">
                        <svg width="16" height="16" class="mt-1px" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.395 6.50502C12.6684 6.77839 12.6684 7.2216 12.395 7.49497L7.495 12.395C7.22163 12.6683 6.77842 12.6683 6.50505 12.395L1.60505 7.49497C1.46834 7.35826 1.4 7.17908 1.40002 6.99991V3.49999C1.40002 2.3402 2.34023 1.39999 3.50002 1.39999H7.00022C7.1793 1.40004 7.35836 1.46838 7.495 1.60502L12.395 6.50502ZM3.50002 4.19999C3.88662 4.19999 4.20002 3.88659 4.20002 3.49999C4.20002 3.11339 3.88662 2.79999 3.50002 2.79999C3.11343 2.79999 2.80002 3.11339 2.80002 3.49999C2.80002 3.88659 3.11343 4.19999 3.50002 4.19999Z" fill="#A1A1AA"/>
                        </svg>    
                        Save 50% right now
                    </p>

                    <div class="flex items-center mt-10 gap-4">

                        <button class="w-44 h-12 flex justify-center items-center bg-new-blue-main text-white-main rounded text-sm font-medium tracking-wide hover:font-semibold hover:shadow-lg transition-all ease duration-300">Add to cart</button>

                        <button class="w-10">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.75" y="0.75" width="48.5" height="48.5" rx="4.25" fill="#FAFAFB"/>
                            <path d="M19.2385 20.7385C17.9205 22.0565 17.9205 24.1935 19.2385 25.5115L25 31.273L30.7615 25.5115C32.0795 24.1935 32.0795 22.0565 30.7615 20.7385C29.4435 19.4205 27.3065 19.4205 25.9885 20.7385L25 21.7271L24.0115 20.7385C22.6935 19.4205 20.5565 19.4205 19.2385 20.7385Z" stroke="#52525B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <rect x="0.75" y="0.75" width="48.5" height="48.5" rx="4.25" stroke="#D4D4D8" stroke-width="1.5"/>
                            </svg>
                        </button>

                    </div>

                    <ul class="font-jakarta flex flex-col gap-4 mt-6">
                        <li class="flex items-center gap-2 tracking-wide font-medium text-sm text-grey-main">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.54577 9.16667H4.16667C5.08714 9.16667 5.83333 9.91286 5.83333 10.8333V11.6667C5.83333 12.5871 6.57953 13.3333 7.5 13.3333C8.42047 13.3333 9.16667 14.0795 9.16667 15V17.4542M6.66667 3.2796V4.58333C6.66667 5.73393 7.59941 6.66667 8.75 6.66667H9.16667C10.0871 6.66667 10.8333 7.41286 10.8333 8.33333C10.8333 9.25381 11.5795 10 12.5 10C13.4205 10 14.1667 9.25381 14.1667 8.33333C14.1667 7.41286 14.9129 6.66667 15.8333 6.66667L16.7204 6.66667M12.5 17.0732V15C12.5 14.0795 13.2462 13.3333 14.1667 13.3333H16.7204M17.5 10C17.5 14.1421 14.1421 17.5 10 17.5C5.85786 17.5 2.5 14.1421 2.5 10C2.5 5.85786 5.85786 2.5 10 2.5C14.1421 2.5 17.5 5.85786 17.5 10Z" stroke="#A1A1AA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                            Free shipping                               
                        </li>
                        <li class="flex items-center gap-2 tracking-wide font-medium text-sm text-grey-main">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.5 8.33333H17.5M5.83333 12.5H6.66667M10 12.5H10.8333M5 15.8333H15C16.3807 15.8333 17.5 14.714 17.5 13.3333V6.66667C17.5 5.28596 16.3807 4.16667 15 4.16667H5C3.61929 4.16667 2.5 5.28596 2.5 6.66667V13.3333C2.5 14.714 3.61929 15.8333 5 15.8333Z" stroke="#A1A1AA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>  
                            100% Secured Payment                              
                        </li>
                        <li class="flex items-center gap-2 tracking-wide font-medium text-sm text-grey-main">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.3333 5.83333C13.3333 7.67428 11.8409 9.16667 9.99996 9.16667C8.15901 9.16667 6.66663 7.67428 6.66663 5.83333C6.66663 3.99238 8.15901 2.5 9.99996 2.5C11.8409 2.5 13.3333 3.99238 13.3333 5.83333Z" stroke="#A1A1AA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.99996 11.6667C6.7783 11.6667 4.16663 14.2783 4.16663 17.5H15.8333C15.8333 14.2783 13.2216 11.6667 9.99996 11.6667Z" stroke="#A1A1AA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>   
                            Cash on Canteen                             
                        </li>
                    </ul>

                </div>

            </div>

            <div class="px-6 relative">
                
                <div class="flex items-center gap-11 mt-14">

                    <button id="descbtn" onclick="desc()" class="py-3 w-fit font-bold text-black-main-200 text-sm  border-b-2 transition-all ease-in-out duration-200 flex items-center gap-3px hover:border-b border-black-main-100">Description</button>

                    <button id="revbtn" onclick="rev()" class="py-3 w-fit font-bold text-black-main-200 text-sm grayscale transition-all ease-in-out duration-200 flex items-center gap-3px hover:border-b border-black-main-100">
                        Reviews 
                        <span class="px-2 py-2px text-10 font-medium tracking-wide text-center mt-1px bg-blue-main text-white text-xs rounded-2xl">157</span>
                    </button>

                </div>

                <span class="absolute w-1190px h-1px bg-light-grey-main opacity-60"></span>

                <div class="w-900px h-500px mt-6">

                    <p id="description" class="font-semibold text-sm text-light-grey-main opacity-70 leading-relaxed">Lorem ipsum dolor sit amet consectetur. Est integer dignissim viverra amet porta metus quam. Porttitor consectetur praesent vitae risus mattis eu. Sit mi nisi mauris vitae. Fusce bibendum aliquet porta felis imperdiet vitae sit duis. Cras aliquet risus amet enim egestas. Tempus ut vulputate vulputate porttitor amet. Ut massa urna in tincidunt ultrices. Mauris enim cras mattis sociis vel risus a neque neque.
                    Ut phasellus morbi sit non ultrices at aliquam sagittis. Suscipit neque tempor quis fames. Consequat tellus amet nisl praesent at. Tristique mi id congue posuere. Ipsum sociis lectus id senectus a id. Volutpat dui varius eu tortor tellus aliquam augue amet ac. Eget praesent porta non vehicula hendrerit leo vel. Id ut felis mattis nisi. Scelerisque adipiscing proin lacus nullam commodo. Laoreet odio tristique imperdiet gravida. Eget ornare aliquam proin vehicula consectetur mi. Tristique eget dolor enim ut. Neque suspendisse magna in ipsum ornare urna dui nibh. Habitant tristique pulvinar duis massa eget.
                    Lacus quis tincidunt ut tincidunt adipiscing viverra id at. Sit egestas nam amet id sit. Euismod natoque eget nibh pharetra neque pulvinar. Vitae suspendisse posuere consequat nulla sed orci lectus at. Mattis nam feugiat felis eu elementum tristique turpis nibh fermentum. Molestie congue gravida at donec orci quisque velit urna nunc. Ac vitae        blandit arcu nisl gravida fringilla scelerisque. Proin porttitor sagittis mollis id nec. Cum velit.
                    </p>

                    <div id="review" class="flex hidden flex-col">

                        <div class="flex gap-4">
                            
                            <div class="w-11 h-11 mt-2px rounded-full bg-cover" style="background-image: url({{asset('img/pp.jpg')}})"></div>
                            
                            <div class="flex flex-col gap-9px">

                                <div class="flex">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.23912 3.14165C7.4786 2.4046 8.52133 2.40461 8.76081 3.14165L9.61646 5.77509C9.72356 6.10471 10.0307 6.32788 10.3773 6.32788H13.1463C13.9212 6.32788 14.2435 7.31957 13.6165 7.77509L11.3764 9.40265C11.096 9.60636 10.9786 9.96745 11.0857 10.2971L11.9414 12.9305C12.1809 13.6676 11.3373 14.2805 10.7103 13.8249L8.47019 12.1974C8.1898 11.9937 7.81012 11.9937 7.52973 12.1974L5.2896 13.8249C4.66263 14.2805 3.81904 13.6676 4.05853 12.9305L4.91418 10.2971C5.02128 9.96745 4.90395 9.60636 4.62356 9.40265L2.38343 7.77509C1.75646 7.31957 2.07868 6.32788 2.85366 6.32788H5.62262C5.9692 6.32788 6.27636 6.10471 6.38346 5.77509L7.23912 3.14165Z" fill="#FECE23"/>
                                    </svg>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.23912 3.14165C7.4786 2.4046 8.52133 2.40461 8.76081 3.14165L9.61646 5.77509C9.72356 6.10471 10.0307 6.32788 10.3773 6.32788H13.1463C13.9212 6.32788 14.2435 7.31957 13.6165 7.77509L11.3764 9.40265C11.096 9.60636 10.9786 9.96745 11.0857 10.2971L11.9414 12.9305C12.1809 13.6676 11.3373 14.2805 10.7103 13.8249L8.47019 12.1974C8.1898 11.9937 7.81012 11.9937 7.52973 12.1974L5.2896 13.8249C4.66263 14.2805 3.81904 13.6676 4.05853 12.9305L4.91418 10.2971C5.02128 9.96745 4.90395 9.60636 4.62356 9.40265L2.38343 7.77509C1.75646 7.31957 2.07868 6.32788 2.85366 6.32788H5.62262C5.9692 6.32788 6.27636 6.10471 6.38346 5.77509L7.23912 3.14165Z" fill="#FECE23"/>
                                    </svg>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.23912 3.14165C7.4786 2.4046 8.52133 2.40461 8.76081 3.14165L9.61646 5.77509C9.72356 6.10471 10.0307 6.32788 10.3773 6.32788H13.1463C13.9212 6.32788 14.2435 7.31957 13.6165 7.77509L11.3764 9.40265C11.096 9.60636 10.9786 9.96745 11.0857 10.2971L11.9414 12.9305C12.1809 13.6676 11.3373 14.2805 10.7103 13.8249L8.47019 12.1974C8.1898 11.9937 7.81012 11.9937 7.52973 12.1974L5.2896 13.8249C4.66263 14.2805 3.81904 13.6676 4.05853 12.9305L4.91418 10.2971C5.02128 9.96745 4.90395 9.60636 4.62356 9.40265L2.38343 7.77509C1.75646 7.31957 2.07868 6.32788 2.85366 6.32788H5.62262C5.9692 6.32788 6.27636 6.10471 6.38346 5.77509L7.23912 3.14165Z" fill="#FECE23"/>
                                    </svg>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.23912 3.14165C7.4786 2.4046 8.52133 2.40461 8.76081 3.14165L9.61646 5.77509C9.72356 6.10471 10.0307 6.32788 10.3773 6.32788H13.1463C13.9212 6.32788 14.2435 7.31957 13.6165 7.77509L11.3764 9.40265C11.096 9.60636 10.9786 9.96745 11.0857 10.2971L11.9414 12.9305C12.1809 13.6676 11.3373 14.2805 10.7103 13.8249L8.47019 12.1974C8.1898 11.9937 7.81012 11.9937 7.52973 12.1974L5.2896 13.8249C4.66263 14.2805 3.81904 13.6676 4.05853 12.9305L4.91418 10.2971C5.02128 9.96745 4.90395 9.60636 4.62356 9.40265L2.38343 7.77509C1.75646 7.31957 2.07868 6.32788 2.85366 6.32788H5.62262C5.9692 6.32788 6.27636 6.10471 6.38346 5.77509L7.23912 3.14165Z" fill="#FECE23"/>
                                    </svg>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.23912 3.14165C7.4786 2.4046 8.52133 2.40461 8.76081 3.14165L9.61646 5.77509C9.72356 6.10471 10.0307 6.32788 10.3773 6.32788H13.1463C13.9212 6.32788 14.2435 7.31957 13.6165 7.77509L11.3764 9.40265C11.096 9.60636 10.9786 9.96745 11.0857 10.2971L11.9414 12.9305C12.1809 13.6676 11.3373 14.2805 10.7103 13.8249L8.47019 12.1974C8.1898 11.9937 7.81012 11.9937 7.52973 12.1974L5.2896 13.8249C4.66263 14.2805 3.81904 13.6676 4.05853 12.9305L4.91418 10.2971C5.02128 9.96745 4.90395 9.60636 4.62356 9.40265L2.38343 7.77509C1.75646 7.31957 2.07868 6.32788 2.85366 6.32788H5.62262C5.9692 6.32788 6.27636 6.10471 6.38346 5.77509L7.23912 3.14165Z" fill="#FECE23"/>
                                    </svg>
                                </div>

                                <p class="text-sm font-medium text-gray-900 w-96">Mahal sih tapi enak.</p>

                                <p class="font-semibold text-xs text-blue-main">Luthfi Halimawan</p>
                                <p class="text-xs text-gray-500 -mt-6px">January 12, 2023</p>
    
                            </div>

                        </div>

                        <span class="w-1190px h-1px bg-gray-200 mt-9 mb-6"></span>

                        <div class="flex gap-4">
                            
                            <div class="w-11 h-11 mt-2px rounded-full bg-cover" style="background-image: url({{asset('img/pp.jpg')}})"></div>
                            
                            <div class="flex flex-col gap-9px">

                                <div class="flex">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.23912 3.14165C7.4786 2.4046 8.52133 2.40461 8.76081 3.14165L9.61646 5.77509C9.72356 6.10471 10.0307 6.32788 10.3773 6.32788H13.1463C13.9212 6.32788 14.2435 7.31957 13.6165 7.77509L11.3764 9.40265C11.096 9.60636 10.9786 9.96745 11.0857 10.2971L11.9414 12.9305C12.1809 13.6676 11.3373 14.2805 10.7103 13.8249L8.47019 12.1974C8.1898 11.9937 7.81012 11.9937 7.52973 12.1974L5.2896 13.8249C4.66263 14.2805 3.81904 13.6676 4.05853 12.9305L4.91418 10.2971C5.02128 9.96745 4.90395 9.60636 4.62356 9.40265L2.38343 7.77509C1.75646 7.31957 2.07868 6.32788 2.85366 6.32788H5.62262C5.9692 6.32788 6.27636 6.10471 6.38346 5.77509L7.23912 3.14165Z" fill="#FECE23"/>
                                    </svg>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.23912 3.14165C7.4786 2.4046 8.52133 2.40461 8.76081 3.14165L9.61646 5.77509C9.72356 6.10471 10.0307 6.32788 10.3773 6.32788H13.1463C13.9212 6.32788 14.2435 7.31957 13.6165 7.77509L11.3764 9.40265C11.096 9.60636 10.9786 9.96745 11.0857 10.2971L11.9414 12.9305C12.1809 13.6676 11.3373 14.2805 10.7103 13.8249L8.47019 12.1974C8.1898 11.9937 7.81012 11.9937 7.52973 12.1974L5.2896 13.8249C4.66263 14.2805 3.81904 13.6676 4.05853 12.9305L4.91418 10.2971C5.02128 9.96745 4.90395 9.60636 4.62356 9.40265L2.38343 7.77509C1.75646 7.31957 2.07868 6.32788 2.85366 6.32788H5.62262C5.9692 6.32788 6.27636 6.10471 6.38346 5.77509L7.23912 3.14165Z" fill="#FECE23"/>
                                    </svg>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.23912 3.14165C7.4786 2.4046 8.52133 2.40461 8.76081 3.14165L9.61646 5.77509C9.72356 6.10471 10.0307 6.32788 10.3773 6.32788H13.1463C13.9212 6.32788 14.2435 7.31957 13.6165 7.77509L11.3764 9.40265C11.096 9.60636 10.9786 9.96745 11.0857 10.2971L11.9414 12.9305C12.1809 13.6676 11.3373 14.2805 10.7103 13.8249L8.47019 12.1974C8.1898 11.9937 7.81012 11.9937 7.52973 12.1974L5.2896 13.8249C4.66263 14.2805 3.81904 13.6676 4.05853 12.9305L4.91418 10.2971C5.02128 9.96745 4.90395 9.60636 4.62356 9.40265L2.38343 7.77509C1.75646 7.31957 2.07868 6.32788 2.85366 6.32788H5.62262C5.9692 6.32788 6.27636 6.10471 6.38346 5.77509L7.23912 3.14165Z" fill="#FECE23"/>
                                    </svg>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.23912 3.14165C7.4786 2.4046 8.52133 2.40461 8.76081 3.14165L9.61646 5.77509C9.72356 6.10471 10.0307 6.32788 10.3773 6.32788H13.1463C13.9212 6.32788 14.2435 7.31957 13.6165 7.77509L11.3764 9.40265C11.096 9.60636 10.9786 9.96745 11.0857 10.2971L11.9414 12.9305C12.1809 13.6676 11.3373 14.2805 10.7103 13.8249L8.47019 12.1974C8.1898 11.9937 7.81012 11.9937 7.52973 12.1974L5.2896 13.8249C4.66263 14.2805 3.81904 13.6676 4.05853 12.9305L4.91418 10.2971C5.02128 9.96745 4.90395 9.60636 4.62356 9.40265L2.38343 7.77509C1.75646 7.31957 2.07868 6.32788 2.85366 6.32788H5.62262C5.9692 6.32788 6.27636 6.10471 6.38346 5.77509L7.23912 3.14165Z" fill="#FECE23"/>
                                    </svg>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.23912 3.14165C7.4786 2.4046 8.52133 2.40461 8.76081 3.14165L9.61646 5.77509C9.72356 6.10471 10.0307 6.32788 10.3773 6.32788H13.1463C13.9212 6.32788 14.2435 7.31957 13.6165 7.77509L11.3764 9.40265C11.096 9.60636 10.9786 9.96745 11.0857 10.2971L11.9414 12.9305C12.1809 13.6676 11.3373 14.2805 10.7103 13.8249L8.47019 12.1974C8.1898 11.9937 7.81012 11.9937 7.52973 12.1974L5.2896 13.8249C4.66263 14.2805 3.81904 13.6676 4.05853 12.9305L4.91418 10.2971C5.02128 9.96745 4.90395 9.60636 4.62356 9.40265L2.38343 7.77509C1.75646 7.31957 2.07868 6.32788 2.85366 6.32788H5.62262C5.9692 6.32788 6.27636 6.10471 6.38346 5.77509L7.23912 3.14165Z" fill="#FECE23"/>
                                    </svg>
                                </div>

                                <p class="text-sm font-medium text-gray-900 w-96">Mahal sih tapi enak.</p>

                                <p class="font-semibold text-xs text-blue-main">Luthfi Halimawan</p>
                                <p class="text-xs text-gray-500 -mt-6px">January 12, 2023</p>
    
                            </div>

                        </div>

                        <span class="w-1190px h-1px bg-gray-200 mt-9 mb-6"></span>

                        <div class="flex gap-4">
                            
                            <div class="w-11 h-11 mt-2px rounded-full bg-cover" style="background-image: url({{asset('img/pp.jpg')}})"></div>
                            
                            <div class="flex flex-col gap-9px">

                                <div class="flex">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.23912 3.14165C7.4786 2.4046 8.52133 2.40461 8.76081 3.14165L9.61646 5.77509C9.72356 6.10471 10.0307 6.32788 10.3773 6.32788H13.1463C13.9212 6.32788 14.2435 7.31957 13.6165 7.77509L11.3764 9.40265C11.096 9.60636 10.9786 9.96745 11.0857 10.2971L11.9414 12.9305C12.1809 13.6676 11.3373 14.2805 10.7103 13.8249L8.47019 12.1974C8.1898 11.9937 7.81012 11.9937 7.52973 12.1974L5.2896 13.8249C4.66263 14.2805 3.81904 13.6676 4.05853 12.9305L4.91418 10.2971C5.02128 9.96745 4.90395 9.60636 4.62356 9.40265L2.38343 7.77509C1.75646 7.31957 2.07868 6.32788 2.85366 6.32788H5.62262C5.9692 6.32788 6.27636 6.10471 6.38346 5.77509L7.23912 3.14165Z" fill="#FECE23"/>
                                    </svg>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.23912 3.14165C7.4786 2.4046 8.52133 2.40461 8.76081 3.14165L9.61646 5.77509C9.72356 6.10471 10.0307 6.32788 10.3773 6.32788H13.1463C13.9212 6.32788 14.2435 7.31957 13.6165 7.77509L11.3764 9.40265C11.096 9.60636 10.9786 9.96745 11.0857 10.2971L11.9414 12.9305C12.1809 13.6676 11.3373 14.2805 10.7103 13.8249L8.47019 12.1974C8.1898 11.9937 7.81012 11.9937 7.52973 12.1974L5.2896 13.8249C4.66263 14.2805 3.81904 13.6676 4.05853 12.9305L4.91418 10.2971C5.02128 9.96745 4.90395 9.60636 4.62356 9.40265L2.38343 7.77509C1.75646 7.31957 2.07868 6.32788 2.85366 6.32788H5.62262C5.9692 6.32788 6.27636 6.10471 6.38346 5.77509L7.23912 3.14165Z" fill="#FECE23"/>
                                    </svg>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.23912 3.14165C7.4786 2.4046 8.52133 2.40461 8.76081 3.14165L9.61646 5.77509C9.72356 6.10471 10.0307 6.32788 10.3773 6.32788H13.1463C13.9212 6.32788 14.2435 7.31957 13.6165 7.77509L11.3764 9.40265C11.096 9.60636 10.9786 9.96745 11.0857 10.2971L11.9414 12.9305C12.1809 13.6676 11.3373 14.2805 10.7103 13.8249L8.47019 12.1974C8.1898 11.9937 7.81012 11.9937 7.52973 12.1974L5.2896 13.8249C4.66263 14.2805 3.81904 13.6676 4.05853 12.9305L4.91418 10.2971C5.02128 9.96745 4.90395 9.60636 4.62356 9.40265L2.38343 7.77509C1.75646 7.31957 2.07868 6.32788 2.85366 6.32788H5.62262C5.9692 6.32788 6.27636 6.10471 6.38346 5.77509L7.23912 3.14165Z" fill="#FECE23"/>
                                    </svg>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.23912 3.14165C7.4786 2.4046 8.52133 2.40461 8.76081 3.14165L9.61646 5.77509C9.72356 6.10471 10.0307 6.32788 10.3773 6.32788H13.1463C13.9212 6.32788 14.2435 7.31957 13.6165 7.77509L11.3764 9.40265C11.096 9.60636 10.9786 9.96745 11.0857 10.2971L11.9414 12.9305C12.1809 13.6676 11.3373 14.2805 10.7103 13.8249L8.47019 12.1974C8.1898 11.9937 7.81012 11.9937 7.52973 12.1974L5.2896 13.8249C4.66263 14.2805 3.81904 13.6676 4.05853 12.9305L4.91418 10.2971C5.02128 9.96745 4.90395 9.60636 4.62356 9.40265L2.38343 7.77509C1.75646 7.31957 2.07868 6.32788 2.85366 6.32788H5.62262C5.9692 6.32788 6.27636 6.10471 6.38346 5.77509L7.23912 3.14165Z" fill="#FECE23"/>
                                    </svg>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.23912 3.14165C7.4786 2.4046 8.52133 2.40461 8.76081 3.14165L9.61646 5.77509C9.72356 6.10471 10.0307 6.32788 10.3773 6.32788H13.1463C13.9212 6.32788 14.2435 7.31957 13.6165 7.77509L11.3764 9.40265C11.096 9.60636 10.9786 9.96745 11.0857 10.2971L11.9414 12.9305C12.1809 13.6676 11.3373 14.2805 10.7103 13.8249L8.47019 12.1974C8.1898 11.9937 7.81012 11.9937 7.52973 12.1974L5.2896 13.8249C4.66263 14.2805 3.81904 13.6676 4.05853 12.9305L4.91418 10.2971C5.02128 9.96745 4.90395 9.60636 4.62356 9.40265L2.38343 7.77509C1.75646 7.31957 2.07868 6.32788 2.85366 6.32788H5.62262C5.9692 6.32788 6.27636 6.10471 6.38346 5.77509L7.23912 3.14165Z" fill="#FECE23"/>
                                    </svg>
                                </div>

                                <p class="text-sm font-medium text-gray-900 w-96">Mahal sih tapi enak.</p>

                                <p class="font-semibold text-xs text-blue-main">Luthfi Halimawan</p>
                                <p class="text-xs text-gray-500 -mt-6px">January 12, 2023</p>
    
                            </div>

                        </div>

                        <span class="w-1190px h-1px bg-gray-200 mt-9 mb-6"></span>

                        <button class="uppercase hover:text-black-main-200 ml-4 transition-all ease duration-300 group/load flex gap-2 font-bold text-xs text-gray-400 opacity-80">
                            <svg width="14" height="14" viewBox="0 0 14 14" class="stroke transition-all ease duration-300 stroke-gray-500 group-hover/load:stroke-black-main-200" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.5">
                                <path d="M2.33325 2.33331V5.24998H2.67247M11.6305 6.41665C11.3434 4.11463 9.3797 2.33331 6.99992 2.33331C5.04145 2.33331 3.36476 3.53975 2.67247 5.24998M2.67247 5.24998H5.24992M11.6666 11.6666V8.74998H11.3274M11.3274 8.74998C10.6351 10.4602 8.95839 11.6666 6.99992 11.6666C4.62014 11.6666 2.65641 9.88533 2.36936 7.58331M11.3274 8.74998H8.74992" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                            </svg>
                            Load more reviews    
                        </button>

                    </div>


                    <div class="h-10 w-full bg-white"></div>

                </div>

            </div>

        </div>

    </div>
    
@endsection

@section('customjs')
<script>
    
    window.onload = function() {

        const descriptbtn = document.getElementById('descbtn');
        const revbtn = document.getElementById('revbtn');
        const descript = document.getElementById('description');
        const review = document.getElementById('review');
        
    }
    
    function desc(){
        descript.classList.add('hidden');
        review.classList.remove('hidden');
        descriptbtn.classList.add('grayscale');
        descriptbtn.classList.remove('border-b-2');
        revbtn.classList.remove('grayscale');
        revbtn.classList.add('border-b-2');
        revbtn.classList.remove('hover:border-b');
        descriptbtn.classList.add('hover:border-b');
    }

    function rev(){
        descript.classList.remove('hidden');
        review.classList.add('hidden');
        descriptbtn.classList.remove('grayscale');
        descriptbtn.classList.add('border-b-2');
        revbtn.classList.add('grayscale');
        revbtn.classList.remove('border-b-2');
        revbtn.classList.add('hover:border-b');
        descriptbtn.classList.remove('hover:border-b');
    }
</script>
@endsection
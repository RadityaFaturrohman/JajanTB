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
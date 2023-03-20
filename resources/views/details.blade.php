@extends('main')

@section('content')

    <div class="w-full h-screen p-10 pb-96 px-50px font-jakarta">

        <div class="flex flex-col">

            <!-- Back button -->
            <a href="/"><button class="flex items-center text-lg font-medium group/back hover:font-semibold text-light-grey-main">
                <svg width="20" height="20" class="group-hover/back:-mr-1px transition-all ease duration-200" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.36465 19.3417L0.64173 11.6417C0.550063 11.55 0.485286 11.4507 0.447397 11.3437C0.408897 11.2368 0.389647 11.1222 0.389647 11C0.389647 10.8778 0.408897 10.7632 0.447397 10.6562C0.485286 10.5493 0.550064 10.45 0.64173 10.3583L8.36465 2.63541C8.57854 2.42152 8.8459 2.31458 9.16673 2.31458C9.48757 2.31458 9.76256 2.42916 9.99173 2.65833C10.2209 2.88749 10.3355 3.15485 10.3355 3.46041C10.3355 3.76597 10.2209 4.03333 9.99173 4.26249L3.25423 11L9.99173 17.7375C10.2056 17.9514 10.3126 18.2148 10.3126 18.5277C10.3126 18.8412 10.198 19.1125 9.96881 19.3417C9.73965 19.5708 9.47228 19.6854 9.16673 19.6854C8.86117 19.6854 8.59381 19.5708 8.36465 19.3417Z" fill="#6F6F6F"/>
                </svg>
                Back
            </button></a>

            <div class="flex justify-start items-start px-6 mt-10 gap-16">

                <!-- Product image preview -->
                @include('component.details.detail-preview')

                <div class="w-550px h-530px bg-light-blue-main flex justify-center items-center rounded-lg" style="filter: drop-shadow(0px 1px 2px rgba(0, 0, 0, 0.25));">
                    <div class="w-9/12 h-500px bg-cover" style="background-image: url({{asset('img/lays.png')}})"></div>
                </div>

                <!-- Product Info -->
               @include('component.details.detail-info')

            </div>

            <!-- Product Addons -->
            @include('component.details.detail-addons')

        </div>

    </div>
    
@endsection

@section('customjs')
<script>
    

        const descriptbtn = document.querySelector('#descbtn');
        const revbtn = document.querySelector('#revbtn');
        const descript = document.querySelector('#description');
        const review = document.querySelector('#review');
        
    
    function desc(){
        descript.classList.remove('hidden');
        review.classList.add('hidden');
        descriptbtn.classList.remove('grayscale');
        descriptbtn.classList.add('border-b-2');
        revbtn.classList.add('grayscale');
        revbtn.classList.remove('border-b-2');
        revbtn.classList.add('hover:border-b');
        descriptbtn.classList.remove('hover:border-b');
    }

    function rev(){
        descript.classList.add('hidden');
        review.classList.remove('hidden');
        descriptbtn.classList.add('grayscale');
        descriptbtn.classList.remove('border-b-2');
        revbtn.classList.remove('grayscale');
        revbtn.classList.add('border-b-2');
        revbtn.classList.remove('hover:border-b');
        descriptbtn.classList.add('hover:border-b');
    }
</script>
@endsection
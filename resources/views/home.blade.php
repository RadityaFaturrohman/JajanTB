@extends('main')

@section('content')
    
    <!-- Container Start -->
    <div class="w-full h-screen">
        
        <!-- Navbar -->
        @include('component.navbar')

        <!-- Hero -->
        @include('component.homes.hero')

        <!-- Category -->
        @include('component.homes.category')

        <!-- Product -->
        @include('component.homes.product')

        @include('component.footer')

    </div>
    <!-- Container End -->

@endsection
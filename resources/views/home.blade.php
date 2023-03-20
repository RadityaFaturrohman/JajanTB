@extends('main')

@section('content')
    
    <!-- Container Start -->
    <div class="w-full h-screen">
        
        <!-- Navbar -->
        @include('component.navbar')

        <!-- Hero -->
        @include('component.hero')

        <!-- Category -->
        @include('component.category')

        <!-- Product -->
        @include('component.product')

        @include('component.footer')

    </div>
    <!-- Container End -->

@endsection
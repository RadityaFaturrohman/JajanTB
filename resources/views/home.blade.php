<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JajanTB</title>

    <!-- Tailwindcss -->
    @vite('resources/css/app.css')

    <!-- Native Css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Heebo Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Poppins Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
    
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

    <script src="{{asset('js/script.js')}}"></script>

</body>
</html>
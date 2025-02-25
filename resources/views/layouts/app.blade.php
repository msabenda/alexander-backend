<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Xander Creative - A creative design company offering a variety of services. Transforming ideas into reality through exceptional designs.">

    <!-- Favicon Image -->
    <link rel="icon" href="{{ asset('gold-logo.ico') }}" type="image/x-icon">

    <!-- External CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <!-- Vite CSS & JS -->
    @vite('resources/css/app.css') <!-- Vite css build -->

    <title>Xander Creative</title>
  </head>
  
  <body>  
   

    <!-- Preloader -->
    <div id="preloader">
        <div class="loader">
            <img src="{{ asset('images/gold-logo.png') }}" alt="Xander Creative Logo" class="preloader-logo">
            <!-- Loading Spinner -->
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Main Content -->
    @yield('content')

  
    @vite('resources/js/app.js') <!-- Vite for build js files -->
    <!-- Footer Section Component -->
    <x-footer-section />

  </body>
</html>

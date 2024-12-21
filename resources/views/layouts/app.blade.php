<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Xander Creative - A creative design company offering a variety of services. Transforming ideas into reality through exceptional designs.">
    <meta name="keywords" content="Creative Design, Xander Creative, Graphic Design, Web Development, Branding"> 
    <meta name="author" content="Xander Creative">
    <meta name="robots" content="index, follow">

     <!-- Favicon Image -->
     <link rel="shortcut icon" href="{{ asset('images/gold-logo.ico') }}?v=1">

    
    <!-- External CSS Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    
    @vite('resources/css/app.css') <!-- Vite css build -->

    <title>Xander Creative</title>
    </head>
  <body>  


    <!-- Preloader -->
    <div id="preloader">
        <div class="loader">
            <img src="{{ asset('images/gold-logo.png') }}" alt="" class="preloader-logo">

              <!-- Loading Symbol -->
              <div class="spinner">
              </div>
          
            
        </div>
    </div>

  <!-- Main content section -->
  @yield('content')


  <!-- --------------------Top Up button ----------------- -->
  <a href="#top" class="top-btn" aria-label="back to top" data-back-top-btn>
  <strong id="scroll-percentage">0%</strong>
</a>


<!-- Footer Section component -->
<x-footer-section />

<!-- --------Java Script codes used ----------- -->
@vite('resources/js/app.js') <!-- Vite for build js files -->

<!-- Additional Scripts used -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/scrollreveal"></script>

<!-- <script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script> -->
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js" crossorigin="anonymous"></script>

  <!-- Load particles.js library from CDN -->
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>



  </body>
</html>

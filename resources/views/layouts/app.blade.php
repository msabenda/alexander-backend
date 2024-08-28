<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Xander Creative - A creative design company offering a variety of services." /> <!-- SEO website -->
    
    <!-- External CSS Links -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.2.0/magnific-popup.min.css">k
    
    
    @vite('resources/css/app.css') <!-- Vite css build -->

    <!-- Favicon Image -->
    <link rel="shortcut icon" href="{{ asset('images/gold-logo.jpg') }}" type="image/x-icon">
    <title>Xander Creative</title>
    </head>
  <body>  

  <!-- Main content section -->
  @yield('content')


  <!-- --------------------Top Up button ----------------- -->
<a href="#top" class="top-btn" aria-label="back to top" data-back-top-btn>
  <strong><i class="fa-solid fa-arrow-up"></i>Up</strong>
</a>


<!-- Footer Section component -->
<x-footer-section />

<!-- --------Java Script codes used ----------- -->
@vite('resources/js/app.js') <!-- Vite for build js files -->

<!-- Additional Scripts used -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.2.0/jquery.magnific-popup.min.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script>
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script> <!-- Auto typing script -->
<script src="https://kit.fontawesome.com/8a7030f41c.js" crossorigin="anonymous"></script> <!-- Font awesome script --> 

  </body>
</html>

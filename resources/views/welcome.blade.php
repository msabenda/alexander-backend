
<!-- Extends layout from app.blade.php -->
@extends('layouts.app')


<!-- Display the injected content -->
@section('content')

<!-- Home section component -->
 <x-home-section />

 <!-- About section component -->
 <x-about-section />
 
 <!-- Mission section component -->
<x-mission-section /> 

<!-- Services section component -->
<x-services-section />

<!-- Professional skills section component -->
<x-professional-skills />

<!-- Blog section component -->
<x-blog-section />

<!-- Pictures Project Section component -->
<x-section-pictures />

<!-- Videos Project Section component -->
<x-section-videos />

<!-- Testimonials Section component -->
<x-testimonials-section />

<!-- Contact Section component -->
<x-contact-section />


<!-- // If there another sections -->

@endsection

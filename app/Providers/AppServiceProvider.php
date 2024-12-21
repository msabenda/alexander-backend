<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::component('home-section', \App\View\Components\HomeSection::class);
        Blade::component('about-section', \App\View\Components\AboutSection::class);
        Blade::component('eduexp-section', \App\View\Components\eduexp::class);
        Blade::component('mission-section', \App\View\Components\MissionSection::class);
        Blade::component('services-section', \App\View\Components\ServicesSection::class);
        Blade::component('professional-skills', \App\View\Components\ProfessionalSkills::class);
        Blade::component('blog-section', \App\View\Components\BlogSection::class);
        Blade::component('section-pictures', \App\View\Components\SectionPictures::class);
        Blade::component('section-videos', \App\View\Components\SectionVideos::class);
        Blade::component('testimonials-section', \App\View\Components\TestimonialsSection::class);  
        Blade::component('contact-section', \App\View\Components\ContactSection::class);
        Blade::component('footer-section', \App\View\Components\FooterSection::class);
        Blade::component('clients-section', \App\View\Components\ClientsSection::class);
    }
}

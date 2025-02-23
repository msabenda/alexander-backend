@php
    $about = \App\Models\AboutSection::first();
@endphp

<section id="about">
    <h2 class="section-heading">ABOUT <span class="me">ME</span></h2>
    <div class="row">
        <div class="about-left">
            <h2 class="section__header">{{ $about->title ?? 'CRAFTING YOUR VISION INTO REALITY' }}</h2>
            <p class="section__description">
                {{ $about->description ?? "I'm Alexander N. Matovelo, a creative freelancer passionate about graphic design, digital marketing, and data analysis. I blend artistry with strategy to bring your ideas to life, ensuring every project is visually captivating and results-driven. With a commitment to excellence, I'm here to help your business stand out and succeed. Let's create something amazing together!" }}
            </p>

            <blockquote class="quote">
                <p>{{ $about->quote ?? 'Design is the art of making the invisible visible, the complex simple, and your vision unforgettable.' }}</p>
            </blockquote>
            <p>{{ $about->author ?? 'Alexander N. ' }} <cite>{{ $about->author_last_name ?? 'Matovelo' }}</cite></p>
        </div>

        <div class="about-right">
            @if ($about && $about->image && file_exists(public_path('storage/' . $about->image)))
                <img src="{{ asset('storage/' . $about->image) }}" alt="about-image" class="alex-img scroll-reveal from-right">
            @else
                <img src="{{ url('images/black-background.png') }}" alt="alex-image" class="alex-img scroll-reveal from-right">
            @endif
        </div>
    </div> 
    <hr id="line">
</section>

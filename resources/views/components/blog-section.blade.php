
@php
    $blogs = \App\Models\BlogSection::all(); // Fetch all blog sections
@endphp

<section class="blog-section">
    <h2 class="section-heading">My <span class="highlight">BLOG</span></h2>
    <div class="blog-container">
        @foreach ($blogs as $blog)
            <div class="blog-item">
                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                <div class="blog-overlay">
                    <h3>{{ $blog->title }}</h3>
                    <p>{{ $blog->description }}</p>
                    <a href="#" class="read-more">READ MORE</a>
                </div>
            </div>
        @endforeach
    </div>
</section>

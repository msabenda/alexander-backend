@php
    $pictures = \App\Models\PictureSection::all(); // Use 'all()' to get all pictures
@endphp

<!-- --------Pictures-------- -->
<section class="portfolio">
    <h2 class="section-heading">My <span class="picha">PICTURES</span></h2>
    <div class="gallery">
        @foreach($pictures as $picture) <!-- Loop through each picture -->
        <div class="project {{ $picture->orientation }}"> <!-- Assuming 'landscape' or 'portrait' is stored in the database -->
            <img 
              src="{{ url('storage/' . $picture->image) }}"
              alt="{{ $picture->title }}"
              class="lazyload"
              data-src="{{ url('storage/' . $picture->image) }}" 
              loading="lazy"/>
            <div class="overlay">
                <div class="info">
                    <h2>{{ $picture->title }}</h2>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

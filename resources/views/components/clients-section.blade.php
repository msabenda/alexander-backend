@php
    $clientSection = \App\Models\ClientSection::first(); // Fetch the client section for title and images
@endphp

<section class="logos">
  <h2 class="section-heading">
     <span class="myClient">My </span><span class="clieent">CLIENTS</span>
  </h2>
  <div class="logos-container">
    <div class="logos-slide">
      @foreach($clientSection->images as $logo)
        <img src="{{ asset('storage/' . $logo) }}" loading="lazy" alt="Client Logo" />
      @endforeach
    </div>
  </div>
</section>

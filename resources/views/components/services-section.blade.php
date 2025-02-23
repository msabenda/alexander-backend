@php
    $services = \App\Models\ServiceSection::all();
@endphp

<!-- --------------------------------------------------------MY SERVICES------------------------------------------>
<section class="services-section" id="servi">
  <h2 class="section-heading">My <span class="sevi">SERVICES</span></h2>

  @foreach($services as $service)
    <div class="service-container">
      <div class="service-image">
        <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}">
      </div>
      <div class="service-details">
        <h3>{{ $service->title }}</h3>
        <p>{{ $service->description }}</p>
      </div>
    </div>
  @endforeach
</section> 
<!-- Services ends here -->

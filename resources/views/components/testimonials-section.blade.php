<!-- resources/views/components/customer-feedback.blade.php -->
<section class="testi-container" id="testimonial">
  <h2 class="section-heading">CUSTOMER FEEDBACK</h2>
  
  <div class="testimonial mySwiper">
    <div class="testi-content swiper-wrapper">
      <!-- Testimonial Slide 1 -->
      <div class="slide swiper-slide">
        <div class="testi-item">
          <img src="{{ url('images/customer-1.jpg') }}" alt="Msambili Ndaga" class="image">
          <div class="feedback-container">
            <p class="feedback">"Xander Creative is one of the best design companies. Honestly, I appreciate their services. Get in touch with them and you will enjoy their services."</p>
          </div>
          <div class="details">
            <span class="name">Msambili Ndaga</span>
            <span class="job">Network Engineer</span>
          </div>
        </div>
      </div>

      <!-- Testimonial Slide 2 -->
      <div class="slide swiper-slide">
        <div class="testi-item">
          <img src="{{ url('images/customer-2.jpg') }}" alt="Donald Michael" class="image">
          <div class="feedback-container">
            <p class="feedback">"I had a wonderful experience working with Xander Creative. The photographer was very professional and made me feel comfortable in front of the camera. The logo design was also top-notch and exceeded my expectations."</p>
          </div>
          <div class="details">
            <span class="name">Donald Michael</span>
            <span class="job">Programmer</span>
          </div>
        </div>
      </div>

      <!-- Testimonial Slide 3 -->
      <div class="slide swiper-slide">
        <div class="testi-item">
          <img src="{{ url('images/customer-3.jpg') }}" alt="Emmy Michael" class="image">
          <div class="feedback-container">
            <p class="feedback">"Artful Images and Branding went above and beyond to deliver exceptional service. The photographer was incredibly talented and captured the perfect shots."</p>
          </div>
          <div class="details">
            <span class="name">Emmy Michael</span>
            <span class="job">Business Woman</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Navigation Buttons -->
    <div class="swiper-button-next nav-button"></div>
    <div class="swiper-button-prev nav-button"></div>
    <div class="swiper-pagination"></div>
  </div>
</section>

<section id="testimonial" class="testimoni">
  <h2 class="section-heading">Customer <span class="clieent">FEEDBACK</span></h2>
  <div class="container">
    <div class="testimonial mySwiper">
      <div class="testi-content swiper-wrapper">
        
        <!-- Feedback 1 -->
        <div class="slide swiper-slide">
          <img src="{{ url('images/x.png') }}" alt="client1" class="image">
          <p>
            We had a wonderful experience working with Xander Creative. He is so talented, hard working person, he turned our ideas into reality by designing top-notch graphics that exceeded our expectations.
          </p>
          <i class="bx bxs-quote-alt-left quote-icon"></i>
          <div class="details">
            <span class="name">Msambili Ndaga</span>
            <span class="job">Former Chairman of USCF Mlimani</span>
          </div>
        </div>

        <!-- Feedback 2 -->
        <div class="slide swiper-slide">
          <img src="{{ url('images/xi.png') }}" alt="client2" class="image">
          <p>
            The creativity and professionalism shown by your team have truly set a new standard for digital marketing. From concept to execution, every detail was aligned with our goals and vision. You've helped us elevate our online presence and we couldn't be happier!
          </p>
          <i class="bx bxs-quote-alt-left quote-icon"></i>
          <div class="details">
            <span class="name">Ms Suzzane</span>
            <span class="job">Chairperson of YUNA Tanzania</span>
          </div>
        </div>

        <!-- Feedback 3 -->
        <div class="slide swiper-slide">
          <img src="{{ url('images/ii.png') }}" alt="client3" class="image">
          <p>
            Working with your company was a game-changer for us. The design concepts you presented were innovative and beautifully aligned with our mission. The digital marketing strategies have strengthened our community engagement tremendously.
          </p>
          <i class="bx bxs-quote-alt-left quote-icon"></i>
          <div class="details">
            <span class="name">Mr Sheini</span>
            <span class="job">Former President of DUEA</span>
          </div>
        </div>

        <!-- Feedback 4 -->
        <div class="slide swiper-slide">
          <img src="{{ url('images/iii.png') }}" alt="client4" class="image">
          <p>
            Your creativity and deep understanding of brand messaging brought Jigundue Platform’s vision to life in ways we never imagined. The visuals and marketing support exceeded expectations, driving impressive engagement and growth.
          </p>
          <i class="bx bxs-quote-alt-left quote-icon"></i>
          <div class="details">
            <span class="name">Ms. Jacquline,</span>
            <span class="job">Founder of Jigundue Platform</span>
          </div>
        </div>

        <!-- Feedback 5 -->
        <div class="slide swiper-slide">
          <img src="{{ url('images/iv-black.png') }}" alt="client5" class="image">
          <p>
            The designs you provided truly capture the essence of our ministry’s message. Thanks to your dedicated team, we have a strong and impactful online presence that resonates with our followers. I’m grateful for the collaboration!
          </p>
          <i class="bx bxs-quote-alt-left quote-icon"></i>
          <div class="details">
            <span class="name">Mwl. Jackson</span>
            <span class="job">Founder of Mjuemungu Ministry</span>
          </div>
        </div>

        <!-- Feedback 6 -->
        <div class="slide swiper-slide">
          <img src="{{ url('images/vi.png') }}" alt="client6" class="image">
          <p>
            Your digital marketing and graphic design expertise has been vital in bringing MY DOCTOR to the forefront. The visuals are engaging and clear, and the marketing strategy has amplified our reach significantly. A fantastic experience!
          </p>
          <i class="bx bxs-quote-alt-left quote-icon"></i>
          <div class="details">
            <span class="name">Mr. William</span>
            <span class="job">Founder of MY DOCTOR</span>
          </div>
        </div>

      </div>
      
      <!-- Swiper Navigation Buttons -->
      <div class="swiper-button-prev nav-btn">&#10094;</div>
      <div class="swiper-button-next nav-btn">&#10095;</div>
    </div>
  </div>
</section>

<!-- Swiper JS and CSS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
  const swiper = new Swiper('.mySwiper', {
    loop: true, // Infinite loop
    autoplay: {
      delay: 3000, // Time between slides (3 seconds)
      disableOnInteraction: false, // Continue autoplay after user interaction
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
</script>

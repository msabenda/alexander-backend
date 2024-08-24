<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    @vite('resources/css/app.css') <!-- Vite css build -->
    <link rel="shortcut icon" href="{{ asset('images/gold-logo.jpg') }}" type="image/x-icon">
    <title>Xander Creative</title>
    </head>
  <body>  
    <!-- -------------------------------------------HEADING SECTION PART-------------------------------------- -->
    <header class="header" id="home">
      <nav class="nav-bar">
        <div class="nav__header">
          <div class="nav__logo">
            <a href="#">
              <img src="{{ url('/images/gold-logo.png') }}" alt="logo" />
            </a>
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <i class="fa-solid fa-bars"></i>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
          <li><a href="#home" id="home-nav">HOME</a></li>
          <li><a href="#about" id="about-nav">ABOUT</a></li>
          <li><a href="#servi" id="service-nav">SERVICES</a></li>
          <li class="nav__logo">
            <a href="#">
              <img src="{{ url('images/gold-logo.png') }}" alt="logo" />
            </a>
          </li>
          <li><a href="#blog" id="blog-nav">BLOG</a></li>
          <li><a href="#testimonial" id="testimonials-nav">TESTIMONIALS</a></li>
          <li><a href="#contact" id="contact-nav">CONTACT</a></li>
        </ul>
      </nav>
      <div class="header-text">
        <h1>Hi, Welcome to Xander Creative</h1>
      </div> 

      <div class="typing">
        <strong><span style="color: rgb(255,215,0);"  class="auto-type">Expert Graphic Design, Digital Marketing, Motion Graphics</span></strong>
      </div>
      
      <div class="social-media">
        <a href="https://web.facebook.com/" target="_blank" class="facebook-icon"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://twitter.com/" target="_blank" class="twitter-icon"><i class="fa-brands fa-x-twitter"></i></a>
        <a href="https://www.instagram.com/" target="_blank" class="instagram-icon"><i class="fa-brands fa-square-instagram"></i></a>
        <a href="https://www.whatsapp.com/" target="_blank" class="whatsapp-icon"><i class="fa-brands fa-square-whatsapp" target="_blank"></i></a>
        <a href="https://www.linkedin.com/" target="_blank" class="linkedin-icon"><i class="fa-brands fa-linkedin"></i></a>
        <a href="https://www.dribbble.com/" target="_blank" class="dribbble-icon"><i class="fab fa-dribbble"></i></a>
        <a href="https://www.behance.com/" target="_blank" class="behance-icon"><i class="fab fa-behance"></i></a>
      </div>

    </header> <!-- Header ends here-->
    <!-- -------------------------------------ABOUT SECTION----------------------------------------- -->
    <section id="about">
        <h2 class="section-heading">ABOUT ME</h2>
        <div class="row">
      <div class="about-left">
        <h2 class="section__header">TRANSFORMING YOUR IDEAS INTO STUNNING VISUALS</h2>
        <p class="section__description">
          At Xander company, we specialize in freezing those fleeting moments in time
          that hold immense significance for you. With our passion for photography
          and keen eye for detail, we transform ordinary moments into
          extraordinary memories.
        </p>
  
        <blockquote cite="https://www.huxley.net/bnw/four.html" class="quote">
          <p> Photography is a way of feeling, of touching, of loving. What you have caught on film is captured forever… It remembers little things, long after you have forgotten everything</p>
        </blockquote>
        <p>Alexander, <cite>Matovelo</cite></p>
      </div>
  
      <div class="about-right">
        <img src="{{ url('images/black-logo.png') }}" alt="alex-image" class="alex-img scroll-reveal from-right">
      </div>

        </div> <!-- About ends here -->
<!-- ---------------------------------------------EDUCATION AND EXPERIENCE-------------------------------------- -->
<hr id="line">
  <div class="row-bigger">

    <!-- Left side div for education -->
    <div class="education">
      <h3 class="title">Education</h3>
        <div class="timeline-box">
          <div class="timeline">

            <div class="timeline-item">
              <div class="cirlce-dot">
                <h3 class="timeline-date">
                  <i class="fa-regular fa-calendar-days"></i> 2020 - 2023
                </h3>
                <h4 class="timeline-title">Bachelor of Humanity<i class="fa-solid fa-graduation-cap"></i></h4>
                <p class="timeline-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique quibusdam odit distinctio consequuntur maxime corporis ab praesentium tempora at assumenda expedita, officia veniam eos tempore. Consequuntur quaerat nisi consectetur perspiciatis!</p>
              </div>    

            <div class="timeline-item">
              <div class="cirlce-dot">
                <h3 class="timeline-date">
                  <i class="fa-regular fa-calendar-days"></i> 2020 - 2023
                </h3>
                <h4 class="timeline-title">Bachelor of Humanity</h4>
                <p class="timeline-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique quibusdam odit distinctio consequuntur maxime corporis ab praesentium tempora at assumenda expedita, officia veniam eos tempore. Consequuntur quaerat nisi consectetur perspiciatis!</p>
              </div>    
              
            <div class="timeline-item">
              <div class="cirlce-dot">
                <h3 class="timeline-date">
                  <i class="fa-regular fa-calendar-days"></i> 2020 - 2023
                </h3>
                <h4 class="timeline-title">Bachelor of Humanity</h4>
                <p class="timeline-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique quibusdam odit distinctio consequuntur maxime corporis ab praesentium tempora at assumenda expedita, officia veniam eos tempore. Consequuntur quaerat nisi consectetur perspiciatis!</p>
              </div>    
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
     
    <!-- Right side div for education -->
    <div class="experience">
      <h3 class="title">Experience</h3>
      <div class="timeline-box">
        <div class="timeline">

          <div class="timeline-item">
            <div class="cirlce-dot">
              <h3 class="timeline-date">
                <i class="fa-regular fa-calendar-days"></i> 2023 - 2024
              </h3>
              <h4 class="timeline-title">Branding of </h4>
              <p class="timeline-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique quibusdam odit distinctio consequuntur maxime corporis ab praesentium tempora at assumenda expedita, officia veniam eos tempore. Consequuntur quaerat nisi consectetur perspiciatis!</p>
            </div>    

          <div class="timeline-item">
            <div class="cirlce-dot">
              <h3 class="timeline-date">
                <i class="fa-regular fa-calendar-days"></i> 2020 - 2023
              </h3>
              <h4 class="timeline-title">Bachelor of Humanity</h4>
              <p class="timeline-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique quibusdam odit distinctio consequuntur maxime corporis ab praesentium tempora at assumenda expedita, officia veniam eos tempore. Consequuntur quaerat nisi consectetur perspiciatis!</p>
            </div>    

          <div class="timeline-item">
            <div class="cirlce-dot">
              <h3 class="timeline-date">
                <i class="fa-regular fa-calendar-days"></i> 2020 - 2023
              </h3>
              <h4 class="timeline-title">Bachelor of Humanity</h4>
              <p class="timeline-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique quibusdam odit distinctio consequuntur maxime corporis ab praesentium tempora at assumenda expedita, officia veniam eos tempore. Consequuntur quaerat nisi consectetur perspiciatis!</p>
            </div>    
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
   </div>
</section> <!-- Education & Experience ends here -->    
<!-- ------------------------------------------SECTION 1-MISSION--------------------------------------------- -->

   <section class="section1" id="section1-id">

    <div class="section-cont service__container">
      <div class="service-grid">
        <div class="service-card">
          <h4>MISSION</h4>
          <img src="{{ url('images/mission-icon.png') }}" alt="mission-logo" class="mission">
          <p>
            Our portrait sessions are designed to showcase your personality
            and style in stunning imagery.
          </p>
        </div>
        <div class="service-card">
          <h4>VISION</h4>
          <img src="{{ url('images/vision-icon.jpg') }}" alt="vision-logo" class="vision">
          <p>
            Embrace the beauty and miracle of new life with our maternity and
            newborn photography sessions.
          </p>
        </div>
        <div class="service-card">
          <h4>TEAM</h4>
          <img src="{{ url('images/team-icon.jpg') }}" alt="team-logo" class="team">
          <p>
            Cherish the bond of family with our custom-designed playful candid
            moments and portrait sessions.
          </p>
        </div>
      </div>
    </div>
    </section> <!-- Mission ends here -->
<!-- --------------------------------------------------------MY SERVICES------------------------------------------>
<section class="services-section" id="servi">
  
  <h2 class="section-heading">MY SERVICES</h2>
  <div class="service-card">
    <div class="icon">
      <i class="fa-solid fa-paintbrush"></i>
    </div>
    <h3>Logo Design</h3>
    <p>Create unique and memorable logos that represent your brand.</p>
  </div>

  <div class="service-card">
    <div class="icon">
      <i class="fa-solid fa-palette"></i>
    </div>
    <h3>Brand Identity</h3>
    <p>Develop a strong and cohesive brand identity that resonates with your audience.</p>
  </div>

  <div class="service-card">
    <div class="icon">
      <i class="fa-solid fa-print"></i>
    </div>
    <h3>Poster & Advertisement Design</h3>
    <p>Design eye-catching brochures, flyers, and posters for your marketing needs.</p>
  </div>

  <div class="service-card">
    <div class="icon">
      <i class="fa-solid fa-laptop-code"></i>
    </div>
    <h3>Motion Graphics</h3>
    <p>Create stunning visuals for websites, including banners, icons, and illustrations.</p>
  </div>
</section> <!-- Services ends here -->

<!------------------------------------------------PROFESSIONAL SKILLS------------------------------------------->

<section class="skills" id="skills-id">
  <!-- Flex container for both skill containers -->
  <div class="skills-container">
    <!-- div for container1 on left side -->
    <div class="container1">
      <h1 class="section-heading1">Professional Skills</h1>
      <div class="technical-bar">
        <div class="bar">
          <i class="fa-solid fa-marker" style="margin-bottom: 5px;"></i>
          <div class="info">
            <span>Graphics Design</span>
          </div>
          <div class="progress-line graphics">
            <span></span>
          </div>
        </div>

        <div class="bar">
          <i class="fa-solid fa-video" style="margin-top: 30px;"></i>
          <div class="info">
            <span>Motion Graphics</span>
          </div>
          <div class="progress-line motion">
            <span></span>
          </div>
        </div>

        <div class="bar">
          <i class="fa-solid fa-desktop" style="margin-top: 30px;"></i>
          <div class="info">
            <span>Branding</span>
          </div>
          <div class="progress-line branding">
            <span></span>
          </div>
        </div>

        <div class="bar">
          <i class="fa-solid fa-rectangle-ad" style="margin-top: 30px;"></i>
          <div class="info">
            <span>Poster and Advertisement</span>
          </div>
          <div class="progress-line poster">
            <span></span>
          </div>
        </div>
        <!-- Add more div for skills here if needed -->
      </div>
    </div>

    <!-- div for container2 on right side -->
    <div class="container2">
      <!-- Additional Skills -->
      <h1 class="section-heading1">Technical Skills</h1>
      <div class="technical-bar">
        <div class="bar">
          <i class="fa-solid fa-lightbulb" style="margin-bottom: 5px;"></i>
          <div class="info">
            <span>Creative Thinking</span>
          </div>
          <div class="progress-line creative-thinking">
            <span></span>
          </div>
        </div>

        <div class="bar">
          <i class="fa-solid fa-tools" style="margin-top: 30px;"></i>
          <div class="info">
            <span>Technical Skills</span>
          </div>
          <div class="progress-line technical-skills">
            <span></span>
          </div>
        </div>

        <div class="bar">
          <i class="fa-solid fa-people-group" style="margin-top: 30px;"></i>
          <div class="info">
            <span>Team Collaboration</span>
          </div>
          <div class="progress-line team-collaboration">
            <span></span>
          </div>
        </div>

        <div class="bar">
          <i class="fa-solid fa-calendar" style="margin-top: 30px;"></i>
          <div class="info">
            <span>Project Management</span>
          </div>
          <div class="progress-line project-management">
            <span></span>
          </div>
        </div>
        <!-- Add more div for additional skills here if needed -->
      </div>
    </div>
  </div> <!-- End of skills-container -->
</section> <!-- Professional ends here -->


<!-- ------------------------------------***************BLOG/PROJECTS***********************----------------------------- -->
<section class="blog-section">
  <div id="blog">
      <div class="main-text">
          <h2 class="section-heading">Latest BLOG</h2>
          <div class="blog-content">
              <div class="row-blog">
                  <img src="{{ url('images/After_Effects_Logo-blog-1.png') }}" alt="image-here">
                  <div class="layer">
                      <h3>What is Adobe After Effect ?</h3>
                      <p> is a professional motion graphics software primarily used for creating animations, visual effects, and compositing. It's a powerful tool that allows you to Create animations, Animate text, shapes, and images using keyframes and expressions.</p>
                      <a href="#" class="read-more">READ MORE</a>
                  </div>
              </div>

              <div class="row-blog">
                  <img src="{{ url('images/Adobe_Photoshop-blog-2.png') }}" alt="image-here">
                  <div class="layer">
                      <h3>What is Adobe Photoshop ?</h3>
                      <p> is a professional-grade image editing software known for its powerful tools and capabilities. It's ideal for photographers, graphic designers, and those who need advanced features for manipulating images and creating complex designs.</p>
                      <a href="#" class="read-more">READ MORE</a>
                  </div>
              </div>

              <div class="row-blog">
                  <img src="{{ url('images/Adobe_Express_logo-blog-3.png') }}" alt="image-here">
                  <div class="layer">
                      <h3>What is Adobe Express ?</h3>
                      <p>is a simplified online design tool that offers a more streamlined experience compared to Photoshop. It's suitable for those who need basic image editing and design features without the complexity of Photoshop.</p>
                      <a href="#" class="read-more">READ MORE</a>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <a href="#blog" class="blog-btn">SEE MORE</a>
      
</section> <!-- Blog ends here -->

<!-- --------------------Top Up button ----------------- -->
<a href="#top" class="top-btn" aria-label="back to top" data-back-top-btn>
  <strong><i class="fa-solid fa-arrow-up"></i>Up</strong>
</a>

<!-- --------------------------------My Projects---------------------------- -->

<!-- --------Pictures-------- -->
<section class="project-container content-container">
  <h2 class="section-heading">PICTURES PROJECTS</h2>
  <div class="picture-flex">
    <img src="{{ url('images/family-client-2.webp') }}" alt="image-1" />
    <img src="{{ url('images/black-mother-client-2.avif') }}" alt="image-2" />
    <img src="{{ url('images/customer-3.jpg') }}" alt="image-3" />
    <img src="{{ url('images/image-4.jpg') }}" alt="image-4" />
    <img src="{{ url('images/image-5.jpg') }}" alt="image-5" />
    <img src="{{ url('images/image-6.jpg') }}" alt="image-6" />
    <img src="{{ url('images/image-7.jpg') }}" alt="image-7" />
    <img src="{{ url('images/image-8.jpg') }}" alt="image-8" />
  </div>
</section>

<!-- --------------Videos-------------------- -->
<section class="video-container content-container">
  <h2 class="section-heading">VIDEOS PROJECT</h2>
  <div class="video-slider">
    <button class="slider-btn prev-btn">&#10094;</button>
    <div class="video-flex">
      <video src="{{ url('video/video-1.mp4') }}" alt="video 1" controls></video>
      <video src="{{ url('video/video-2.mp4') }}" alt="video 2" controls></video>
      <video src="{{ url('video/video-3.mp4') }}" alt="video 3" controls></video>
      <video src="{{ url('video/video-4.mp4') }}" alt="video 4" controls></video>
      <video src="{{ url('video/video-5.mp4') }}" alt="video 5" controls></video>
    </div>
    <button class="slider-btn next-btn">&#10095;</button>
  </div>
</section>
<!-- -------------------------------Testimonial----------------------------- -->

<section class="testi-container" id="testimonial">
  <h2 class="section-heading">CUSTOMER FEEDBACK</span></h2>
  
  <div class="testimonial mySwiper">
    <div class="testi-content swiper-wrapper">
      <div class="slide swiper-slide">
        <div class="testi-item">
          <img src="{{ url('images/customer-1') }}" alt="client1" class="image">
          <div class="feedback-container">
            <p class="feedback">Xander creative is one of the best design company honestly i appreciate their services. Get in touch with them and you will enjoy their services.</p>
          </div>
          <div class="details">
            <span class="name">Msambili Ndaga</span>
            <span class="job">Network Engineer</span>
          </div>
        </div>
      </div>

      <div class="slide swiper-slide">
        <div class="testi-item">
          <img src="{{ url('images/customer-2.jpg') }}" alt="client2" class="image">
          <div class="feedback-container">
            <p class="feedback">"I had a wonderful experience working with Xander Creative. The photographer was very professional and made me feel comfortable in front of the camera. The logo design was also top-notch and exceeded my expectations</p>
          </div>
          <div class="details">
            <span class="name">Donald Michael</span>
            <span class="job">Programmer</span>
          </div>
        </div>
      </div>

      <div class="slide swiper-slide">
        <div class="testi-item">
          <img src="{{ url('images/customer-3.jpg') }}" alt="client3" class="image">
          <div class="feedback-container">
            <p class="feedback">Artful Images and Branding went above and beyond to deliver exceptional service. The photographer was incredibly talented and captured the perfect shots</p>
          </div>
          <div class="details">
            <span class="name">Emmy Michael</span>
            <span class="job">Business woman</span>
          </div>
        </div>
      </div>
    </div>

    <div class="swiper-button-next nav-button"></div>
    <div class="swiper-button-prev nav-button"></div>
    <div class="swiper-pagination"></div>
  </div>
</section> <!-- Testimonial ends here -->

<!-- -----------------------------------*********CONTACT SECTION***********------------------------------------ -->
    <section class="contact-section" id="contact">
      <div class="container">
        <h1 class="section-title">CONTACT <span style="color: rgb(255,215,0);">ME</span></h1>
        <div class="contact-box">
          <div class="left">
            <img class="img-contact" src="{{ url('images/gold-logo.png') }}" alt="logo">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.863104910521!2d39.16382427566294!3d-6.786508493210604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4f4929b5abe1%3A0x48cdb20b461cc493!2sKimara%20Mwisho!5e0!3m2!1sen!2stz!4v1723218072638!5m2!1sen!2stz" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
    
          <div class="right">
            <h2>Let's Talk Together</h2>
            <!-- Submit form using route  -->
            <form action="{{ route('form.submit') }}" method="post">
              
             <!-- Client Side Request Forgery -->
              @csrf 
              <div class="input-group">
                <i class="fa-solid fa-user"></i>
                <input type="text" name="name" placeholder="Enter Your Name" class="field">
              </div>
              <div class="input-group">
                <i class="fa-solid fa-envelope"></i>
                <input type="text" name="email" placeholder="Enter Your Email" class="field">
              </div>
              <div class="input-group">
                <i class="fa-solid fa-phone"></i>
                <input type="text" name="phone" placeholder="Enter Your Phone" class="field">
              </div>
              <div class="input-group">
                <i class="fa-solid fa-briefcase"></i>
                <select name="service" id="services" class="field">
                  <option value="graphics_design">GRAPHICS DESIGNING</option>
                  <option value="video_doc">VIDEO DOCUMENTARY</option>
                  <option value="poster_ad">POSTER & ADVERTISEMENT</option>
                  <option value="digital">DIGITAL MARKETING</option>
                </select>
              </div>
              <textarea name="message" placeholder="Message" class="field"></textarea>
              <button class="contact-btn">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </section> <!-- Contact ends here -->

    
    <!-- ------------------------------FOOTER --------------------------->
    <footer class="footer-container">
      <div class="footer-left">
       <h2>Xander Creative</h2>

        <p class="footer-links">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#servi">Services</a>
        <a href="#blog">Blog</a>
        <a href="#testimonial">Testimonials</a>
        <a href="#contact">Contact Me</a></p>

        <p class="footer-company"> Copyright &copy; 2024 <strong>Xander Creatives</strong> <br> All rights reserved</p> 
      </div>

      <div class="footer-center">
        <div>
          <i class="fa-solid fa-location-dot"></i>
          <p><span>Dar es Salaam TZ</span></p>
        </div>
        <div>
          <i class="fa-solid fa-phone"></i>
          <p><span>+255 789 113 449 | +255 752 865 523</span></p>
        </div>

        <div>
          <i class="fa-solid fa-envelope"></i>
          <p><a href="https://mail.google.com/mail/" target="_blank">alexandermatovelo77@gmail.com</a></p>
        </div>
      </div>

      <div class="footer-right">
        <p class="footer-about">
          <span>About the Company</span>
          <strong>Xander Creative</strong> is creative design company which offers variety of services in quality and good way.
        </p>

        <div class="footer-icons">
          <a href="https://web.facebook.com/" target="_blank" class="facebook-icon"><i class="fa-brands fa-facebook"></i></a>
          <a href="https://twitter.com/" target="_blank" class="twitter-icon"><i class="fa-brands fa-x-twitter"></i></a>
          <a href="https://www.instagram.com/" target="_blank" class="instagram-icon"><i class="fa-brands fa-square-instagram"></i></a>
          <a href="https://www.whatsapp.com/" target="_blank" class="whatsapp-icon"><i class="fa-brands fa-square-whatsapp" target="_blank"></i></a>
          <a href="https://www.linkedin.com/" target="_blank" class="linkedin-icon"><i class="fa-brands fa-linkedin"></i></a>
          <a href="https://www.dribbble.com/" target="_blank" class="dribbble-icon"><i class="fab fa-dribbble"></i></a>
          <a href="https://www.behance.com/" target="_blank" class="behance-icon"><i class="fab fa-behance"></i></a>
        </div>
      </div>
    </footer> <!-- Footer ends here -->
    

   <!-- --------Java Script codes used ----------- -->
    @vite('resources/js/app.js') <!-- Vite for build js files -->

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script> <!-- Auto typing script -->
    <script src="https://kit.fontawesome.com/8a7030f41c.js" crossorigin="anonymous"></script> <!-- Font awesome script -->    
  </body>
</html>

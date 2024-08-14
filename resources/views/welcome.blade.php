<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- ----------------------------Our Css Styles------------------------ -->
 <!-- Include compiled CSS -->
 @vite('resources/css/app.css')

    <!-- ---------------------------------Favicon Image--------------------------- -->
    <link rel="shortcut icon" href="images/gold-logo.png" type="image/x-icon">
  
    
    <!-- -------Swipper CSS----- -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <title>Xander Creative</title>
    </head>
    <!-- -------------------------------------Heads End Here----------------------------------- -->

  <body class="active">

  <!-- -----------------------------PRELOADING THE PAGE------------------------- -->
  
    <!-- -------------------------------------------HEADING SECTION PART-------------------------------------- -->
  
    <header class="header">
      <nav class="nav-bar">
        <div class="nav__header">
          <div class="nav__logo">
            <a href="#">
              <img src="{{ asset('images/gold-logo.png') }}" alt="logo" />
            </a>
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <i class="ri-menu-line"></i>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
          <li><a href="#home" id="home-nav">HOME</a></li>
          <li><a href="#about" id="about-nav">ABOUT</a></li>
          <li><a href="#servi" id="service-nav">SERVICES</a></li>
          <li class="nav__logo">
            <a href="#">
              <img src="{{ asset('images/gold-logo.png') }}" alt="logo" />
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

    </header>
   <!-- --------------------------------HEADING SECTION ENDS-------------------------------------- -->

    <!-- -------------------------------------ABOUT SECTION----------------------------------------- -->
   
    <section id="about">
        <h2 class="section-heading">ABOUT <span style="color: rgba(255,215,0);">ME</span></h2>
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
        <p>Alexander, <cite>Creatives</cite></p>
      </div>
  
      <div class="about-right">
        <img src="{{ asset('images/black-logo.png') }}" alt="alex-image" class="alex-img scroll-reveal from-right">
      </div>

        </div>
      
    <!-- -------------------------------------ABOUT SECTION ENDS----------------------------------------- -->
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

   <!-- Button for download CV and Contact Me -->
   <div class="btn-container">
    <button class="btn btn-color-1" onclick="window.open('{{ asset('cv/uandishi_wa_kitabu_kinachouzika_22062022_03_47.pdf') }}">DOWNLOAD CV <i class="fa-solid fa-download"></i></button>
    <button class="btn btn-color-2" onclick="location.href='./#contact'"> Contact Me</button>
  </div>
</section>     
<!-- ----------------------------------------EDUCATION AND EXPERIENCE ENDS------------------------------------ -->

    <!-- ------------------------------------------SECTION 1-MISSION--------------------------------------------- -->

   <section class="section1" id="section1-id">

    <div class="section__container service__container">
      <div class="service__grid">
        <div class="service__card">
          <h4>MISSION</h4>
          <img src="{{ asset('images/mission-icon.png') }}" alt="mission-logo" class="mission">
          <p>
            Our portrait sessions are designed to showcase your personality
            and style in stunning imagery.
          </p>
        </div>
        <div class="service__card">
          <h4>VISION</h4>
          <img src="{{ asset('images/vision-icon.png') }}" alt="vision-logo" class="vision">
          <p>
            Embrace the beauty and miracle of new life with our maternity and
            newborn photography sessions.
          </p>
        </div>
        <div class="service__card">
          <h4>TEAM</h4>
          <img src="{{ asset('images/team-icon.png') }}" alt="team-logo" class="team">
          <p>
            Cherish the bond of family with our custom-designed playful candid
            moments and portrait sessions.
          </p>
        </div>
      </div>
    </div>
    </section>
  <!-- ------------------------------------------SECTION 1-MISSION ENDS--------------------------------------------- -->

    
<!-- --------------------------------------------------------MY SERVICES------------------------------------------>
<section class="services-section" id="servi">
  
  <h2 class="section-heading">My <span style="color: rgba(255,215,0);">Services</span></h2>
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
</section>

    
<!------------------------------------------------PROFESSIONAL SKILLS------------------------------------------->

    <section class="skills" id="skills-id">

       <!-- div for container1 on left side -->
       
      <div class="container1">
       
        <h1 class="heading1">Technical Skills</h1>
        <div class="technical-bar">
          <div class="bar" ><i class="fa-solid fa-marker" style="margin-bottom: 5px;"></i>
            <div class="info">
              <span>Graphics Design</span>
            </div>
            <div class="progress-line graphics">
              <span></span>
            </div>
          </div>

          <div class="bar"><i class="fa-solid fa-video" style="margin-top: 30px;"></i>
            <div class="info">
              <span>Motion Graphics</span>
            </div>
            <div class="progress-line motion">
              <span></span>
            </div>
          </div>

          <div class="bar"><i class="fa-solid fa-desktop" style="margin-top: 30px;"></i>
            <div class="info">
              <span>Branding</span>
            </div>
            <div class="progress-line branding">
              <span></span>
            </div>
          </div>

          <div class="bar"><i class="fa-solid fa-rectangle-ad" style="margin-top: 30px;"></i>
            <div class="info">
              <span>Poster and Advertisement</span>
            </div>
            <div class="progress-line poster">
              <span></span>
            </div>
          </div>
             <!-- // Add more div for skills here -->
        </div>
      </div>   
   

      <!-- Div for container1 on Right -->
        <div class="container1">
         <h1 class="heading1">Professional Skills</h1>

         <div class="radial-bars">
          <div class="radial-bar">
            <svg x="0px" y="0px" viewBox="0 0 200 200">
              <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
              <circle class="path path-1" cx="100" cy="100" r="80"></circle>
            </svg>
            <div class="percentage">80%</div>
            <div class="text">Creativity</div>
           </div>
          </div>
          

         <div class="radial-bars">
          <div class="radial-bar">
            <svg x="0px" y="0px" viewBox="0 0 200 200">
              <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
              <circle class="path path-2" cx="100" cy="100" r="80"></circle>
            </svg>
            <div class="percentage">90%</div>
            <div class="text">Designing</div>
          </div>
          </div>
          
  
         <div class="radial-bars">
          <div class="radial-bar">
            <svg x="0px" y="0px" viewBox="0 0 200 200">
              <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
              <circle class="path path-3" cx="100" cy="100" r="80"></circle>
            </svg>
            <div class="percentage">85%</div>
            <div class="text">Digital Marketing</div>
           </div>
          </div>

          <div class="radial-bars">
            <div class="radial-bar">
              <svg x="0px" y="0px" viewBox="0 0 200 200">
                <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
                <circle class="path path-3" cx="100" cy="100" r="80"></circle>
              </svg>
              <div class="percentage">85%</div>
              <div class="text">Problem Solving</div>
             </div>
            </div>
          <!-- // Add more div for more skills here -->
          </div>
      <!-- Anything to add continue here...! -->
      </section>
<!----------------------------------------------------------PROFESSIONAL SKILLS ENDS HERE------------------------------------------------->


<!-- ------------------------------------***************BLOG/PROJECTS***********************----------------------------- -->
<section class="blog-section">
  <div id="blog">
    <div class="main-text">
      <h2> Latest <span>BLOG</span></h2>

      <div class="blog-content">
        <div class="row-blog">
          <img src="{{ asset('images/image-1.png') }}" alt="image-here">

          <div class="layer">
            <h3>USCF MLIMANI</h>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem excepturi beatae, quis minus voluptates, maxime qui exercitationem odio illum id non tenetur ut vitae, ipsum nesciunt ipsam delectus officiis nihil?</p>

            <i class="fa-solid fa-link"></i><a href="#" style="color: rgba(255,215,0);"><strong>READ MORE</strong></a>
          </div>
        </div>

        <div class="row-blog">
          <img src="{{ asset('images/image-2.png') }}" alt="image-here">
          <div class="layer">
            <h3>USCF MLIMANI</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem excepturi beatae, quis minus voluptates, maxime qui exercitationem odio illum id non tenetur ut vitae, ipsum nesciunt ipsam delectus officiis nihil?</p>

            <i class="fa-solid fa-link"></i><a href="#" style="color: rgba(255,215,0);"><strong>READ MORE</strong></a>
          </div>
        </div>

        <div class="row-blog">
          <img src="{{ asset('images/image-3.png') }}" alt="image-here">
          <div class="layer">
            <h3>USCF MLIMANI</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem excepturi beatae, quis minus voluptates, maxime qui exercitationem odio illum id non tenetur ut vitae, ipsum nesciunt ipsam delectus officiis nihil?</p>

            <i class="fa-solid fa-link"></i><a href="#" style="color: rgba(255,215,0);"><strong>READ MORE</strong></a>
          </div>
        </div>


      </div>
    </div>
  </div>
  
  <a href="#blog" class="blog-btn">SEE MORE</a>
        
</section>
<!-- ------------------------------------***************BLOG/PROJECTS***********************----------------------------- -->

<!-- --------------------------------------TESTIMONIALS------------------------------------------- -->


<!-- <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"> -->




<section class="testi-container">
  <div class="testimonial mySwiper">
    <div class="testi-content swiper-wrapper">
      <div class="slide swiper-slide">
        <img src="{{ asset('images/NDAGA.jpg') }}" alt="" class="image">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque natus commodi, odio qui ratione et laboriosam dolorem dolorum nostrum eveniet illum beatae iste nobis iusto nihil repudiandae est possimus iure!</p>

        <i class="fa-solid fa-quote-left quote-view"></i>

        <div class="details">
          <span class="name">Msambili Ndaga</span>
          <span class="job">Network Engineer</span>
        </div>
      </div>


      <div class="slide swiper-slide">
        <img src="{{ asset('images/client-3.jng') }}" alt="" class="image">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque natus commodi, odio qui ratione et laboriosam dolorem dolorum nostrum eveniet illum beatae iste nobis iusto nihil repudiandae est possimus iure!</p>

        <i class="fa-solid fa-quote-left quote-view"></i>

        <div class="details">
          <span class="name">Donald Michael</span>
          <span class="job">Network Engineer</span>
        </div>
      </div>


      <div class="slide swiper-slide">
        <img src="{{ asset('images/client-1.jng') }}" alt="" class="image">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque natus commodi, odio qui ratione et laboriosam dolorem dolorum nostrum eveniet illum beatae iste nobis iusto nihil repudiandae est possimus iure!</p>

        <i class="fa-solid fa-quote-left quote-view"></i>

        <div class="details">
          <span class="name">Emmy Joel</span>
          <span class="job">Network Engineer</span>
        </div>
      </div>

    </div>

    <div class="swiper-button-next nav-button"></div>
    <div class="swiper-button-prev nav-button"></div>
    <div class="swiper-pagination"></div>



  </div>
</section>









<!-- <section class="feedback-section" id="testimonial">
  <h2 class="section-heading">Customer <span style="color: rgba(255,215,0);">Feedback</span></h2>  
  <div class="feedback-container">
    <div class="feedback-card">
      <div class="customer-photo">
        <img src="images/NDAGA.jpg" alt="Customer 1">
      </div>
      <div class="customer-feedback">
        <p>"The logo design exceeded my expectations! It perfectly represents my brand."</p>
        <h4>— Msambili Ndaga</h4>
      </div>
    </div>

    <div class="feedback-card">
      <div class="customer-photo">
        <img src="images/client-3.jpg" alt="Customer 2">
      </div>
      <div class="customer-feedback">
        <p>"Professional and creative work. The brand identity design was spot on."</p>
        <h4>— Mary Smith</h4>
      </div>
    </div>

    <div class="feedback-card">
      <div class="customer-photo">
        <img src="images/image-6.jpg" alt="Customer 3">
      </div>
      <div class="customer-feedback">
        <p>"Amazing print designs! The brochures were exactly what I needed."</p>
        <h4>— Emily Johnson</h4>
      </div>
    </div>

    <div class="feedback-card">
      <div class="customer-photo">
        <img src="images/image-7.jpg" alt="Customer 3">
      </div>
      <div class="customer-feedback">
        <p>"Amazing print designs! The brochures were exactly what I needed."</p>
        <h4>— Emily Johnson</h4>
      </div>
    </div>
  </div>
</section> -->



    <section class="section__container gallery__container">
      <h2 class="section__header">VIEW <span style="color: rgba(255,215,0);">PROJECTS</span></h2>
      <div class="gallery__grid">
        <img src="{{ asset('images/image-1.jpg') }}" alt="gallery" />
        <img src="{{ asset('images/image-2.jpg') }}" alt="gallery" />
        <img src="{{ asset('images/image-3.jpg') }}" alt="gallery" />
        <img src="{{ asset('images/image-4.jpg') }}" alt="gallery" />
        <img src="{{ asset('images/image-5.jpg') }}" alt="gallery" />
        <img src="{{ asset('images/image-6.jpg') }}" alt="gallery" />
        <img src="{{ asset('images/image-7.jpg') }}" alt="gallery" />
        <img src="{{ asset('images/image-8-3.jpg') }}" alt="gallery" />
      </div>
      <div class="gallery__btn">
        <button class="btn">VIEW </button>
      </div>
    </section>

    <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn><strong><i class="fa-solid fa-arrow-up"></i>Up</strong></a>



    <!-- -----------------------------------*********CONTACT SECTION***********------------------------------------ -->
    <section class="contact-section">
      <div class="container">
        <div class="contact-box">
          <div class="left">
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.863104910521!2d39.16382427566294!3d-6.786508493210604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4f4929b5abe1%3A0x48cdb20b461cc493!2sKimara%20Mwisho!5e0!3m2!1sen!2stz!4v1723218072638!5m2!1sen!2stz" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
  
          <div class="right">
            <form action="{{ route('form.submit') }}" method="POST">
            @csrf
              <h2>Contact Me</h2>
              <input type="text" name="name" placeholder="Enter Your Name" class="field">
              <input type="text" name="email" placeholder="Enter Your Email" class="field">
              <input type="text" name="phone"placeholder="Enter Your Phone" class="field">
  
              <textarea name="message" id="" placeholder="Message" class="field"></textarea>

              <!-- // CSRF token against cross-site request forgery -->
              <button class="contact-btn" type="submit" value="">Submit</button>

              </form>
          </div>
        </div>
      </div>
    </section>
    



    <footer id="footer-id">
      <div class="section__container footer__container">
        <div class="footer__col">
          <img src="{{ asset('images/gold-logo.png') }}" alt="logo" />
          <div class="footer__socials">
            <a href="#"><i class="ri-facebook-fill"></i></a>
            <a href="#"><i class="ri-instagram-line"></i></a>
            <a href="#"><i class="ri-twitter-fill"></i></a>
            <a href="#"><i class="ri-youtube-fill"></i></a>
            <a href="#"><i class="ri-pinterest-line"></i></a>
          </div>
        </div>
        <div class="footer__col">
          <ul class="footer__links">
            <li><a href="#home">HOME</a></li>
            <li><a href="#about">ABOUT US</a></li>
            <li><a href="#service">SERVICES</a></li>
            <li><a href="#client">CLIENT</a></li>
            <li><a href="#blog">BLOG</a></li>
            <li><a href="#contact">CONTACT US</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>STAY IN TOUCH</h4>
          <p>
            Keep up-to-date with all things Capturer! Join our community and
            never miss a moment!
          </p>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2024 Xander Creatives. All rights reserved.
      </div>
    </footer>


      <!-- Include compiled JS -->
    @vite('resources/js/app.js')
   
  
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- <script src="/js/main.js"></script> -->
    <!-- Swipper Js -->
      <!-- ------------------------------Script for Display effect home-------------------------------- -->
      <script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script>
    <!-- --------------------------Auto typing words------------------- -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <!-- -------------------------------Font Awesome script-------------------------- -->
    <script src="https://kit.fontawesome.com/8a7030f41c.js" crossorigin="anonymous"></script>
    <!-- ----------------------------------3D Background Effect----------------------------------- -->
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

    <!-- ----- js swip---- -->
    <script src="js/swipe.js"></script>
    
  </body>
</html>

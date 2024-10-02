<!-- -----------------------------------*********CONTACT SECTION***********------------------------------------ -->
<section class="contact-section" id="contact">
      <div class="container-contact">
        <h1 class="section-title">CONTACT <span style="color: rgb(255,215,0);">ME</span></h1>

    <!-- Display Success Message -->
    @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    <!-- Validation Errors -->
    @if ($errors->any())
    <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
         </div>
    @endif

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
                <input type="tel" id="phoneInput" name="phone" placeholder="Enter Your Phone" class="field">
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

    <script>
    window.onload = function() {
        // Check if the session variable is set
        @if (session('contactSubmitted'))
            // If it is, load the contact section
            window.location.hash = '#contact';
        @endif
    };
</script>
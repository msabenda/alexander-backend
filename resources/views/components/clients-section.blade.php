<section class="logos">
  <h2 class="section-heading">
    <span class="myClient">My </span><span class="clieent">CLIENTS</span>
  </h2>
  <div class="logos-container">
    <div class="logos-slide">
      <img src="{{ url('images/i.jpg') }}" loading="lazy" alt="Client Logo 1" />
      <img src="{{ url('images/ii.png') }}" loading="lazy" alt="Client Logo 2" />
      <img src="{{ url('images/iii.png') }}" loading="lazy" alt="Client Logo 3" />
      <img src="{{ url('images/iv.png') }}" loading="lazy" alt="Client Logo 4" />
      <img src="{{ url('images/v.png') }}" loading="lazy" alt="Client Logo 5" />
      <img src="{{ url('images/vi.png') }}" loading="lazy" alt="Client Logo 6" />
      <img src="{{ url('images/vii.png') }}" loading="lazy" alt="Client Logo 7" />
      <img src="{{ url('images/ii.png') }}" loading="lazy" alt="Client Logo 8" />
      <img src="{{ url('images/ix.png') }}" loading="lazy" alt="Client Logo 9" />
      <img src="{{ url('images/x.png') }}" loading="lazy" alt="Client Logo 10" />
      <img src="{{ url('images/xi.png') }}" loading="lazy" alt="Client Logo 11" />
    </div>
  </div>
</section>

<script>
  const logosSection = document.querySelector('.logos');
const logosSlide = document.querySelector('.logos-slide');

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        logosSlide.style.animationPlayState = 'running';
      } else {
        logosSlide.style.animationPlayState = 'paused';
      }
    });
  },
  { threshold: 0.1 }
);

observer.observe(logosSection);

</script>

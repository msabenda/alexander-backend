<section class="logos">
<h2 class="section-heading"><span class="myClient">My </span><span class="clieent">CLIENTS</span></h2>
      <div class="logos-slide">
        <img src="{{ url('images/i.png') }}"/>
        <img src="{{ url('images/ii.png') }}" />
        <img src="{{ url('images/iii.png') }}" />
        <img src="{{ url('images/iv.png') }}" />
        <img src="{{ url('images/v.png') }}" />
        <img src="{{ url('images/vi.png') }}" />
        <img src="{{ url('images/vii.png') }}" />
        <img src="{{ url('images/ii.png') }}" />
        <img src="{{ url('images/ix.png') }}" />
        <img src="{{ url('images/x.png') }}" />
        <img src="{{ url('images/xi.png') }}" />
        
      </div>
</section>

    <script>
      var copy = document.querySelector(".logos-slide").cloneNode(true);
      document.querySelector(".logos").appendChild(copy);
    </script>
<!-- <section class="partners">
    <h2 style="color: rgb(255,255,255)">MY RECENT CLIENTS</h2>
<div class="slider">
    <ul class="brands">
        <li class="brand-logo"><img src="{{ url('images/i.png') }}" alt="" width="150px" height="150px"><br>CCT USCF Dar</li>
        <li class="brand-logo"><img src="{{ url('images/ii.png') }}" alt=""width="150px" height="150px"><br>DUEA</li>
        <li class="brand-logo"><img src="{{ url('images/iii.png') }}" alt=""width="150px" height="150px"><br>JIGUNDUE Platform</li>
        <li class="brand-logo"><img src="{{ url('images/iv.png') }}" alt=""width="150px" height="150px"><br>MJUE MUNGU CAMPAIGN</li>
        <li class="brand-logo"><img src="{{ url('images/v.png') }}" alt=""width="150px" height="150px"><br>Mtetezi wa Mama</li>
        <li class="brand-logo"><img src="{{ url('images/vi.png') }}" alt=""width="150px" height="150px"><br>MY DOCTOR</li>
        <li class="brand-logo"><img src="{{ url('images/vii.png') }}" alt=""width="150px" height="150px"><br>Tanzania Association of Tax Consultants</li>
        <li class="brand-logo"><img src="{{ url('images/ii.png') }}" alt=""width="150px" height="150px"><br>DUEA</li>
        <li class="brand-logo"><img src="{{ url('images/ix.png') }}" alt=""width="150px" height="150px"><br>UDTA</li>
        <li class="brand-logo"><img src="{{ url('images/x.png') }}" alt=""width="150px" height="150px"><br>USCF MLIMANI</li>
        <li class="brand-logo"><img src="{{ url('images/xi.png') }}" alt=""width="150px" height="150px"><br>YUNA</li>

        <li class="brand-logo"><img src="{{ url('images/i.png') }}" alt="" width="150px" height="150px"><br><span>CCT USCF Dar</span></li>
        <li class="brand-logo"><img src="{{ url('images/ii.png') }}" alt=""width="150px" height="150px"><br>DUEA</li>
        <li class="brand-logo"><img src="{{ url('images/iii.png') }}" alt=""width="150px" height="150px"><br>JIGUNDUE Platform</li>
        <li class="brand-logo"><img src="{{ url('images/iv.png') }}" alt=""width="150px" height="150px"><br>MJUE MUNGU CAMPAIGN</li>
        <li class="brand-logo"><img src="{{ url('images/v.png') }}" alt=""width="150px" height="150px"><br>Mtetezi wa Mama</li>
        <li class="brand-logo"><img src="{{ url('images/vi.png') }}" alt=""width="150px" height="150px"><br>MY DOCTOR</li>
        <li class="brand-logo"><img src="{{ url('images/vii.png') }}" alt=""width="150px" height="150px"><br>Tanzania Association of Tax Consultants</li>
        <li class="brand-logo"><img src="{{ url('images/ii.png') }}" alt=""width="150px" height="150px"><br>DUEA</li>
        <li class="brand-logo"><img src="{{ url('images/ix.png') }}" alt=""width="150px" height="150px"><br>UDTA</li>
        <li class="brand-logo"><img src="{{ url('images/x.png') }}" alt=""width="150px" height="150px"><br>USCF MLIMANI</li>
        <li class="brand-logo"><img src="{{ url('images/xi.png') }}" alt=""width="150px" height="150px"><br>YUNA</li>

    </ul>
</div>
</section> -->

<!-- <section class="partners">
    <h2 style="color: rgb(255,255,255)">MY RECENT CLIENTS</h2>
    <div class="slider">
        <ul class="brands" id="brandSlider">
            @foreach (['i', 'ii', 'iii', 'iv', 'v', 'vi', 'vii', 'ii', 'ix', 'x', 'xi'] as $logo)
                <li class="brand-logo">
                    <img src="{{ url('images/' . $logo . '.png') }}" alt="" width="150px" height="150px"><br>
                    <span>{{ $logo }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</section> -->

<section class="logos">
<h2 class="section-heading">My <span class="clieent">CLIENTS</span></h2>
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
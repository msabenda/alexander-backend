<!-- resources/views/components/pictures-projects.blade.php -->
<!-- --------Pictures-------- -->

<section class="portfolio">
        <header>
            <h1>Project Highlights</h1>
            
        </header>
        <div class="gallery">
            <div class="project landscape">
                <img src="{{ url('images/black-background.png') }}" alt="Landscape Project 1">
                <div class="overlay">
                    <div class="info">
                        <h2>Xander Creative</h2>
                        <p>Xander Creative one of the best creative company</p>
                    </div>
                </div>
            </div>
            <div class="project portrait">
                <img src="{{ url('images/black-logo.png') }}" alt="Portrait Project 1">
                <div class="overlay">
                    <div class="info">
                        <h2>Portrait Project 1</h2>
                        <p>Stunning portrait of a model.</p>
                    </div>
                </div>
            </div>

            <div class="project portrait">
                <img src="{{ url('images/gold-logo.png') }}" alt="Portrait Project 1">
                <div class="overlay">
                    <div class="info">
                        <h2>Portrait Project 1</h2>
                        <p>Stunning portrait of a model.</p>
                    </div>
                </div>
            </div>
            <!-- Add more projects as needed -->
        </div>
    </section>
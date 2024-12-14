<section id="video-section">
    <header>
        <h2 class="section-heading">
            <span class="videoZ">My </span><span class="videoz">VIDEOS</span>
        </h2>
    </header>
    <div class="container-videos">
        <div class="main-video-container">
            <video src="{{ url('videos/4.mp4') }}" loop controls class="main-video" preload="metadata"></video>
            <div class="main-video-details">
                <h3 class="main-vid-title">YUNA Organization</h3>
                <p class="main-vid-description">Description about the YUNA Organization video and its purpose.</p>
                <button class="like-btn">👍 Like</button>
            </div>
        </div>
        <div class="video-list-container" id="videosList"></div>
    </div>
</section>

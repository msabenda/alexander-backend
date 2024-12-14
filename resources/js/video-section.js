const videosList = [
    { video: 'videos/2.mp4', title: 'Mpiruka Mission USCF MLIMANI', description: 'Details about the mission.', likes: 0 },
    { video: 'videos/3.mp4', title: 'School of Economics Charity', description: 'Charity event overview.', likes: 0 },
    { video: 'videos/4.mp4', title: 'YUNA Organization Project 1', description: 'Project highlights.', likes: 0 },
    { video: 'videos/5.mp4', title: 'YUNA Organization Project 2', description: 'Another great project.', likes: 0 },
    { video: 'videos/8.mp4', title: 'UNCTN CARAVAN', description: 'Details about the caravan.', likes: 0 },
    { video: 'videos/9.mp4', title: 'Why TIMUN ?', description: 'Reasons behind TIMUN.', likes: 0 },
    { video: 'videos/10.mp4', title: 'UDTA Advertise', description: 'Advertise details.', likes: 0 },
    { video: 'videos/11.mp4', title: 'Masero Garden Advertise', description: 'Beautiful garden overview.', likes: 0 },
    { video: 'videos/12.mp4', title: 'Brunch Festival', description: 'Festival highlights.', likes: 0 },
];

const videosContainer = document.getElementById('videosList');
videosContainer.innerHTML = videosList.map(({ video, title, description }, index) => `
    <div class="list" data-video-index="${index}">
        <video src="${video}" class="list-video" muted preload="none" loading="lazy"></video>
        <div class="video-info">
            <h3 class="list-title">${title}</h3>
            <p class="list-description">${description}</p>
        </div>
    </div>
`).join('');

document.querySelectorAll('.video-list-container .list').forEach((vid) => {
    vid.addEventListener('click', () => {
        const index = vid.dataset.videoIndex;
        const mainVideo = document.querySelector('.main-video-container .main-video');
        const mainTitle = document.querySelector('.main-video-container .main-vid-title');
        const mainDescription = document.querySelector('.main-video-container .main-vid-description');

        mainVideo.src = videosList[index].video;
        mainVideo.play();
        mainTitle.textContent = videosList[index].title;
        mainDescription.textContent = videosList[index].description;

        document.querySelectorAll('.video-list-container .list').forEach(item => item.classList.remove('active'));
        vid.classList.add('active');
    });
});

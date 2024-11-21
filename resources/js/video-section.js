const videosList = [
    {
        video: 'videos/2.mp4',
        title: 'Mpiruka Mission USCF MLIMANI'
    },
    {
        video: 'videos/3.mp4',
        title: 'School of Economics Charity'
    },
    {
        video: 'videos/4.mp4',
        title: 'YUNA Organization Project 1'
    },
    {
        video: 'videos/5.mp4',
        title: 'YUNA Organization Project 2'
    },
    {
        video: 'videos/8.mp4',
        title: 'UNCTN CARAVAN'
    },
    {
        video: 'videos/9.mp4',
        title: 'Why TIMUN ?'
    },
    {
        video: 'videos/10.mp4',
        title: 'UDTA Advertise'
    },
    {
        video: 'videos/11.mp4',
        title: 'Masero Garden Advertise'
    },
    {
        video: 'videos/12.mp4',
        title: 'Brunch Festival'
    },
    ]
    
    const categories = [...new Set(videosList.map((item) => { return item }))]
    document.getElementById('videosList').innerHTML = categories.map((item) => {
        var { video, title } = item;
        return (
            `<div class="list active">
            <video src=${video} class="list-video"></video>
            <h3 class="list-title">${title}</h3>
            </div>`
            )
    }).join('')
    
    let videoList = document.querySelectorAll('.video-list-container .list');
    videoList.forEach(remove => { remove.classList.remove('active') });
    videoList.forEach(vid => {
        vid.onclick = () => {
            videoList.forEach(remove => { remove.classList.remove('active') });
            vid.classList.add('active');
            let src = vid.querySelector('.list-video').src;
            let title = vid.querySelector('.list-title').innerHTML;
            document.querySelector('.main-video-container .main-video').src = src;
            document.querySelector('.main-video-container .main-video').play();
            document.querySelector('.main-video-container .main-vid-title').innerHTML = title;
        };
    });
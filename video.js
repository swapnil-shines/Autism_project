/*let listVideo = document.querySelector('.video-list .vid');
let mainVideo = document.querySelector('.main-video video');
let title = document.querySelector('.main-video .title');

listVideo.forEach(video =>{
    video.onclick = () =>{
    listVideos.forEach(vid => vid.classList.remove('active'));
    video.classList.add('active');
    if(video.classList.contains('active')){
        let src = video.children[0].getAttribute('src');
        mainVideo.src = src;
        let text = video.children[1].innerHTML;
        title.innerHTML = text;
    };
    };
});  
*/


let listVideos = document.querySelectorAll('.video-list .vid'); // Changed to querySelectorAll
let mainVideo = document.querySelector('.main-video video');
let title = document.querySelector('.main-video .title');

listVideos.forEach(video => { 
    video.onclick = () => {
        listVideos.forEach(vid => vid.classList.remove('active')); 
        video.classList.add('active');

        
        if (video.classList.contains('active')) {
            let src = video.children[0].getAttribute('src');
            mainVideo.src = src;
            let text = video.children[1].innerHTML;
            title.innerHTML = text;
        }



/*

if (video.classList.contains('active')) {
    let src = video.querySelector('video').getAttribute('src');
    mainVideo.src = src;
    
    let textElement = video.querySelector('.title');
    if (textElement) {
        let text = textElement.innerHTML;
        title.innerHTML = text;
    }
}
*/
        
    };
});

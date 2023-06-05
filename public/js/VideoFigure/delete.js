let butonsDeleteVideo = document.querySelectorAll(".video-delete-button");
let butonsDeletePhoto = document.querySelectorAll(".photo-delete-button");
const root = 'http://' + location.hostname + ':' + location.port;
let videoId = '';
let videoCardSelector = ''
let videoDOM = ''

butonsDeleteVideo.forEach(btn => {

    btn.addEventListener('click', function(e){

        e.preventDefault();
        videoId = btn.getAttribute('videodelbtn');
        videoCardSelector = "card_video_" + videoId;

        document.getElementById(videoCardSelector).remove();

        fetch(root + '/figure/video/supprimer/' + videoId, {
            method: 'DELETE',
            headers: {
                "Content-Type": "application/json"
            }
        })
        .then(response => response.json())
        .then(data => {
        
            console.log(data)

        })
        .catch(error => {
            console.log(error);
        });

    });

});

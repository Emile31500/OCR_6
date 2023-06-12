let butonsDeleteVideo = document.querySelectorAll(".video-delete-button");
const root = 'http://' + location.hostname + ':' + location.port;
let videoId = '';
let videoCardSelector = ''
let videoDOM = ''

butonsDeleteVideo.forEach(btn => {

    btn.addEventListener('click', function(e){

        e.preventDefault();
        videoId = btn.getAttribute('videodelbtn');
        videoCardSelector = "video_card_" + videoId;

        fetch(root + '/figure/video/supprimer/' + videoId, {
            method: 'DELETE',
            headers: {
                "Content-Type": "application/json"
            }
        })
        .then(function() {
            
            document.getElementById(videoCardSelector).remove();

        })
        .catch(error => {
            alert(error);
        });

    });

});

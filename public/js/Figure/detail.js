let btnMedia = document.querySelector('#see-media');
let medias = document.querySelectorAll('.media');

btnMedia.addEventListener('click', function(event){

    event.preventDefault();

    medias.forEach(media => {
        
        if (media.style.display !== "none") {

            media.style.display = "none"
    
        } else {
    
            media.style.display = "inline"
    
        }

    });
   

});

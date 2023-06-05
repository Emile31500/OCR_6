let btnMedia = document.querySelector('#see-media');
let media = document.querySelector('#media');

btnMedia.addEventListener('click', function(event){

    event.preventDefault();

    console.log(media.style.display);

    if (media.style.display !== "inline") {

        media.style.display = "inline"

    } else {

        media.style.display = "none"

    }

});

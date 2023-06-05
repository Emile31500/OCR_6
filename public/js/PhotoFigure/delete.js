let butonsDeletePhoto = document.querySelectorAll(".photo-delete-button");
let photoId = '';
let photoCardSelector = ''
let photoDOM = ''

butonsDeletePhoto.forEach(btn => {

    btn.addEventListener('click', function(e){

        e.preventDefault();
        photoId = btn.getAttribute('photodelbtn');
        photoCardSelector = "card_photo_" + photoId;

        fetch(root + '/figure/photo/supprimer/' + photoId, {
            method: 'DELETE',
            headers: {
                "Content-Type": "application/json"
            }
        })
        .then(document.getElementById(photoCardSelector).remove())
        .catch(error => {
            alert(error);
        });

    });

});

let videoFields = '';
let form = document.getElementById("figure-type");
let url = '';
let i = 0;

form.addEventListener('submit', function(event){
    
    event.preventDefault();

    videoFields = document.querySelectorAll(".video-figure-url");
    
    var data = new FormData(this);

    let index = 0;
    videoFields.forEach(videoField => {
        
        url = videoField.value;

        if (url.includes("https://www.youtube.com/watch?v=")){
            
            url = url.replace('https://www.youtube.com/watch?v=', '');
            if (url.includes("&ab_channel"))  url = url.substring(0, url.indexOf("&ab_channel"));
            if (url.includes("&t")) url.substring(0, url.indexOf("&t"));
            url =' https://www.youtube.com/embed/' + url;
            

        } else if (url.includes("https://www.dailymotion.com/video/")) {

            i = url.indexOf('/video/');
            url = url.replace('/video/', '/embed/video/');
        
        } else if (url.includes('vimeo.com/')) {

            url = url.replace('vimeo.com/', 'vimeo.com/embed/'); 
            url = url.replace('vimeo.com/', 'player.vimeo.com/')

        } else {

            alert("Attetion: La vidéo doit contenir un lien vers une vidéo youtube")
            return false;

        }

        data.set('creation_figure[videoFigures]['+ index +'][urlVideo]"', url);
        index++;
        
    });

    fetch(window.location, {

        method: 'POST',
        body: data

    })
    .then(response => response.text())
    .then(data => {

        const parser = new DOMParser();
        const responseElement = parser.parseFromString(data, 'text/html');
        console.log(responseElement);

        if(responseElement.querySelector('.alert-success').innerHTML !== undefined){

            alert(responseElement.querySelector('.alert-success').innerHTML);

        } else if (responseElement.querySelector('.alert-danger').innerHTML !== undefined) {

            alert(responseElement.querySelector('.alert-success').innerHTML);

        }
    })
    .catch(error => {

        alert("Erreur : " + error);

    });

});

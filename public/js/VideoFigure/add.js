let videoFields = '';
let form = document.getElementById("figure-type");
let url = '';
let newUrl;
let i = 0;
let index = 0;
let data
const parser = new DOMParser();

form.addEventListener('submit', function(event){
    
    event.preventDefault();

    videoFields = document.querySelectorAll(".video-figure-url");
    
    data = new FormData(this);

    index = 0;
    videoFields.forEach(videoField => {
        
        url = parser.parseFromString(videoField.value, 'text/html');
        if (url = url.querySelector("iframe")) {

            newUrl = url.getAttribute('src')
            
            if (newUrl.length < 512)
            {

                data.set('creation_figure[videoFigures]['+ index +'][urlVideo]"', newUrl);
                index++;

            } else {

                alert('Erreur : l\' élément iframe doit avoir une longuer de maximum 512 caractères. ' + newUrl.length + ' donnés.')
                return false;

            }
        
        } else {

            alert('Erreur : la vidéo doit contenir un seul élement HTML <iframe>');
            return false;
        }   
        
    });

    fetch(window.location, {

        method: 'POST',
        body: data

    })
    .then(response => response.text())
    .then(data => {

       
        const responseElement = parser.parseFromString(data, 'text/html');
        alert(responseElement.querySelector('.alert').innerHTML);
        return false;

    })
    .catch(error => {

        alert("Erreur : " + error);
        console.log(responseElement);

    });
    
});

function elementToString(element) {

    const wrapper = document.createElement('div');
    wrapper.appendChild(element.cloneNode(true));
    return wrapper.innerHTML;

}
  

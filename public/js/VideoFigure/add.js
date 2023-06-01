const addVideoLink = document.createElement('button')
addVideoLink.classList.add('add_video_list')
addVideoLink.classList.add('btn')
addVideoLink.classList.add('btn-light')
addVideoLink.innerText='Ajouter une vidéo'
addVideoLink.dataset.collectionHolderClass='videoFigures'

const newLinkLi = document.createElement('p').append(addVideoLink)

const collectionHolder = document.querySelector('ul.videoFigures')

collectionHolder.appendChild(addVideoLink)

const addFormToCollection = (e) => {

    e.preventDefault();
    const collectionHolder = document.querySelector('.' + e.currentTarget.dataset.collectionHolderClass);

    const item = document.createElement('p');

    item.innerHTML = collectionHolder
        .dataset
        .prototype
        .replace(
        /__name__/g,
        collectionHolder.dataset.index
        );

    collectionHolder.appendChild(item);

    collectionHolder.dataset.index++;
}

addVideoLink.addEventListener("click", addFormToCollection)

document
.querySelectorAll('.add_item_link')
.forEach(btn => {
btn.addEventListener("click", addFormToCollection)
});

// let addingVideoUrl = document.querySelector("#adding-video-url");
// let urlFieldList = document.querySelector("#creation_figure_url");
// let videoList = document.querySelector("#video_list");

// console.log(urlFieldList);

// addingVideoUrl.addEventListener('click', function(event){

//     event.preventDefault();
//     let url = urlFieldList.value; 

//     if (url.includes("https://www.youtube.com/watch?v=") || url.includes("https://vimeo.com/")){
        
//         url = url.replace('https://www.youtube.com/watch?v=', '');
//         url = url.substring(0, url.indexOf("&ab_channel"));

//         videoList.innerHTML += "<span class='border rounded bg-light color-dark m-3 p-3'> " + url +"</span>"
//         urlFieldList.value = '';
        
//         return true;

//     } else {

//         alert("Attetion:La vidéo doit contenir un lien vers une vidéo youtube")
//         return false;

//     }
    
// });

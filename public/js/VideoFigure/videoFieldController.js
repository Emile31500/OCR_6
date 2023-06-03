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
    addTagFormDeleteLink(item);
}

addVideoLink.addEventListener("click", addFormToCollection)

document
.querySelectorAll('.add_item_link')
.forEach(btn => {
btn.addEventListener("click", addFormToCollection)
});



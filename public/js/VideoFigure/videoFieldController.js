const addVideoLink = document.createElement('button')
addVideoLink.classList.add('add_video_list')
addVideoLink.classList.add('btn')
addVideoLink.classList.add('btn-light')
addVideoLink.innerText='Ajouter une vidéo'
addVideoLink.dataset.collectionHolderClass='videoFigures'

var newLinkLi = document.createElement('div')
newLinkLi.append(addVideoLink)

const collectionHolder = document.querySelector('ul.videoFigures')

collectionHolder.appendChild(addVideoLink)

const addFormToCollection = (e) => {

    e.preventDefault();
    const collectionHolder = document.querySelector('.' + e.currentTarget.dataset.collectionHolderClass);

    const item = document.createElement('p');
    item.classList.add('my-3');

    item.innerHTML = collectionHolder
        .dataset
        .prototype
        .replace(
        /__name__/g,
        collectionHolder.dataset.index
        );

    collectionHolder.appendChild(item);
    // item.querySelector('#creation_figure_videoFigures_' + collectionHolder.dataset.index++).classList.add('col-auto')
    let rowElement = item.querySelector('label').parentNode;
    rowElement.classList.add('row');

    function encapsulate(element) {

        let parent = element.parentNode;
        let divContainer = document.createElement('div');
        divContainer.classList.add('col-auto');
        divContainer.appendChild(element);
        parent.appendChild(divContainer);

    }

    encapsulate(item.querySelector('label'));
    encapsulate(item.querySelector('input'));

    collectionHolder.dataset.index++;
    addTagFormDeleteLink(rowElement);
}

addVideoLink.addEventListener("click", addFormToCollection)

document
.querySelectorAll('.add_item_link')
.forEach(btn => {
btn.addEventListener("click", addFormToCollection)
});



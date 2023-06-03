document
    .querySelectorAll('ul.videoFigures li')
    .forEach((tag) => {
        addTagFormDeleteLink(tag)
    })

const addTagFormDeleteLink = (item) => {
    const removeFormButton = document.createElement('button');
    removeFormButton.classList.add('btn')
    removeFormButton.classList.add('btn-danger')
    removeFormButton.innerText = 'Supprimer';

    var deleteCol = document.createElement('div')
    deleteCol.classList.add('col-auto');
    deleteCol.append(removeFormButton);
    

    item.append(deleteCol);

    removeFormButton.addEventListener('click', (e) => {
        e.preventDefault();
        // remove the li for the tag form
        item.remove();
    });
}

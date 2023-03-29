let nb_clique = 0;
let button = document.getElementById('load_more_tricks_button');
let tricks_list = document.getElementById('tricks-card-list');
let html_list;

function loadFigure()
{
    
    let max_res = 4 + nb_clique * 4;
    const root = 'http://' + location.hostname + ':' + location.port;
    html_list = '';
    
    fetch(root + '/figure/liste/' + max_res)
    .then(response => response.text())
    .then(data => {

        dom = new DOMParser();
        html_list = dom.parseFromString(data, "text/html").querySelector("#tricks-card-list").innerHTML;
        tricks_list.innerHTML = html_list;

    })
    .catch(error => {
        console.error(error);
    });
    
    loadConfirmDelete();

}
loadFigure();

button.addEventListener('click', function(){

    nb_clique++;
    loadFigure();

})
    

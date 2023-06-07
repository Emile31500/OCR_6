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
        loadConfirmDelete();

    })
    .catch(error => {
        console.error(error);
    });

}

loadFigure();

button.addEventListener('click', function(){

    nb_clique++;
    loadFigure()
    if (document.querySelectorAll('.tricks-card').length >= 15) {

        document.querySelector('#content-footer').innerHTML = '<a href="#top-button"><svg id="bottom-buton" width="18" height="30"><defs><marker id="arrow" viewBox="0 -5 10 10" refX="5" refY="0" markerWidth="4" markerHeight="4" orient="auto"><path class="cool" d="M0,-5L10,0L0,5" class="arrowHead"></path></marker></defs><line class="cool" x1="9" y1="30" x2="9" y2="8" stroke="teal" stroke-width="4" marker-end="url(#arrow)"></line></svg></a>'
    
    }
})
    

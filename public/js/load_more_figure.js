let nb_clique = 0;
let button = document.getElementById('load_more_tricks_button');
let tricks_list = document.getElementById('tricks-card-list');

button.addEventListener('click', function(){

    nb_clique++;
    let max_res = 3 + nb_clique * 3;
    let web_server = location.hostname + ':' + location.port;
    let response = fetch('http://' + web_server + '/?max_result=' + max_res)
        .then(function(response) {
            return response.text();
        })
        .then(function(html) {

            const parser = new DOMParser();
            const doc = parser.parseFromString(html, 'text/html');
            tricks_list.innerHTML = doc.querySelector('#tricks-card-list').innerHTML;
        
        })
        .then(function(){
            
            let number_card = document.querySelectorAll('.tricks-card').length;
            
            if (number_card < max_res){
        
                button.remove();
        
            }
            loadConfirmDelete();
        });

})


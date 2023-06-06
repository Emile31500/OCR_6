let seeMore = document.querySelector('#see-more-message');
let max = 10;

function loadMessage(maxMessages){

    let message_zone = document.getElementById('message-zone');
    let web_server = location.hostname + ':' + location.port;
    let slug = document.querySelector('#slug').innerHTML;
    let url = 'http://' + web_server + '/message/' + slug;
    let html_message = '';
    
    fetch(url, {
        method: 'POST',
        headers: {"Content-Type": "application/json"},
        body:  JSON.stringify({
            "max_result": maxMessages
          }),
        redirect: 'follow'
    })
    .then(response => response.json())
    .then(data => {
        data.forEach(message => {

            let date = message['date']['date'].slice(0, 19)
            html_message += "<div class='d-flex flex-row message border-top border-bottom m-0 p-3 bg-light bg-gradient'>"
            html_message += "<div class='mx-3 h-100'>";
            html_message += "<div class='lead utilisateur-message'> " + message['nom_utilisateur'] + "</div>";   
            html_message += "<div class='clear small date-message optional-content'>" + date + "</div>";
            html_message += "</div> <div class='lead corps-message '>" + message['message'] + "</div>  </div>";
        
        });
        if (message_zone.innerHTML != html_message) {

            message_zone.innerHTML = html_message
            message_zone.scrollTop = message_zone.scrollHeight;
        }
    })
    .catch(error => {
        console.error(error);
    });
}

loadMessage(max);

let message_zone = document.getElementById('message-zone');
message_zone.scrollTop = message_zone.scrollHeight;

seeMore.addEventListener('click', function(){

    max += 10;
    loadMessage(max);

});

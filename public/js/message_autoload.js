let message_zone = document.getElementById('message-zone');
message_zone.scrollTop = message_zone.scrollHeight;

function loadMessage(){

    let message_zone = document.getElementById('message-zone');
    let web_server = location.hostname + ':' + location.port;
    let slug = document.querySelector('#slug').innerHTML;
    let url = 'http://' + web_server + '/message/' + slug;
    let html_message = '';

    fetch(url)
    .then(response => response.json())
    .then(data => {
        data.forEach(message => {

            let date = message['date']['date'].slice(0, 19)
            html_message += "<div class='d-flex flex-row message border-top border-bottom m-0 p-3 bg-light bg-gradient'>"
            html_message += "<div class='mx-3' style=' height: 100%;'>";
            html_message += "<div class='lead utilisateur-message' style='font-weight: 500; min-width: 100px;'> " + message['nom_utilisateur'] + "</div>";   
            html_message += "<div class='clear small date-message'>" + date + "</div>";
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

loadMessage();
setInterval(loadMessage, 2000);

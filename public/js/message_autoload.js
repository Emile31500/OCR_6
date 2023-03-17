let message_zone = document.getElementById('message-zone');
message_zone.scrollTop = message_zone.scrollHeight;

function loadMessage(){

    let message_zone = document.getElementById('message-zone');
    let web_server = location.hostname + ':' + location.port;
    let slug = document.querySelector('#slug').innerHTML;
    let url = 'http://' + web_server + '/figure/' + slug;

    let response = fetch(url)
    .then(function(response) {
        return response.text();
    })
    .then(function(html) {

        const parser = new DOMParser();
        const doc = parser.parseFromString(html, 'text/html');
        if (message_zone.innerHTML != doc.querySelector('#message-zone').innerHTML) {

            message_zone.innerHTML = doc.querySelector('#message-zone').innerHTML
            message_zone.scrollTop = message_zone.scrollHeight;
        }
        

    })
}

setInterval(loadMessage, 2000);




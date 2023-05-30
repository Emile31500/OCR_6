let slug = document.querySelector("#slug").innerHTML;
let right_message = document.querySelector("#message_message");
let message_form = document.querySelector('#message-form')
let web_server = location.hostname + ':' + location.port;
let url = 'http://' + web_server + '/figure/' + slug;

message_form.addEventListener('submit', function(event){

    event.preventDefault();
    let data = new FormData(this);

    let response = fetch(url, {

        method: 'POST',
        body: data

    }).then(function(response) {
        if (response.ok) {
            right_message.value = '';
            return response.text();
        } else {
        throw new Error('Network response was not ok.');
        }
    })

});



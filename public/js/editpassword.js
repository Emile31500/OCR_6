let password = document.getElementById('edit_pssw_form_password');
let confirmPassword = document.getElementById('edit_pssw_form_passwordConf');
let password_edit_form = document.getElementById('password-edit-form');
let status_message = document.getElementById('status_message');

password_edit_form.addEventListener("submit", function(event){

    event.preventDefault();
    
    if (password.value != confirmPassword.value) {

        status_message.classList.remove("d-none");
        status_message.classList.remove("d-inline");
        status_message.innerHTML = "Les deux mots de passe ne sont pas identique. Veuillez sélectionner un mot de passe valide";
        return false;
    }


    let web_server = location.hostname + ':' + location.port;


    let data = new FormData(password_edit_form);
    
    let response = fetch('http://' + web_server + '/modification-mot-de-passe"', {
        method: 'POST',
        body: data
    })
        .then(response => response.json())
        .then(data => console.log(data))
        .catch(error => console.error(error));

    console.log(response);

});

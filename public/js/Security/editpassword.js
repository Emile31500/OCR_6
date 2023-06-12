let password = document.getElementById('edit_pssw_form_password');
let confirmPassword = document.getElementById('edit_pssw_form_passwordConf');
let password_edit_form = document.getElementById('password-edit-form');
let status_message = document.getElementById('status_message');
"0123456789";
"azertyuiopqsdfghjklmwxcvbn";
"AZERTYUIOPQSDFGHJKLMWXCVBN";

function isPasswordValid(strg){

    if (strg.lenght > 64 || strg.lenght < 8){

        return false;
        
    } else if (/[a-z]/.test(strg) == false){

        return false;
        
    }  else if (/[A-Z]/.test(strg) == false){

        return false;
        
    }  else if (/[0-9]/.test(strg) == false){

        return false;
        
    }

    return true;
}

password_edit_form.addEventListener("submit", function(event){

    event.preventDefault();
    
    if (password.value != confirmPassword.value) {

        status_message.classList.remove("d-none");
        status_message.classList.remove("d-inline");
        status_message.innerHTML = "Les deux mots de passe ne sont pas identique. Veuillez sélectionner un mot de passe valide";
        return false;

    } else if (isPasswordValid(password.value) == false) {

        status_message.classList.remove("d-none");
        status_message.classList.add("d-inline");
        status_message.innerHTML = "Votre mot de passe n'est pas valide, il doit contenir des majuscules, des minuscules, des chiffres et faire entre 8 et 64 carctères inclue.";
        return false;
        

    } else {

        if (status_message){
            status_message.remove();
        }
        password_edit_form.submit();

    }

});

let btn;
let confirmBtn;
let figure;
let url;
let slug;
const rootSite = window.location.protocol + "//" + window.location.hostname + (window.location.port ? ':' + window.location.port : '');


function loadConfirmDelete(){

    btn = document.querySelectorAll('.del-figure-btn');
    confirmBtn = document.querySelector("#confirm-del-figure");

    btn.forEach(button => {
        
        button.addEventListener('click', (event) =>{

            event.preventDefault();
            figure = button.getAttribute("link");
            slug = button.getAttribute("slug");
            url = rootSite + figure;
            confirmBtn.setAttribute("href", url);
            
    
            confirmBtn.addEventListener('click', func = function(){

                fetch(url, {
                    method: "DELETE",
                    headers: {
                        "Content-Type": "application/json"
                    }
                })
                .then(response => response.json())
                .then(data => {
                
                    if (data["status"] === true) {

                        document.querySelector("#tricks-lmnt-"+slug).remove();

                    }

                })
                .catch(error => {
                    console.log(error);
                });

                document.querySelector("#colse-del-modal").click();
                confirmBtn.removeEventListener("click", func);

            });
        
        });
    });
}


        







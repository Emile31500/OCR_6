let btn;
let confirmBtn;
let figure;
let url;
let slug;

function loadConfirmDelete(){

    const rootSite = window.location.protocol + "//" + window.location.hostname + (window.location.port ? ':' + window.location.port : '');
    btn = document.querySelectorAll('.del-figure-btn');
    confirmBtn = document.querySelector("#confirm-del-figure");

    btn.forEach(button => {

        button.addEventListener('click', function(event){
            
            figure = button.getAttribute("link");
            slug = button.getAttribute("slug")
            url = rootSite + figure;
            confirmBtn.setAttribute("href", url);
            

            confirmBtn.addEventListener('click', func = function(){

                fetch(url)
                .then(response => response.json())
                .then(data => {
                    
                    if (data["status"] === true) {

                        document.querySelector(".tricks-col."+slug+"").remove();

                    }

                }).catch(error => {

                      console.error(error);

                });

                document.querySelector("#colse-del-modal").click();
                confirmBtn.removeEventListener("click", func);

            });

        });
        
    });
}

loadConfirmDelete(); 





console.log("linked")


for (let i = 0; i < lght; i++){

    console.log(i);
    btn[i].addEventListener('click', function(event){

        event.preventDefault();
        figure = btn[i].getAttribute("link");
        slug = btn[i].getAttribute("slug");
        console.log("figure : " + figure + ", slug : "+ slug);
        url = rootSite + figure;
        confirmBtn.setAttribute("href", url);
        

        // confirmBtn.addEventListener('click', func = function(){

        //     fetch(url)
        //     .then(response => response.json())
        //     .then(data => {
                
        //         if (data["status"] === true) {

        //             document.querySelector(".tricks-col."+slug+"").remove();

        //         }

        //     }).catch(error => {

        //           console.error(error);

        //     });

        //     document.querySelector("#colse-del-modal").click();
        //     confirmBtn.removeEventListener("click", func);

        // });
    
    });
}
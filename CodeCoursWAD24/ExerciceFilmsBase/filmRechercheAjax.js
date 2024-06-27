const btnRecherche = document.getElementById("btnRecherche");
const termRecherche = document.getElementById("termRecherche");

const formHTML = document.getElementById ("formHTML");

termRecherche.addEventListener ("keyup", function (){
    // const terme = termRecherche.value;

    // l'objet FormData contient les données du form choisi
    let formData = new FormData(formHTML);

    let xhr = new XMLHttpRequest ();

    xhr.onreadystatechange = function (){
        if (xhr.readyState == 4){
            let arrayFilms = JSON.parse (xhr.responseText);
            // ici on devra générer l'HTML pour chaque film dans le DOM
            console.log (arrayFilms); 

        }
    }

    xhr.open ("POST", "./filmRechercheAjaxTraitement.php");
    xhr.send (formData); // on envoie l'objet formData, avant on était en train d'envoyer null

});

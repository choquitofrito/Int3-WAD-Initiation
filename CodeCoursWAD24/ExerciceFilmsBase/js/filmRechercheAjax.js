const btnRecherche = document.getElementById("btnRecherche");
const termRecherche = document.getElementById("termRecherche");
const divFilms = document.getElementById("divFilms");


const formHTML = document.getElementById("formHTML");

termRecherche.addEventListener("keyup", function () {



    if (termRecherche.value.length == 0){
        divFilms.innerHTML = "";
        return;
    }

    // à chaque recherche on vide le div
    divFilms.innerHTML = "";

    // l'objet FormData contient les données du form choisi
    let formData = new FormData(formHTML);

    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            let arrayFilms = JSON.parse(xhr.responseText);
            // ici on devra générer l'HTML pour chaque film dans le DOM
            console.log (arrayFilms); 

            // on parcourt les films
            // chaque film est un objet
            arrayFilms.forEach(objetFilm => {
                // divFilms.innerHTML += objetFilm.titre;

                divFilms.innerHTML +=`
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="./uploads/${objetFilm.image}" alt="Image not found">
                    <div class="card-body">
                        <h5 class="card-title"><a href="./detailFilm.php?idFilm=${objetFilm.id}">${objetFilm.titre}</a></h5>
                        <p class="card-text">${objetFilm.description}</p>
                    </div>
                </div>`;


            });


        }
    }

    xhr.open("POST", "./filmRechercheAjaxTraitement.php");
    xhr.send(formData); // on envoie l'objet formData, avant on était en train d'envoyer null

});

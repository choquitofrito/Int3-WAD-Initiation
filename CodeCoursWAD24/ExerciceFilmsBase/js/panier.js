const btnRajouterPanier = document.getElementById ("btnRajouterPanier");

btnRajouterPanier.addEventListener ("click", function (){
    // Récupérer la valeur du select 'quantite'
    let quantite = document.getElementById ("selectQuantite").value;
    let idFilm = document.getElementById("selectQuantite").dataset.idfilm;

    // console.log ("quantite: " + quantite);
    // console.log ("idFilm: " + idFilm);

    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function (){
        if (xhr.readyState == 4){
            if (xhr.status === 200 || xhr.status === 304){
                // afficher la reponse
                console.log ("RESPONSE:");
                console.log (xhr.responseText);
            }
            else if (xhr.status === 404){
                console.log ("Not found");
                // window.location.href = "./pageIntrouvable.php";
            }

        }
    }

    let formData = new FormData();
    formData.append ("idFilm", idFilm);
    formData.append ("quantite", quantite);
    console.log (formData);

    xhr.open ("POST","./rajouterPanier.php");
    xhr.send(formData);

});




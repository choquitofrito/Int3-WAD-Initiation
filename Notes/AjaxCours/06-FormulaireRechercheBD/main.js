// événement pour le champ de recherche par titre
document.getElementById("txtTitre").addEventListener("keyup", (event) => {
    let val = event.target.value;
    console.log(val);

    let xhr = new XMLHttpRequest();
    let formulaire = new FormData(document.getElementById("formulaireHTML"));

    xhr.onreadystatechange = (event) => {
        if (xhr.readyState === 4) {
            if (xhr.status === 200 || xhr.status === 304) {
                console.log("tout ok");
            }
            else {
                console.log("erreur: " + xhr.status);
            }
        }
    };

    xhr.open("POST", "./traitementRecherche.php");
    xhr.send(formulaire);
});
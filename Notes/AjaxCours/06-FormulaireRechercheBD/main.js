// événement pour le champ de recherche par titre
document.getElementById ("txtTitre").addEventListener ("keyup", (event)=> {
    let val = event.target.value;
    console.log (val);

    let xhr = new XMLHttpRequest();
    let formulaire = new FormData(document.getElementById("formulaireHTML"));
    
    xhr.onreadystatechange = (event) => {
        

    };


    xhr.open ("POST", "./traitementRecherche.php");
    xhr.send (formulaire);
});
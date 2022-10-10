
// document.getElementById("afficher").addEventListener ("click", function (evenement) {
    
// })

document.getElementById("afficher").addEventListener ("click", (evenement) => {
    let xhr = new XMLHttpRequest();
    xhr.open ("GET","./traitement.php");
    xhr.send (null);
    xhr.onreadystatechange = function (){
        // console.log (xhr.readyState); // la propriété porte le nom "readyState"
        if (xhr.readyState == 4){
            document.getElementById("contenuReponse").innerHTML = xhr.responseText;
        }
    }
})
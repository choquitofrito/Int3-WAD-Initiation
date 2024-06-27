let btn1 = document.getElementById ("btn1");
let div1 = document.getElementById ("div1");


btn1.addEventListener ("click", function (){
    console.log ("btn1 click");

    let xhr = new XMLHttpRequest ();

    xhr.onreadystatechange = function (){
        // console.log ("changement état");     
        // console.log (xhr.readyState);   

        if (xhr.readyState === 4){
            console.log ("appel complet, état 4");
            console.log ("le resultat:" + xhr.responseText);
            div1.innerText = xhr.responseText;
        }
    }


    // c'est ici qu'on fait l'appel au serveur
    // cet appel est non bloquant
    xhr.open ("GET", "./exemple1Traitement.php");
    xhr.send();

    console.log ("On continue");


});
let btn1 = document.getElementById ("btn1");
let resultat = document.getElementById ("resultat");

btn1.addEventListener ("click", function(){
    

    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function (){
        if (xhr.readyState === 4){
            console.log ("on a fini");
            // resultat.innerText = xhr.responseText;
            let arrayObjets = JSON.parse (xhr.responseText);
            console.log (arrayObjets);
            
            // afficher un élément
            // resultat.innerText = "Hello " + arrayObjets[1].prenom + " " + arrayObjets[1].nom;
            
            // afficher la liste de prénoms dans un ul li
            // à l'intériur du div

            // vider le div avant de rajouter
            resultat.innerHTML = "";

            let ul = document.createElement ("ul");

            for (let i in arrayObjets){
                let li = document.createElement("li");
                li.textContent = arrayObjets[i].prenom;
                ul.appendChild (li);
                // console.log (arrayObjets[i]);
            }
            // rajouter le ul au div
            resultat.appendChild(ul);

            

        }
    };

    xhr.open ("GET","./exemple2Traitement.php");
    xhr.send();
});
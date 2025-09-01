<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Quand on clique sur le bouton on affiche une liste contenant de noms<br>
    <form id="form">
        <button id="btnAfficher">Afficher</button>
    </form>
    <div id="divListeNoms">Ici la liste</div>
    
    <script>

        const btnAfficher = document.querySelector ("#btnAfficher");
        const divListeNoms = document.querySelector ("#divListeNoms");

        

        btnAfficher.addEventListener ("click", (event) => {
            event.preventDefault();
            console.log ("click btnSubmit");

            // init le div
            divListeNoms.innerHTML = "";


            let xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function (){

                if (xhr.readyState == 4){
                    console.log (xhr.responseText);
                    let arrayNoms = JSON.parse (xhr.responseText);

                    // créer la liste
                    let ul = document.createElement ("ul");
                    // rajouter chaque nom sous forme de li au ul
                    arrayNoms.forEach ((nom) => {
                        let li = document.createElement ("li");
                        li.innerText = nom;
                        ul.appendChild(li);
                    });

                    // rajouter le ul au div
                    divListeNoms.appendChild (ul);

                    console.log (arrayNoms);
                }
            }

            // on doit envoyer un formulaire!
            xhr.open ("POST", "./formTraitement.php");
            xhr.send (null);

            // console.log (xhr.responseText);

        });
 

    </script>


</body>
</html>
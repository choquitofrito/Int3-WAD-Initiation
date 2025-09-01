<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="formFilm">
        Titre<input type="text" name="titre">
        <br><input type="submit" value="Envoyer" id="btnSubmit">
    </form>
    <div id="divResponse">Ici on aura la réponse</div>


    <script>
        const btnSubmit = document.querySelector ("#btnSubmit");
        const divResponse = document.querySelector ("#divResponse");
        const formFilm = document.querySelector ("#formFilm");

        // Fonctionnement AJAX
        btnSubmit.addEventListener ("click", (event) => {
            event.preventDefault();
            console.log ("click btnSubmit");

            let xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function (){

                if (xhr.readyState == 4){
                    console.log ("Réponse: ");
                    console.log (xhr.responseText);
                    // divResponse.innerHTML = xhr.responseText;
                }
            }



            // on doit envoyer un formulaire!
            let unForm = new FormData (formFilm);
            xhr.open ("POST", "./formFilmTraitement.php");
            xhr.send (unForm);

            // console.log (xhr.responseText);

        });
 

    </script>


</body>
</html>
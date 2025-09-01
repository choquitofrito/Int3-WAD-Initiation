<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./formFilmTraitement.php" method="POST">
        Titre<input type="text" name="titre">
        <br>Duree<input type="number" name="duree">
        <br><input type="submit" value="Envoyer" id="btnSubmit">
    </form>
    <script>
        const btnSubmit = document.querySelector ("#btnSubmit");
        // Fonctionnement AJAX
        btnSubmit.addEventListener ("click", (event) => {
            event.preventDefault();
            console.log ("click btnSubmit");

            let xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function (){
                // console.log ("l'état de xhr change!!");
                // console.log (xhr.readyState);
                if (xhr.readyState == 4){
                    console.log ("Réponse: ");
                    console.log (xhr.responseText);
                }
            }

            xhr.open ("GET", "./formFilmTraitement.php");
            xhr.send (null);

            // console.log (xhr.responseText);

        });
 

    </script>


</body>
</html>
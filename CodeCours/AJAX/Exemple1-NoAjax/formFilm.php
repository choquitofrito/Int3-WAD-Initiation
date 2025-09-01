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
        <br><input type="submit" value="Envoyer">
    </form>
    <script>
        setTimeout (function (){
            console.log ("callback lancé!");
        }, "4000");

        setTimeout (function (){
            console.log ("callback 2 lancé!");
        }, "2000");


        console.log ("Le code continue, on n'attend pas le timeout");

        let tableau = [];
        for (i=0; i<300000;i++){
            tableau.push(i);
        }

    </script>


</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Tapez les données du film</h3>
    <form action="./filmInsererTraitement.php" method="POST">
        <div>
            <label for="titre">Titre</label>
            <input type="text" id="titre" name="titre">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" id="description" name="description">
        </div>
        <div>
            <label for="duree">Duree</label>
            <input type="number" id="duree" name="duree">
        </div>
        <div>
            <label for="image">Image</label>
            <input type="file" id="image" name="image">
        </div>
        <div>
            <input type="submit" value="Envoyer" id="envoyer">
        </div>
    </form>

</body>




</html>
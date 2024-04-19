<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function afficherTitre(string $texte)
    {
        print("<h1><i>" . $texte . "</i></h1>");
    }

    afficherTitre("Je suis le titre");
    ?>

    <style>
        h1 {
            color: blue;
        }
    </style>


</body>

</html>
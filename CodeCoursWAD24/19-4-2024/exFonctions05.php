<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function afficherTitre(string $texte, string $couleur)
    {
        print("<p style='color:$couleur'>$texte</p>");
    
    
    }

    afficherTitre("Je suis le titre", "green");
    ?>

   



</body>

</html>






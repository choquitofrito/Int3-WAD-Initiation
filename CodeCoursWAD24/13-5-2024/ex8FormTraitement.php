<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $prix = $_POST['prix']; // filtrer
    $tauxTva = $_POST['tauxTva']; // filtrer

    if (
        filter_var($prix, FILTER_VALIDATE_FLOAT) == false
        ||
        filter_var($tauxTva, FILTER_VALIDATE_FLOAT) == false
    ) {
        die("Arretez de chipoter sur le frontend de mon site");
    }
    $prixTVAC = $prix * $tauxTva;
    print("Le prix TVAC est " . $prixTVAC
    );
    ?>
</body>

</html>
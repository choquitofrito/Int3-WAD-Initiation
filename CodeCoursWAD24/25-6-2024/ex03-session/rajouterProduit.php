<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();

    // Récuperer le produit choisi par l'utilisateur
    $produitChoisi = $_POST['produit'];

    print ("Le produit choisi est : " . $produitChoisi);

    

    // Rajouter le produit dans la session
    $_SESSION['nomProduit'] = $produitChoisi;


    var_dump ($_SESSION);


    ?>

</body>

</html>
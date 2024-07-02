<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "./nav.php";
    include "./checkSession.php";

    var_dump ($_SESSION['panier']);

    // connecter à la BD
    
    print ("IDs FILMS");
    // on obtient tous les ids dans un array
    $ids = array_keys($_SESSION['panier']);

    var_dump ($ids);

    // on crée un string de la forme : 3,4,7,2... etc...
    $stringIds = implode (",", $ids);
    print ("string ids: " . $stringIds);

    $sql = "SELECT * FROM film WHERE film.id IN (" . $stringIds . ")"; 
    // $sql = "SELECT * FROM film WHERE ";


    ?>
</body>

</html>
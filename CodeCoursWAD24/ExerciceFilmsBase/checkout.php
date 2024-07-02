<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" type="text/css" />
    <title>Document</title>
</head>

<body>/
    <?php
    include "./nav.php";
    include "./checkSession.php";

    var_dump ($_SESSION['panier']);

    // connecter à la BD
    include "./db/config.php";

    try {
        // essayer de connecter
        $cnx = new PDO(DSN, USERNAME, PASSWORD);
    } catch (Exception $e) {
        // problème de connexion!!
        // instructions à suivre en cas de 
        // problème de connexion
        print("<h3>Un problème est survenu</h3>");
        print("<img src='./image.jpg'>");
        print("<a href='./accueil.php'>Accueil</a>");
        // var_dump ($e->getMessage());
        die();
    }

    print ("IDs FILMS");
    // on obtient tous les ids dans un array
    $ids = array_keys($_SESSION['panier']);

    var_dump ($ids);

    // on crée un string de la forme : 3,4,7,2... etc...
    $stringIds = implode (",", $ids);

    print ("string ids: " . $stringIds);
    $sql = "SELECT * FROM film WHERE film.id IN (" . $stringIds . ")"; 

    $stmt = $cnx->prepare ($sql);
    $stmt->execute();

    $tabFilms = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // var_dump ($tabFilms);

    // récupérer le panier de la session (facilité)
    $panier = $_SESSION['panier'];

    foreach ($tabFilms as $film){
        // afficher les données du film (ex: titre, image)
        print ("<div>");
        print ("<h3>". $film['titre'] . "</h3>");
        print ("<img class='affiche' src='./uploads/" . $film['image'] . "'>");
        print ("</div>");
        // afficher la quantité qui correspond à ce film dans le panier
        print ("Qté: " . $panier[$film['id']]);

    }

    

    ?>
</body>

</html>
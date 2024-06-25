<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <?php
    include "./checkSession.php";
    include "./nav.php";
    ?>
    <?php
    // var_dump ($_POST);

    // 1. Obtenir le terme de la recherche (du form)
    $termeRecherche = $_POST['termeRecherche'];

    // 2. Connecter à la BD
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

    // 3. Créer une requête
    $sql = "SELECT * FROM film WHERE titre LIKE :termeRecherche";

    // 4. Préparer
    $stmt = $cnx->prepare($sql);

    // 5. Donner des valeurs aux paramètres (placeholders)
    $stmt->bindValue(":termeRecherche", "%" . $termeRecherche . "%", PDO::PARAM_STR);

    // 6. Executer la requête
    $stmt->execute();

    // 7. Obtenir les données
    $arrayFilms = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($arrayFilms);

    // 8. Afficher les données
    print("<ul>");
    foreach ($arrayFilms as $film) {
        print("<hr>");
        print("<li>Titre: " . $film['titre'] . "</li>");
        print("<li>Description: " . $film['description'] . "</li>");
        print("<li>Durée: " . $film['duree'] . "</li>");
    }
    print("</ul>");


    ?>
</body>

</html>
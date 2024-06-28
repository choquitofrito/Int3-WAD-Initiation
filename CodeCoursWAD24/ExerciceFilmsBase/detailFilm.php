<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">

    <!-- plugin étoiles -->
    <script src="https://jsuites.net/v4/jsuites.js"></script>
    <link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />

    <title>Document</title>
</head>

<body>
    <!-- Afficher les détails du film et permettre de mettre une note -->

    <?php

    include "./checkSession.php";
    include "./nav.php";

    // obtenir les données du formulaire
    // (dans ce cas, l'id du film)
    $idFilm = $_GET['idFilm'];

    // Connecter à la BD (PDO)
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

    $sql = "SELECT * FROM film WHERE id=:id";

    $stmt = $cnx->prepare($sql);
    $stmt->bindValue(":id", $idFilm);

    $stmt->execute();

    $film = $stmt->fetch(PDO::FETCH_ASSOC); // le prémier (et unique) résultat de la requête

    print("<h1>" . $film['titre'] . "</h1>");
    print("<p>Description: " . $film['description'] . "</p>");
    print("<p>Durée: " . $film['duree'] . "</p>");
    print("<img class='affiche' src='./uploads/" . $film['image'] . "'>");

    print ("<div>Valoration Utilisateurs
            <div id='divNote'></div>
            </div>");

    ?>

    <script>
    // Création des étoiles dans le div
    let divNote = document.getElementById("divNote");
    let menuEtoiles = jSuites.rating (divNote, {
        value: 1,
        tooltip: ['Horrible', 'Moyen', 'Plutôt bien', 'Très bon', 'Génial']
    });

    </script>
</body>

</html>
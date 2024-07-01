<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>
    <?php
        include "./checkSession.php";

        include "./nav.php";


    ?>

    <h1>Bienvenue
        <?php
            print ($_SESSION['nomUtilisateur']);
        ?>
    </h1>
    <!-- Afficher la liste de films  -->

    <?php
    // 1. Connecter à la BD
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

    // 2. Créer la requête
    $sql = "SELECT * FROM film ORDER BY id DESC LIMIT 3";
    // $sql = "SELECT *, AVG(note.valeur) as moyenne FROM film LEFT JOIN note ON film.id = note.idFilm group by film.id ORDER BY film.id DESC LIMIT 3";


    // 3. Préparer la requête
    $stmt = $cnx->prepare ($sql);

    // 4. Lancer la requête
    $stmt->execute();


    // 5. Obtenir le résultat (les films dans ce cas)
    // et les mettre dans un array
    $arrayFilms = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // 6. Afficher les données de la manière choisie
    // var_dump ($arrayFilms);
    
    print ("<ul>");
    foreach ($arrayFilms as $film){
        print ("<hr>");
        print ("<li>Titre: " . $film['titre'] . "</li>");
        print ("<li>Description: " . $film['description'] . "</li>");
        print ("<li>Durée: " . $film['duree'] . "</li>");
        print ("<img class='affiche' src='./uploads/" . $film['image'] . "'>");

       
    }
    print ("</ul>");

    ?>
</body>

</html>
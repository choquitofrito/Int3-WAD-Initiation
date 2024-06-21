<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav>
        <a href="./filmInserer.php">Insérer un film</a>
        <a href="./filmRecherche.php">Chercher un film</a>
    </nav>
    <h1>Bienvenue!</h1>
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


    // 3. Préparer la requête
    $stmt = $cnx->prepare ($sql);

    // 4. Lancer la requête
    $stmt->execute();


    // 5. Obtenir le résultat (les films dans ce cas)
    // et les mettre dans un array
    $arrayFilms = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // 6. Afficher les données de la manière choisie
    var_dump ($arrayFilms);
    

    ?>
</body>

</html>
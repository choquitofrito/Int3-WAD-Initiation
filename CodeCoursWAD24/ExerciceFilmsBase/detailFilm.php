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

    // requête pour obtenir la moyenne (valoration de tous les utilisateurs)
    $sql = "SELECT *, AVG(valeur) AS moyenne FROM film LEFT JOIN note ON film.id = note.idFilm WHERE film.id = :id";

    $stmt = $cnx->prepare($sql);
    $stmt->bindValue(":id", $idFilm);

    $stmt->execute();
    $filmMoyenne = $stmt->fetch(PDO::FETCH_ASSOC); // le prémier (et unique) résultat de la requête

    // requête pour obtenir la note (valeur) du film pour l'utilisateur connecté
    // on doit obtenir l'utilisateur de la session
    $idUtilisateur = $_SESSION['idUtilisateur'];

    $sql = "SELECT * FROM note WHERE note.idUtilisateur=:idUtilisateur AND note.idFilm = :idFilm";
    $stmt = $cnx->prepare($sql);
    $stmt->bindValue(":idUtilisateur", $idUtilisateur);
    $stmt->bindValue(":idFilm", $idFilm);

    $stmt->execute();
    // $filmUtilisateur contiendra l'array d'un film ou false
    $filmUtilisateur = $stmt->fetch(PDO::FETCH_ASSOC);


    print("<h1>" . $filmMoyenne['titre'] . "</h1>");
    print("<p>Description: " . $filmMoyenne['description'] . "</p>");
    print("<p>Durée: " . $filmMoyenne['duree'] . "</p>");
    print("<img class='affiche' src='./uploads/" . $filmMoyenne['image'] . "'>");

    print("<div>Valoration Utilisateurs
            <div data-moyenne='" . $filmMoyenne['moyenne'] . "' id='divNote'></div>
            </div>");

    print("<div>Votre note:
            <div data-idfilm=" . $idFilm .
        " data-valeur='" . ($filmUtilisateur ? $filmUtilisateur['valeur'] : "") . "' id='divNoteUtilisateur'></div>
            <div>" . ($filmUtilisateur ? "" : "Pas de note") .
        "</div>");

    // Contrôles pour le panier 
    print ("<br><button id='btnRajouterPanier'>Rajouter</button>");
    print ("<select data-idfilm=" . $idFilm . 
            " id='quantite'>");
    for ($i = 1; $i <= 50; $i++){
        print ("<option value=" . $i . ">" . $i . "</option>");
    }
    print ("</select>");



    ?>
    <script src="./js/notes.js"></script>
    <script src="./js/panier.js"></script>
</body>

</html>
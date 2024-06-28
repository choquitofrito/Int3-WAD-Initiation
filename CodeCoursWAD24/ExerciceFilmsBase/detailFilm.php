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

    $sql = "SELECT *, AVG(valeur) AS moyenne FROM film INNER JOIN note ON film.id = note.idFilm WHERE film.id = :id";

    $stmt = $cnx->prepare($sql);
    $stmt->bindValue(":id", $idFilm);

    $stmt->execute();

    $film = $stmt->fetch(PDO::FETCH_ASSOC); // le prémier (et unique) résultat de la requête

    print("<h1>" . $film['titre'] . "</h1>");
    print("<p>Description: " . $film['description'] . "</p>");
    print("<p>Durée: " . $film['duree'] . "</p>");
    print("<img class='affiche' src='./uploads/" . $film['image'] . "'>");

    // print ("moyenne: " . $film['moyenne']);

    print("<div>Valoration Utilisateurs
            <div data-moyenne='" . $film['moyenne'] . "' id='divNote'></div>
            </div>");

    print("<div>Votre note:
            <div data-valeur='" . $film['valeur'] . "' id='divNoteUtilisateur'></div>
            </div>");

    ?>

    <script>
        // Création des étoiles dans le div (Valoration moyenne de tous les utilisateurs)
        let divNote = document.getElementById("divNote");

        let menuEtoiles = jSuites.rating(divNote, {
            value: divNote.dataset.moyenne,
            tooltip: ['Horrible', 'Moyen', 'Plutôt bien', 'Très bon', 'Génial'],
        });

        // Création des étoiles dans le div (Valoration de cet Utilisateur pour ce Film)
        let divNoteUtilisateur = document.getElementById("divNoteUtilisateur");

        let menuEtoilesUtilisateur = jSuites.rating(divNoteUtilisateur, {
            value: divNoteUtilisateur.dataset.valeur,
            tooltip: ['Horrible', 'Moyen', 'Plutôt bien', 'Très bon', 'Génial'],
            onchange: stockerNote
        });

        // faire appel AJAX pour insérer / mettre à jour
        // la note de cet utilisateur pour ce film
        function stockerNote() {

            // Vérifier s'il s'agit d'une nouvelle note
            let nouvelleNote = true;
            if (divNoteUtilisateur.data.valeur !== "") {
                nouvelleNote = false; // ce film est déjà noté par cet utilisateur
            }

            let xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4) {

                    console.log("fini");
                }
            }
            // on doit envoyer:
            // - s'il s'agit d'une nouvelle note
            // - la note
            xhr.open("GET", "./noteUpdate.php");
            xhr.send();
        }
    </script>
</body>

</html>
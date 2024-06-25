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
    Voici la page d'insertion

    <?php
    var_dump($_POST);
    var_dump($_FILES);

    // upload du fichier

    // 1. Créer un nom unique pour le fichier
    $dossier = "./uploads";
    $nomFichier = uniqid() . date("h-i-s") .
        $_FILES['image']['name'];

    // nom complet du fichier, précedé du nom du dossier
    $cheminComplet = $dossier . "/" . $nomFichier;

    // 2. Deplacer le fichier temporaire et lui donner
    // le nom choisi
    move_uploaded_file($_FILES['image']['tmp_name'], $cheminComplet);

    // fin upload fichier

    // 1. Obtenir les données du formulaire 
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $duree = $_POST['duree'];

    // 2. Connecter à la BD (PDO)
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

    // 3. Créer une requête du type INSERT
    $sql = "INSERT INTO film (id, titre, description,duree,image) VALUES (null, :titre, :description, :duree, :image)";

    // 4. Préparer la requête
    $stmt = $cnx->prepare($sql); // pbjet PDOStatement

    $stmt->bindValue(":titre", $titre);
    $stmt->bindValue(":description", $description);
    $stmt->bindValue(":duree", $duree);
    $stmt->bindValue(":image", $nomFichier); // on stocke le nom de fichier qu'on vient de donner au fichier uploadé

    // 5. Lancer la requête
    $stmt->execute();



    ?>
</body>

</html>
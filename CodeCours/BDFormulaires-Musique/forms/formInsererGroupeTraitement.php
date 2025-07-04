<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // récuperer les données du form
    var_dump ($_POST);
    var_dump ($_FILES);

    // créer un nom pour le fichier
    $dossier = "../images";
    $nomFichierDisque = $dossier . "/". uniqid() . date("y-m-d") . $_FILES['photoGroupe']['name'];

    move_uploaded_file($_FILES['photoGroupe']['tmp_name'] , $nomFichierDisque);

    var_dump ($nomFichierDisque);
    die();





    // connecter à la bd
    include "../db/config.php";

    $cnx = new PDO (DSN, USER, PASSWORD);

    // INSERT INTO `groupes` (`id`, `nom`, `annee_formation`, `lienImage`, `style_id`) VALUES (NULL, 'Michael Jackson', '1980', '', '5'); 

    $sql = "INSERT INTO groupes (id, nom, annee_formation, lienImage, style_id) VALUES " . 
        "(NULL, :nom, :annee_formation, :lienImage, :style_id)";
    
    $stmt = $cnx->prepare($sql);

    $stmt->bindValue (":nom", $_POST['nom'] );
    $stmt->bindValue (":lienImage", "" ); // on fera cette partie après
    $stmt->bindValue (":annee_formation", $_POST['annee_formation'], PDO::PARAM_INT );
    $stmt->bindValue (":style_id", $_POST['style_id'], PDO::PARAM_INT );

    $stmt->execute();

    var_dump ($stmt->errorInfo());

    ?>
</body>
</html>
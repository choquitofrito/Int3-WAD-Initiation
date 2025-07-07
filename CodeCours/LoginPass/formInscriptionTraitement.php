<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    var_dump ($_POST);


    // recevoir les données du form d'inscription
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rePassword = $_POST['rePassword'];

    // nettoyer et vérifier les données (ignoré pour le moment)

    // enregistrer l'user dans la bd
    // 1. Inclure la config de la bd
    include "./db/config.php";

    // 2. Connecter à la BD 
    try {
        $cnx = new PDO (DSN, USER, PASSWORD);
    }
    catch (Exception $e){
        echo $e->getMessage();
        die();
    }

    // 3. Créer la requête (INSERT) dans un string
    $sql = "INSERT INTO stagiaire (id, email, nom, dateNaissance, hobby, password)" .
            " VALUES (null, :email, :nom, :dateNaissance, :hobby, :password)";

    // 4. Préparer la requête
    $stmt = $cnx->prepare ($sql);

    // 5. Bindvalue (donner valeurs aux paramètres)
    $stmt->bindValue(":nom", $nom);
    $stmt->bindValue(":email", $email);
    $stmt->bindValue(":dateNaissance", (new DateTime())->format("Y-m-d"));
    $stmt->bindValue(":hobby", "chanter");
    $stmt->bindValue(":password", $password);

    // 6. Lancer la requête
    $stmt->execute();
    
    // 7. Vérifier s'il y a des érreurs
    var_dump ($stmt->errorInfo());

    ?>
</body>
</html>
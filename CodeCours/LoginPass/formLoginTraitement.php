<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // 1. Obtenir les données du form
    // var_dump ($_POST);
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Chercher l'utilisateur dans la BD
    // et comparer le password saisi avec 
    // le password de la BD
    
    include "./db/config.php";
    try {
        $cnx = new PDO (DSN, USER, PASSWORD);
    }
    catch (Exception $e){
        echo "Érreur de connexion: " . $e->getMessage();
        die();
    }

    $sql = "SELECT nom, email, password FROM stagiaire " .
        "WHERE email=:email";

    $stmt = $cnx->prepare($sql);

    $stmt->bindValue(":email", $email);
    $stmt->execute();

    // on veut juste le 1er résultat: fetch au lieu de fetchAll
    $resultat = $stmt->fetch(PDO::FETCH_ASSOC);
    var_dump ($resultat);

    if ($resultat === false){
        // l'user n'existe pas
        echo "<h4>L'utilisateur n'existe pas</h4>";
        echo "<a href='./formInscription.php'>S'inscrire</a>";
    }
    else {
        // l'user existe, on doit vérifier 
        // les mots de passe
        // $password --> password saisi (form)

        // password qui se trouve dans la BD
        $passwordBD = $resultat['password'];

        var_dump (password_hash($password, PASSWORD_DEFAULT));
        var_dump ($passwordBD);

        if (password_verify($password,$passwordBD)){
            echo "Password ok";
            // on va vers la page
        }
        else {
            echo "Mot de passe incorrecte";
        }
    }

    


    ?>
</body>
</html>
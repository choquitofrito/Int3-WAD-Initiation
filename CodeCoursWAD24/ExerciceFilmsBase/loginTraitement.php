<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // 1. Récuperer les données du form (email et pass)
    $email = $_POST['email'];
    $password = $_POST['password'];

    // 2. Connecter a la BD
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

    // 3. Créer la requête (chercher un utilisateur qui a l'email qu'on a tapé dans le formulaire).
    // Préparer et lancer la requête
    // Obtenir le résultat dans l'array $arrayUtilisateurs
    $sql = "SELECT * FROM utilisateur WHERE email=:email";
    $stmt = $cnx->prepare($sql);
    $stmt->bindValue(":email", $email);
    $stmt->execute();
    $arrayUtilisateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // 4. Si l'utilisateur n'existe pas on arrete le script 
    // et on lui propose de s'inscrire
    if (empty ($arrayUtilisateurs)){
        print ("L'utilisateur n'existe pas<br>");
        print ("<a href='./inscription.php'>S'enregistrer</a>");
        die ();
    }

    var_dump ($arrayUtilisateurs);
    $passwordHashBD = $arrayUtilisateurs[0]['password'];
    
    if (password_verify($password, $passwordHashBD) == false){
        // le password n'est pas bon!
        print ("Utilisateur ou mot de pass incorrectes");
        die();
    }
    else {
        // le password est ok!
        header ("location: ./accueil.php");
    }





    ?>
</body>
</html>
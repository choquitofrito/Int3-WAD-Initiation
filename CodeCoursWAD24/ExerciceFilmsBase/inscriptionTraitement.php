<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // 1. Récuperer les données du formulaire d'inscription
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $image = $_FILES['image'];


    // 2. Connecter à la BD
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

    // EXERCICE: 
    // vérifier d'abord si l'utilisateur existe dans la BD

    // 2.1. Créer la requête pour chercher un utilisateur ayant l'email 
    // reçu du formulaire
    $sql = "SELECT * FROM utilisateur WHERE email=:email";

    // 2.2. Préparer la requête 
    $stmt = $cnx->prepare($sql);
    $stmt->bindValue(":email", $email);
        
    // 2.3. Executer la requête
    $stmt->execute();

    // 2.4. Obtenir l'array résultat avec fetchAll
    $arrayUtilisateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // - vérifier la taille de l'array avec count()
    // - si l'array n'est pas vide, afficher une erreur
    // autrement continuer l'execution pour stocker l'utilisateur
    
    // l'email est déjà pris!!
    if (!empty ($arrayUtilisateurs)){
        print ("L'addresse mail est déjà prise<br>");
        print ("<a href='./accueil.php'>Retourner à l'inscription</a>");
        die();
    }


    // 3. Créer la requête d'insertion (string)
    $sql = "INSERT INTO utilisateur (id, nom, email, password) VALUES (null, :nom, :email, :password)";

    // 3.1. Préparer la requête
    $stmt = $cnx->prepare($sql);
    $stmt->bindValue(":nom", $nom);
    $stmt->bindValue(":email", $email);

    $passwordHash = password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);

    $stmt->bindValue(":password", $passwordHash);

    // 3.2. Lancer (execute) la requête
    $stmt->execute();

    // 3.3. Vérifier si l'inscription à été faite correctement


    ?>

</body>

</html>
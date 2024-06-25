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
    // $sql = "SELECT * FROM utilisateur WHERE email = :email";
    // - préparer la requête et l'executer
    // - obtenir l'array avec fetchAll
    // - vérifier la taille de l'array avec count()
    // - si l'array n'est pas vide, afficher une erreur
    // autrement continuer l'execution pour stocker l'utilisateur




    // 3. Créer la requête d'insertion (string)
    $sql = "INSERT INTO utilisateur (id, nom, email, password) VALUES (null, :nom, :email, :password)";

    // 4. Préparer la requête
    $stmt = $cnx->prepare ($sql);
    $stmt->bindValue(":nom", $nom);
    $stmt->bindValue(":email", $email);

    $passwordHash = password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);



    $stmt->bindValue(":password", $passwordHash);

    // 5. Lancer (execute) la requête
    $stmt->execute();

    // 6. Vérifier si l'inscription à été faite correctement


    ?>

</body>

</html>
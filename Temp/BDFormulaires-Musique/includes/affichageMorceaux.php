<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Ici on aura l'affichage des morceaux du groupe séléctionné 

    <?php
    // Récupérer l'id du groupe sélectionné
    $idGroupe = $_GET['idGroupe'];
    // Obtenir les morceaux du groupe choisi et les afficher
    // SELECT 
    // 0. Inclure la config
    include "../db/config.php";
    // 1. Créer la connexion
    $cnx = new PDO (DSN, USER, PASSWORD);
    // 2. Créer une requête
    $sql = "SELECT * FROM morceaux WHERE groupe_id=:groupe_id";
    // 3. Préparer la requête
    $stmt = $cnx->prepare($sql);
    // 4. Fixer les placeholders (paramètres)
    $stmt->bindValue (":groupe_id", $idGroupe);
    // 5. Executer la requête
    $stmt->execute();
    // 6. Stocker le résultat de la recherche
    // dans un array
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

    var_dump ($res);

    ?>

</body>
</html>
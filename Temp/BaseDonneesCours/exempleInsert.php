<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // script pour insérer dans la BD
    // Chloe, lire, 1/1/2025

    // 0. inclure la config
    include "./db/config.php";

    // 1. Créer un objet de connexion
    $cnx = new PDO (DSN, USER, PASSWORD);

    // 2. Créer une requête
    $sql = "INSERT INTO stagiaire (id, nom, dateNaissance, hobby) VALUES " . 
            "(null, :nom, :dateNaissance, :hobby)";
    
    // 3. Préparer la requête
    $stmt = $cnx->prepare ($sql);

    // 4. Fixer les valeurs pour les placeholders
    $stmt->bindValue(":nom", "Chloé");
    
    $dateNaissance = new DateTime("3-11-1991");
    $dateNaissanceString = $dateNaissance->format("Y-m-d");
    // print ($dateNaissanceString);
    // die();

    $stmt->bindValue(":dateNaissance", $dateNaissanceString);
    $stmt->bindValue(":hobby", "Lire");
    
    // 5. Lancer la requête
    $stmt->execute();

    var_dump ($stmt->errorInfo());



    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion</title>
</head>
<body>
    <?php
    include "./db/config.php";

    $cnx = new PDO (DSN, USERNAME, PASSWORD);

    $sql = "INSERT INTO stagiaire (id, prenom, hobby, idFormation) VALUES (null, 'Marwa', 'chanter', 2)";

    $stmt = $cnx->prepare ($sql);

    $stmt->execute();




    ?>
</body>
</html>
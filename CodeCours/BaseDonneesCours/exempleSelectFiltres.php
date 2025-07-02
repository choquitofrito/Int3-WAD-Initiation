<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple Select Filtres MySql</title>
</head>

<body>
    <?php
    // 0. Inclure la config
    include "./db/config.php";


    // 1. Créer un objet PDO avec la config
    try {
        $cnx = new PDO(DSN, USER, PASSWORD);
    } catch (Exception $exceptionBD) {
        echo "<h3>Impossible de connecter à la BD</h3>";
        // echo $exceptionBD->getMessage();
        die();
    }
    // 2. Créer la requête
    $sql = "SELECT nom, hobby FROM stagiaire WHERE stagiaire.hobby=:hobby";

    // 3. Préparer la requête
    $stmt = $cnx->prepare($sql);

    $stmt->bindValue(":hobby", "Lire");

    // 4. Lancer la requête
    $stmt->execute();

    // 5. Mettre les résultats dans un array (choisir le format)
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);


    // 6. Afficher les résultats selon les besoins
    var_dump ($res);

    // afficher la liste de noms dans un <ul>
    print("<ul>");
    foreach ($res as $key => $stagiaire) {
        print("<li>" . $stagiaire['nom'] . "</li>");
    }
    print("</ul>");
?>


</body>

</html>
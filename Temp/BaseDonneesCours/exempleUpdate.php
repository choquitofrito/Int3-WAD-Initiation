<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // script pour mettre à jour un ou plusieurs éléments de la tabla stagiaire

    // Ce script efface une stagiaire de la BD (ou toutes les stagiaires
    // qui portent un certain nom!)

    // 0. Inclure le fichier de configuration
    include "./db/config.php";

    // 1. Créer une connexion (objet de la classe PDO)
    $connexion = new PDO (DSN, USER, PASSWORD);
    
    // 2. Créer une requête (c'est just un string!!)
    $sql = "UPDATE stagiaire SET nom=:nom WHERE id=:id";

    // 3. Préparer la requête: renvoie un objet de la classe 
    // PDOStatement
    $objetRequete = $connexion->prepare($sql);

    // 4. Fixer les valeurs pour les `placeholders` (paramètres)
    $objetRequete->bindValue("nom", "Lola");
    $objetRequete->bindValue("id", 2);

    // 5. Executer la requête
    $objetRequete->execute();

    // 6. Afficher les érreurs possibles
    var_dump ($objetRequete->errorInfo());

    ?>
</body>
</html>
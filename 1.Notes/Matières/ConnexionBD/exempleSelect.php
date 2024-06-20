<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple SELECT</title>
</head>
<body>
    <?php

    include ("./db/config.php");

    // 1. Créer un objet de connexion (objet PDO)
    $cnx = new PDO (DSN,USERNAME,PASSWORD);
    
    // 2. Créer un string contenant la requête
    $sql = "SELECT prenom, hobby FROM stagiaire";  // variable string   

    // 3. Préparer la requête
    // Faire appel à la méthode prepare de la classe PDO ($cnx)
    // pour obtenir un objet de la classe PDOStatement ($stmt)
    $stmt = $cnx->prepare($sql); 

    // 4. Lancer la requête sur le serveur MySQL
    $stmt->execute();
    // 5. Obtenir les données dans un array (tableau)
    // Renvoie un arra associatif contenant le résultat de la requête
    $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // 6. Afficher les données obtenues
    var_dump ($resultat);

    print ("<ul>");
    foreach ($resultat as $key => $arrStagiaire){
        // print ("<li>" . $arrStagiaire['prenom'] . "</li>");
        // print ("<li>" . $arrStagiaire['hobby'] . "</li>");
        foreach ($arrStagiaire as $cle => $value) {
            print ("<li>" . $cle . " : " . $value . "</li>");
        }
    }


    print ("</ul>");




    ?>  
</body>
</html>
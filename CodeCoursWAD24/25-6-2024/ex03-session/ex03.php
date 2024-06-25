<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
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

    $sql = "SELECT * FROM produit";

    $stmt = $cnx->prepare($sql);
    $stmt->execute();
    $arrayProduits = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($arrayProduits);

    ?>

    <form action="./rajouterProduit.php" method="POST">
        <select name="produit">

            <?php
            foreach ($arrayProduits as $produit) {
                print("<option value=" . $produit['id'] . ">" . $produit['nom'] . "</option>");
            }
            ?>

        </select>
        <input type="submit" value="Envoyer">
    </form>

</body>

</html>
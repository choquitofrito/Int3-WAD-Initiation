<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <form enctype="multipart/form-data" action="./formInsererGroupeTraitement.php" method="POST">
        Nom du groupe<input type="text" name="nom">
        <br>Anée de formation<input type="number" name="annee_formation">
        <br>
        <select name="style_id">

            <?php
            // obtenir tous les styles et générer un select

            // 0. Inclure la config
            include "../db/config.php";
            // 1. Créer la connexion
            $cnx = new PDO(DSN, USER, PASSWORD);
            // 2. Créer une requête
            $sql = "SELECT * FROM styles ORDER BY nom ASC";
            // 3. Préparer la requête
            $stmt = $cnx->prepare($sql);
            // 4. Executer la requête
            $stmt->execute();
            // 5. Stocker le résultat de la recherche
            // dans un array
            $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($res as $style) {
                echo "<option value=" . $style['id'] . ">" . $style['nom'] . "</option>";
            }

            ?>

        </select>
        Upload photo:<input type="file" name="photoGroupe">
        <br>
        <input type="submit" value="Enregistrer">

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>
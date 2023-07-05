<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="./loginTraitement.php">
        Email<input type="text" name="login"><br>
        Password<input type="password" name="password"><br>
        <input type="submit" value="Se connecter">
    </form>

    <?php
    // on peut obtenir les paramétres (cle->val) de l'URL en utilisant $_GET
    if (isset($_GET['msg']) && $_GET['msg'] == "erreur") {
        print("<h5 style='color:red'>Login ou mot password incorrectes</h5>");
    }

    ?>
</body>

</html>
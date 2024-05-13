<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    var_dump ($_GET);
    var_dump ($_POST);
    print ("<br>Bonjour " . $_POST['prenom'] . " " . $_POST['nom']);
    ?>
</body>
</html>
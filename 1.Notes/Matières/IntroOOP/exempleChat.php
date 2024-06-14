<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include ("./Chat.php");
    $c1 = new Chat("Felix", "angora");
    $c1->affiche();

    $c2 = new Chat("Azrael", "pasdidee");
    $c2->affiche();

    ?>

</body>

</html>
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
    $c1 = new Chat("Felix", "angora", "./images/felix.png");
    // $c1->affiche();

    $c2 = new Chat("Azrael", "pasdidee", "./images/azrael.jpg");
    // $c2->affiche();

    $tableauChats = [ $c1, $c2];
    foreach ($tableauChats as $unChat){
        $unChat->affiche();
    }


    ?>

</body>

</html>
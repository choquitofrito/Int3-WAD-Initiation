<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    var_dump ($_POST);

    $prixHTVA = $_POST['prixHTVA'];
    $prixTVAC = $prixHTVA * 1.21;
    print ("Le prix TVAC est: " . $prixTVAC );

    // print ("Le prix TVAC est: " . $_POST['prixHTVA'] * 1.21 );
    ?>

</body>
</html>
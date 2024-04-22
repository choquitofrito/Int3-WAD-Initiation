<?php

declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function addition(float $v1, float $v2): float
    {
        return ($v1 + $v2);
    }
    print("<br>L'addition est: " . addition(4, 6));

    function echanger(string $n1, string $n2): void
    {
        $autre = $n1;
        $n1 = $n2;
        $n2 = $autre;
    }


    $nom1 = "Jenny";
    $nom2 = "Emilie";
    echanger($nom1, $nom2);

    print("<br>" . $nom1); // doit afficher Emilie

    // valeurs par référence
    function echangerReference(string &$n1, string &$n2): void
    {
        $autre = $n1;
        $n1 = $n2;
        $n2 = $autre;
    }

    $nom1 = "Jenny";
    $nom2 = "Emilie";
    echangerReference($nom1, $nom2);
    
    echangerReference("Coco", "Lala");

    print("<br>" . $nom1); // doit afficher Emilie


    ?>
</body>

</html>





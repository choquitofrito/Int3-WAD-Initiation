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
    function addition(float $val1, float $val2): void
    {
        $somme = $val1 + $val2;
        print("<br>La somme est: " . $somme);
    }
    addition(8.0, 9.4);
    
    ?>
</body>

</html>
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
    function tableMultiplication(int $val, int $limite = 10): void
    {
        for ($i = 1; $i <= $limite; $i ++){
            print ("<br>" . $val . " * " . $i . " = " . ($val * $i));
        }
    }
    tableMultiplication(6);
    tableMultiplication(8, 15);
    
    


    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $division = function (float $v1, float $v2):?float{
        if ($v2 != 0){
            return $v1 / $v2;
        }
        else {
            // division par zero
            return null;
        }
    };


    $div = $division (4,0);

    if (is_null($div)){
        // ré-direction
    };



    ?>
</body>
</html>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function genereArray()
    {
        $tab = [];
        for ($i = 0; $i < 10; $i++) {
            $tab[] = mt_rand(0, 100);
        }
        return $tab;

    }

    $monArray = genereArray();
    foreach ($monArray as $val){
        print ("<br>" . $val);
    }

    ?>
</body>

</html>
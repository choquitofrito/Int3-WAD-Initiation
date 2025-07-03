<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $arr = ['Nina', 'Laurence', 'Marie' ];
    var_dump ($arr);
    $revArray = array_reverse($arr, true);
    var_dump ($revArray);


    $arrAssoc = ['nom' => 'Nina', 
            'hobby' => 'danser',
            'nationalite' => 'Roumanie' ];
    
    var_dump (array_reverse($arrAssoc));

    $arr = ['Nina', 'Laurence', 'Marie' ];
    asort ($arr);
    var_dump ($arr);


 

    ?>
</body>
</html>
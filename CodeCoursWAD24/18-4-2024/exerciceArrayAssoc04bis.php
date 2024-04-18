<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $arrayPays = [
        [
            'nom' => 'Italie',
            'capitale' => 'Rome'
        ],
        [
            'nom' => 'Japon',
            'capitale' => 'Tokyo'
        ],
        [
            'nom' => 'Corée du Sud',
            'capitale' => 'Seoul'
        ]
    ];
    $arrayPays[] = [
        'nom' => 'Belgique',
        'capitale' => 'Bruxelles'
    ];
    
    $arrayPays[] = [
        'nom' => 'Portugal',
        'capitale' => 'Lisboa'
    ];


    foreach ($arrayPays as $pays){
        print ("<br>La capitale de " . $pays['nom'] . " est " . $pays['capitale']);
    }



    
    ?>
</body>

</html>
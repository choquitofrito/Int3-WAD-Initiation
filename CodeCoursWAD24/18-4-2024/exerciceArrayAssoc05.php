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
        'Italie' => 'Rome',
        'Japon' => 'Tokyo',
        'Corée du Sud' => 'Seoul'
    ];

    $arrayPays['France'] = 'Paris';
    $arrayPays['Espagne'] = 'Madrid';


    foreach ($arrayPays as $nomPays => $capitale) {
        print("<br>La capitale de " . $nomPays . " est " . $capitale);
    }

    // afficher les pays
    foreach ($arrayPays as $pays => $capitale){
        print ("<br>Nom du pays: " . $pays);
    }

    // afficher les capitales
    foreach ($arrayPays as $capitale){
        print ("<br>Nom de la capitale: " . $capitale);
    }

    ?>
</body>

</html>
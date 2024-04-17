<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    // ex.1-2
    $prix = [10, 20, 50];

    $prix[] = 8;
    $prix[] = 70;

    print($prix[1]);
    print($prix[4]);

    // ex.3
    $villes = ['Seville', 'Bruxelles', 'Rabat', 'Pekin', 'Rome'];

    // ex.4
    $villes[]  = ['Paris'];
    $villes[]  = ['Tokyo'];

    // ex.5
    $villes[0] = 'Quito';

    // ex.6
    $tab = [];
    $i = 1;
    while ($i <= 200){
        $tab[] = $i;
        $i = $i + 1;
    }

    for ($i = 1; $i <= 200; $i = $i + 1){
        $tab[] = $i;
    }



    // // CRUD
    // $tab = [ 4, 6, 9];

    // // rajouter (Create)
    // $tab[] = 10;

    // // modifier (Update)
    // $tab[1] =1000;

    // // accéder
    // // print ($tab[2]);

    // // effacer
    // unset ($tab[1]);
    // // debug 

    // foreach ($tab as $value){
    //     print ("<br>" . $value);
    // }

    // var_dump ($tab);

    // $tab = [10, 20, 50];
    // print($tab[0] . "<br>");
    // print($tab[1] . "<br>");
    // print($tab[2]);
    ?>


</body>

</html>
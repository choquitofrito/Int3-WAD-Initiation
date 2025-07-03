<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //
    function afficher (array $array):void {
        foreach ($array as $val){
            echo "<h5>" . $val . "</h5>";
        }
    }

    $noms = ["Ayla", "Karima", "Ramona"];
    $noms2 = ["Chloé", "Aqua", "Yulíìa"];
    $prix = [41, 435 ,57 ];


    // afficher ($noms);
    // afficher ($noms2);
    // afficher ($prix);


    // traitement d'un seul élément
    $afficherElemH5 = function (mixed $elem):void{
            echo "<h5>" . $elem . "</h5>";
    };

    $afficherElemH1 = function (mixed $elem):void{
            echo "<h1>" . $elem . "</h1>";
    };

    array_map ($afficherElemH1, $noms);
    array_map ($afficherElemH5, $noms2);
    array_map ($afficherElemH1, $prix);


    function monArrayMap ($fonctionAppliquer, array $arrayCible){
        foreach ($arrayCible as $val){
            $fonctionAppliquer ($val);
        }
    }

    monArrayMap ($afficherElemH1, $noms);
    monArrayMap ($afficherElemH5, $noms2);

    // array_map ()

    ?>
    <script>
        let noms = ['Ayla', 'Chloé', 'Anaïs'];
        let noms2 = ['Ayla2', 'Chloé2', 'Anaïs2'];

        let afficherElem = function (elem){
            console.log (elem);
        };

        noms.forEach (afficherElem);
        noms2.forEach (afficherElem);


        noms.forEach (function (elem){
            console.log (elem);
        });
    </script>
</body>
</html>
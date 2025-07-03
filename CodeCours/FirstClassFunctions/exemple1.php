<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <button id="btn-1">Clique sur moi 1!</button>
    <button id="btn-2">Clique sur moi 2!</button>
</head>

<body>
    <?php
    function addition(int $val1, int $val2): int
    {
        return ($val1 + $val2);
    }
    // echo ("<br>" . addition(4, 5));


    // traitons les fonctions comme first class members!
    // 1. Stocker dans une variable
    // en utilisant une fonction anonyme
    $addition2 = function (int $val1, int $val2): int {
        return ($val1 + $val2);
    };
    // echo ("<br>Addition:" . $addition2 (9, 10));

    $soustraction = function (int $val1, int $val2): int {
        return ($val1 - $val2);
    };
    // echo ("<br>Soustraction: " . $soustraction (9, 10));
    $tab = [$addition2, $soustraction];

    foreach ($tab as $uneFonction){
        $val = $uneFonction(10, 20);
        echo "Valeur: " . $val;
        // var_dump ($uneFonction);
    }
    ?>
    <script>
        // stocker fonction dans une variable
        let maFonction = function (){
            alert ("hola hola");
        };

        const btn1 = document.getElementById("btn-1");
        const btn2 = document.getElementById("btn-2");
        // document.addEventListener ('click', maFonction);

        btn1.addEventListener ("click", maFonction);
        btn2.addEventListener ("mouseover", maFonction);
        console.log (typeof (maFonction));
    </script>
</body>

</html>
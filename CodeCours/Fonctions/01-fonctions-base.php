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
    $prix = 30;
    $nom = "gsm";

    // à quoi sert une fonction?
    // qu'est-ce qu'elle reçoit?
    // qu'est-ce qu'elle renvoie?

    function afficherPrixTVAC(float $prix): void
    {
        print("<br>" . $prix * 1.21); // formule : $prix * (1 + tauxTVA / 100)        
    }
    afficherPrixTVAC($prix); // on n'a pas le calcul!

    // objectif
    $prixTVAC = calculerPrixTVAC($prix);

    $prixString = "99";

    // code
    function calculerPrixTVAC(float $prix): float
    {
        $prixTVAC = $prix * 1.21;
        return ($prixTVAC);
    }

    $prixTVAC = calculerPrixTVAC((float)$prixString);
    print("<br>Fortement typé, prixTVAC: " . $prixTVAC);



    // le taux de TVA est optionnel
    // code
    function calculerPrixTVACTaux(float $prix, ?int $tauxTVA = 21): float
    {
        $prixTVAC = $prix * (1 + $tauxTVA / 100);
        return ($prixTVAC);
    }

    $prixTVAC = calculerPrixTVACTaux(100);
    print("<br>Appel calculerPrixTVACTaux: " . $prixTVAC);


    // façon d'envoyer les paramètres aux fonctions

    // par défaut: passage par valeur
    function modifierVal(int $val1): void
    {
        $val1 = 89;
    }

    $val1 = 100;
    modifierVal($val1);

    print("<br>La valeur actuèlle: " . $val1);


    function echangerVals(int $x, int $y)
    {
        $temp = $x;
        $x = $y;
        $y = $temp;
    }

    $x = 10;
    $y = 20;
    echangerVals($x, $y);
    print("<br>Valeur de x: " . $x);




    $prixTab = [100, 200, 300];


    // cette fonction essaiey de MODIFIER un tableau et ne renvoie rien, elle échoue
    function reduction(array $tab): void
    {
        for ($i = 0; $i < count($tab); $i++) {
            $tab[$i] = $tab[$i] / 2;
        }
    }

    reduction($prixTab);
    var_dump($prixTab);

    // cette fonction RENVOIE un tableau contenant
    // les prix avec réduction
    function reductionReturn(array $tab): array
    {
        // nouveau tableau contenant les prix réduits
        $tempTab = [];
        for ($i = 0; $i < count($tab); $i++) {
            $tempTab[$i] = $tab[$i] / 2;
        }
        return $tempTab;
    }

    $tabReduit = reductionReturn($prixTab);
    var_dump($tabReduit);


    // paramètres par référence    
    function echangerValsRef(int &$val_x, int &$val_y): void
    {
        $temp = $val_x;
        $val_x = $val_y;
        $val_y = $temp;
    }

    $x = 10;
    $y = 20;
    echangerValsRef($x, $y);

    // $a = 10;
    // $b = 20;
    // echangerValsRef($a, $b);
    print("<br>(ref) Valeur de x: " . $x);



    // cette fonction essaie de MODIFIER un tableau et ne renvoie rien
    function reductionRef(array &$tab): void
    {
        for ($i = 0; $i < count($tab); $i++) {
            $tab[$i] = $tab[$i] / 2;
        }
    }
    reductionRef($prixTab);
    var_dump($prixTab);


    // cette fonction essaie de MODIFIER un tableau et ne renvoie rien
    function reductionRefForeach(array &$tab): void
    {
        foreach ($tab as &$value){
            $value = $value / 2;
        }
    }
    print ("<br>Reduction foreach");
    reductionRefForeach($prixTab);
    var_dump($prixTab);


    ?>
</body>

</html>
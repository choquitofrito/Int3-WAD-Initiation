<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function calculerPrixTVAC(float $prix): float
    {
        $pTVA = $prix * 1.21;
        return $pTVA;
        
    }

    $res = calculerPrixTVAC(5.9);
    print ($res);

    function prixTotal(array $montants): float
    {
        $prixTotal = 0;
        foreach ($montants as $montant){
            $prixTotal = $prixTotal + $montant;
        }
        return ($prixTotal);
    }

    $mesMontants = [ 4.0, 10.0, 20.0];
    print ("<br>Prix total: " . prixTotal($mesMontants));
    print ("<br>Prix total TVAC: " . calculerPrixTVAC(prixTotal($mesMontants)));
    // print ("<br>Prix total TVAC: " . prixTotal(calculerPrixTVAC($mesMontants))); // pas possible!
    


    ?>


</body>

</html>
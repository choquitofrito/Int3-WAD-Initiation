<?php

$prix_S24 = 1000;
$prix_IPhone = 1500;
$prix_Huawei = 800;

$unites_S24 = readline ("Tapez le nombre d'unités du S24: ");
$unites_IPhone = readline ("Tapez le nombre d'unités du IPhone: ");
$unites_Huawei = readline ("Tapez le nombre d'unités du Huawei: ");

// appliquer réduction
if ($unites_S24 > 5){
    $prix_S24 *= 0.9; 
}
if ($unites_IPhone > 5){
    $prix_IPhone *= 0.9; 
}
if ($unites_Huawei > 5){
    $prix_Huawei *= 0.9; 
}

// calcul du total
$total = $unites_S24 * $prix_S24 + 
            $unites_IPhone * $prix_IPhone +
            $unites_Huawei * $prix_Huawei;
            
// carte de fidélité
$carte = readline ("\nAvez-vous une carte de fidélité? ");

// on doit stocker le total avant d'appliquer la réduction para carte, 
// car autrement le prix de notre commande descendra.
// Ex: commande de 3100 euros ($total)
// On doit garder ce prix dans la variable $totalSansReduction
// car si on a une carte de reduction et en diminue un 20%
// de $total on va devoir payer pour la livraison! ($total<3000)
$totalSansReduction = $total;

if ($carte == "oui"){
    $total = $total * 0.80;    
}

// livraison
$livraison = readline("\nLivrer à la maison? ");
if ($livraison == "oui"){
    if ($totalSansReduction <= 3000){
        $total = $total * 1.02;
    }
}




print ($total);



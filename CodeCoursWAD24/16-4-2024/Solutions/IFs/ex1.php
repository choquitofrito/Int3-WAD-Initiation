<?php

$longueur = readline ("\nSvp tapez la longueur: ");
$largeur = readline ("\nSvp tapez la largeur: ");

$surface = $longueur * $largeur;
print ("\nLa surface de la chambre: " . $surface);

if ($longueur === $largeur){
    print ("\nLa chambre est carrée");
}

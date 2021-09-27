<?php

declare(strict_types=1);

$unArray = ["nom", "prénom", "adresse"];

// lisez la doc d'array_map!

$unArray = array_map(function ($val) {
    // met la valeur reçue en majuscules et le renvoi
    return (ucfirst($val));
}, $unArray);

print_r($unArray);


$maFonction = function () {
    echo "Vive la vie";
};

$maFonction();



function generateurCalculateurSurfaces(string $nomFigure): callable
{

    // cette fonction crée une fonction qui sera renvoyée
    // pour être utilisée plus tard


    switch ($nomFigure) {
        case "rectangle":
            return (function (float $cote): float {
                return $cote * $cote;
            });
            break;
        case "cercle":
            return (function (float $rayon): float {
                return pi() * pow($rayon, 2); // pow est la puissance
            });
            break;
        default:
            return null;
    }
}

$calculatriceRectangles = generateurCalculateurSurfaces("rectangle");
echo "<br>Surface de ma chambre (rectangle): ";
echo $calculatriceRectangles(3.5);
echo "<br>Surface d'une autre chambre (rectangle): ";
echo $calculatriceRectangles(12.3);

$calculatriceCercles = generateurCalculateurSurfaces("cercle");
echo "<br>Surface d'un disque de vinyl: ";
echo $calculatriceCercles(15);


// fonction qui génére de fonctions qui affichent de tableau
// de multiplication. Voir l'utilisation pour mieux comprendre
$genTables = function ($maxVals): callable{ 
    return (function ($chiffre) use ($maxVals): void {
        // $max n'est pas accéssible si on n'utilise pas
        // "use". Pas besoin d'use en JS
        for ($i=0;$i<=$maxVals;$i++){
            print ("<br/>La multip de ".$chiffre."x".$i."=".($chiffre*$i));
        }
        print ("<hr>");	
    });
};

// utilisation

// tables de 5 valeurs
$multMax5 = $genTables(5); // dans cet appel, la fonction utilise la valeur de la variable $max
$multMax5 (3); // pour le chiffre 3, 5 valeurs
$multMax5 (7); // pour le chiffre 3, 5 valeurs

// tables de 10 valeurs
$multMax5 = $genTables(10); // dans cet appel, la fonction utilise la valeur de la variable $max
$multMax5 (2); // pour le chiffre 3, 5 valeurs
$multMax5 (4); // pour le chiffre 3, 5 valeurs

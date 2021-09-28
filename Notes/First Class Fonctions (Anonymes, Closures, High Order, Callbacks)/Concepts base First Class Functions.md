- [First Class Functions](#first-class-functions)
- [1. Fonction Anonyme](#1-fonction-anonyme)
- [2. High Order Function](#2-high-order-function)
- [3. Callback](#3-callback)
- [4. Closure](#4-closure)

<br>

# First Class Functions

On dit que dans un langage les fonctions sont **First Class Fonctions** si le langage les traite tels que "citoyens de première classe". Cela veut dire que les **fonctions** seront traitées de la même manière que le reste de types de variable (ex: float, string, Object).

La concrétisation de ce traimement implique qu'un fonction pourra être :
- **stockée** dans une variable
- **envoyée en paramètre** à une autre fonction/méthode
- **renvoyée** dans un return

**First Class Function** est alors juste un traitement qu'on donne aux fonctions.
Il y a plusieurs concepts très importants liés à ce traitement, on va les étudier ici.


<br>

# 1. Fonction Anonyme

Fonction qui ne porte pas de nom. Elle peut être stockée dans une variable, envoyée en paramètre ou renvoyé dans un return

Ex. 1: stockée dans une variable

```php
// anonyme stockée dans une var. Ré-utilisable dans le code

$maFonction = function (){
    echo "Vive la vie";
};

$maFonction();
.
.
.
$maFonction();
.
.
.
```
Ex. 2: envoyée en paramètre
```php

$unArray = ["nom", "prénom", "adresse"];

// lisez la doc d'array_map!

$unArray = array_map (function ($val) {
    // met la valeur reçue en majuscules et le renvoi
    return (ucfirst($val));
}, $unArray);

print_r($unArray);

``` 

Ex. 3: renvoyée dans un return

```php
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
```

Ces trois caracteristiques peuvent apparaitre simultanéement.

<br>

# 2. High Order Function 

C'est une fonction qui réalise une ou plusieurs de ces taches:

**1. prendre une (ou plusieurs) d'autres fonctions en paramètre**

**2. renvoyer une fonction comme valeur de retour (return)**

Exemples: map en JS, array_map en php, filter et reduce en JS .... 

Les fonctions d'ordre supérieur sont massivement utilisées dans la programmation fonctionnelle. 

<br>

# 3. Callback 

Fonction qu'on passe à une autre fonction pour qu'elle soit executée (de façon synchrone ou asynchrone)

<br>

# 4. Closure

Fonction anonyme qui utilise une variable en dehors de sa portée elle "capture" l'état de l'environnement où elle se trouve

```php
<?php
// fonction qui génére de fonctions qui affichent de tableau
// de multiplication. Voir l'utilisation pour mieux comprendre
$genTables = function ($maxVals): callable{ 
    return (function ($chiffre) use ($maxVals): void {
        // $max n'est pas accéssible si on n'utilise pas
        // "use". Pas besoin d'use en JS
        for ($i=0;$i<=$maxVals;$i++){
            print ("<br/>La multip de ".$chiffre."x".
                    $i."=".($chiffre*$i));
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
```

<br>




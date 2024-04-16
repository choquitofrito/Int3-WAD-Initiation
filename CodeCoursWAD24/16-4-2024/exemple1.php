<?php

print ("Hello WAD!\n");
print ("Hello again!\n");

$nom = readline ("Tapez votre nom: ");
$age = (int)readline("\nTapez votre âge: ");

print ("\nJ'ai " . $age . " ans");
print ("\nJ'ai $age ans");
print ('\nJ\'ai $age ans');

print ("\nJe suis " . $nom . " et j'ai " . $age . " ans");

$interdit = true;

// print ("\n" . $interdit);

if ($interdit == true){
    print ("\nc'est vrai!");    
}

if (true){
    print ("\nc'est aussi vrai");
}

// if ($age >= 18 ){
//     print ("\nvous pouvez entrer sur notre site");
// }
// else {
//     print ("\nvous êtes trop jeune!");
// }


if ($age < 18 ){
    print ("\nvous êtres trop jeune");
}
elseif ($age > 100) {
    print ("\nvous êtes trop vieux!");
}
else {
    print ("\nBienvenue!");
}










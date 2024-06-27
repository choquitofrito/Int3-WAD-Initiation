<?php
// print ("Je suis généré en PHP");

// prend une structure de données 
// et génére un string JSON

// $tab = ["Debbie", "Anaïs", "Mariam"];

// $tab = [4 ,5 , 7]
// JSON: "[4,5,7]"



// JSON: "{ 'nom': 'Dupont', 'prenom' : 'Lola'}"

$p1 = [
    'nom' => 'Dupont',
    'prenom' => 'Loli'
];

$p2 = [
    'nom' => 'Dupont',
    'prenom' => 'Lola'
];

$p3 = [
    'nom' => 'Dupont',
    'prenom' => 'Lolo'
];


$tab = [$p1, $p2, $p3];

$resJSON = json_encode($tab);
print($resJSON);


// JSON: "[ {'nom' : 'Dupont', 'prenom' : 'Loli'},
//          {'nom' : 'Dupont', 'prenom' : 'Lola'},
//          {'nom' : 'Dupont', 'prenom' : 'Lolo'} ]
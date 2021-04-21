<?php

// une fonction sans parametres
function bonjour(){
	echo "bonjour!";
}

// et son appel:
bonjour();



// une fonction qui reçoit un parametre
function bonjourPerso($nom){
	echo "bonjour ".$nom."!";
}


// et son appel:
bonjourPerso("Ismael");


// une fonction qui reçoit deux parametres et fait une operation avec eux
// (ex: afficher l'aire d'un rectangle). Pas de return.
function calculeAire($largeur, $hauteur){
	$aire= $largeur*$hauteur;
	echo "L'aire est: ".$aire;
}

// et son appel:
calculeAire (20,10);



// une fonction qui reçoit deux parametres et RENVOIE une valeur
// qu'on peut utiliser dans le code principal
// ex: calculer l'aire d'un rectangle et le renvoyer (return)
// au code principal
function calculeAire($largeur, $hauteur){
	$aire= $largeur*$hauteur;
	return $aire;
}

// et son appel:
// 1. Stocker la valeur renvoyée dans une variable
$aire1= calculeAire (5,10);
// 2. L'utiliser selon mes besoins (ex: afficher)
$echo "L'aire est: ".$aire1;
// ex: la mettre dans un array
$aire2= calculAire (10,20);
$aire3= calculAire (5,5);

$aires= [$aire1, $aire2,$aire3];


// une fonction qui crée un nouvel array et le renvoie (pas d'affichage)
function fois2 ($arr){
	$nouvelArray = [];
	foreach ($arr as $val){
		$nouvelArray[] = $val * 2;
	}
	return $nouvelArray;
}
$unArray = [4,4,3,3];
$arrayFois2 = fois2($unArray);





// voici une fonction qui crée de sauts à la ligne
function br($nombreBr){
    for ($i=0;$i<$nombreBr;$i++){
        echo "<br />";
    }
}
// fonction qui genere un tableau HTML
// d'une seule ligne. Le nombre 
// de colonnes est reçu en parametre
// et chaque cellule contient une valeur
function monTableau1($nombreColonnes){
	echo "<table>";
	echo "<tr>";
	for ($i=1;$i<=$nombreColonnes;$i++){
		echo "<td>".$i."</td>";
		// pour avoir de valeurs aléatoires
		// echo "<td>".rand(0,60)."</td>"; 
	};
	echo "</tr>";
	echo "</table>";
}

// afficher la table de multiplication 
// dans un tableau HTML. Valeur en parmetre.
function tableMult($val,$max){
	echo "<table border='1'>";
	echo "<tr>";
	for ($i=1;$i<=$max;$i++){
		echo "<td>".$i."</td>";
	}
	echo "</tr>";
	echo "<tr>";
	for ($i=1;$i<=$max;$i++){
		echo "<td>".$i*$val."</td>";
	}
	echo "</tr>";
	echo "</table>";

}

// fonction qui affiche le contenu d'un array 
// reçu en parametre avec echo
function afficheArray($tableau){
	foreach ($tableau as $val){
		echo "<br>".$val;
	}
}

// fonction qui affiche le contenu d'un array
// (associatif) reçu en parametre avec echo
function afficherTableauAssociatif ($tableau){
	foreach ($tableau as $key=>$val){
		echo "La specialité de ".$key;
		echo " est ".$val."<br />";
	}
}







?>
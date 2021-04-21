<?php

// Les paramètres des fonctions peuvent être envoyés "par valeur" ou "par référence":
/////////////////////////////////////////////////////////////////////////////////////

// 1. Par valeur: la variable à l'interieur de la fonction
// est juste une copie de la variable originale
////////////////
function changerValeur($val){
	$val= 0;
}

$valeur=50;
// $valeur est la variable originale
changerValeur($valeur);
echo $valeur."<BR/>"; // affichera 50. 

// étant $val juste une copie de $valeur. Sa modification n'entraine pas 
// la modification de $valeur à l'extérieur de la fonction


// 2. Par référence
///////////////////
function changerValeurRef(&$val){
	$val= 0;
}

$valeur=50;
changerValeurRef($valeur);
echo $valeur."<BR/>"; // affichera 0. 

// la variable $val est une référence $valeur. Sa modification implique
// la modification de $valeur à l'extérieur de la fonction car c'est une référence

// Sans "&", les variables (sauf les objets) sont envoyées par valeur, c.à.d. à l'intérieur
// de la fonction on travaille avec une copie de la variable, qui est détruite quand
// la fonction finit son exécution

// IMPORTANT: les arrays sont passées par valeur, les objets par référence (pas besoin 
// de mettre un "&")


// ex: fonction qui divise un prix par deux
$prix = 100;

function reduction (&$unPrix){
	 $unPrix = $unPrix / 2;
}

reduction ($prix);
echo $prix;

// autre exemple : changer le contenu d'un array (ref) 
$noms = ["Cerise","Camille","Imen"];
function majusculise (&$arr){
	for ($i = 0; $i < count ($arr); $i++){
		$arr[$i] = strtoupper($arr[$i]);
	}
}
majusculise ($noms);
var_dump ($noms);

// ex: fonction qui échange le contenu de deux variables. 
function echange (&$val1,&$val2){
		$temp=$val1;
		$val1=$val2;
		$val2=$temp;
};
$x= 5;
$y= 10;
echange ($x,$y);
echo "<br />Valeur de x: ".$x;
echo "<br />Valeur de y: ".$y;




// On peut utiliser aussi les références pour créer de variables dépendantes l'une de l'autre
/////////////////////////////////////////////////////////////////////////////////////////////
echo "<br />";

// deux variables indépendantes
$nom="Atila";
$copieNom = $nom;
echo "<br />".$nom;
echo "<br />".$copieNom;
echo "<br />";

$nom="Pepe";
// la modification d'une n'implique pas la modification de la copie
echo "<br />".$nom;
echo "<br />".$copieNom; // affiche "Atila"
echo "<br />";

// deux variables dont une est une référence vers l'autre
$refNom= &$nom;
echo "<br />".$nom;
echo "<br />".$refNom;
echo "<br />";

// la modification d'une de deux IMPLIQUE la modification de l'autre (dans les deux sens!)
$nom="Pepito";
echo "<br />".$nom;
echo "<br />".$refNom; 
echo "<br />";

$refNom="Juanito";
echo "<br />".$nom;
echo "<br />".$refNom; 
echo "<br />";


// important: foreach fait une copie de chaque élément de l'array à chaque iteration.
// ce code no modifiera pas l'array:
$tab= array (1,4,5);
foreach ($tab as $val){
	$val=0;
}
print_r ($tab);
echo "<br />";

// si on veut qu'il travaille avec les éléments de l'array en soi, on doit lui 
// indiquer d'utiliser de références:
foreach ($tab as &$val){
	$val=0;
}
print_r ($tab);
echo "<br />";


// exemple de passage d'array par référence:
$tab2= array (10,20,30);
function mettreZero (&$unArray){
	// on doit mettre aussi la référence dans le foreach! avec un for on n'aurait pas besoin.
	foreach ($unArray as &$val){
		$val=0;
	}
}
mettreZero($tab);
print_r($tab);
echo "<br />";


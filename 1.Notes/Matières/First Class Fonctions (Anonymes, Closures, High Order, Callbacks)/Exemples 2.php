<?php
declare(strict_types=1);


$array1=[40,60,70];

// fonction qui affiche un array
function afficherArray(array $unArray): void {
	foreach ($unArray as $val){
		var_dump ($val);
		print("<br/>");
	}
}
afficherArray($array1);


// fonction qui parcourt un array
// en appliquant une autre fonction reçue en paramétre
function parcourirArray(array $unArray, callable $callback): void {
	foreach ($unArray as $val){
		$callback($val);
	}
}

// fonction qui agit sur UN élément
function afficheElement(mixed $elem): void {
	print ("L'élément est: ".$elem."</br>");
}

// fonction qui agit sur UN élément
function afficherFois10(int|float $unVal): void {
	print ("<br/>".$unVal*10);
}

// Appel à la fonction qui parcourt l'array :
// on lui envoie la fonction (callback) qui agit sur un élément en paramètre
parcourirArray($array1,"afficheElement");

// Ici on fait pareil
// Appel à la fonction qui parcourt l'array :
// on lui envoie la fonction (callback) qui agit sur un élément en paramètre
print ("<br/>Afficher toutes les valeurs *10");
parcourirArray($array1,"afficherFois10");


function afficheTVAC(int|float $unVal): void {
	print ("<br/>".$unVal*1.21);
}
// encore pareil ici :)
print ("<br/>Afficher toutes les valeurs TVAC");
parcourirArray($array1,"afficheTVAC");


function afficherPlusGrand50(int|float $val): void {
	if($val>50){
		print ("<br/>".$val);		
	}
}
print ("<br/>Afficher toutes les valeurs plus grandes que 50");
parcourirArray($array1,"afficherPlusGrand50");


// parcourir en lançant deux callbacks!
$arrayVilles=["Bruxelles","Paris","Londres"];
function parcourirArrayDoubleCallback(array $unArray, callable $callback1, callable $callback2): void {
	foreach ($unArray as $val){
		$callback1($val);
		$callback2($val);
	}
}

function afficheMayuscules(string $val): void {
	print ("<br/>".strtoupper($val));
}
function afficheTroisPremieresLettres(string $val): void {
	print ("<br/>".substr($val,0,3));
}
parcourirArrayDoubleCallback($arrayVilles,"afficheMayuscules","afficheTroisPremieresLettres");






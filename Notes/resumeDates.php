<?php

// création d'un objet de la classe DateTime
// contenant la date et l'heure actuelles
$d= new DateTime();
var_dump($d);

// création d'un objet de la classe DateTime
// contenant une date et heure de notre choix
$d2= new DateTime('1/14/2005 00:15:12');
var_dump($d2);

// affichage de la date actuelle en differents formats
// format nous permet d'afficher la date de plein de formes differentes
echo $d->format ("D/M/Y");
echo "<br />";


echo $d->format ("Y-M-D");
echo "<br />";


$var1= $d->format("D/M/Y");
var_dump($var1);


// pour afficher les dates en français:
setlocale (LC_TIME,"fr_FR.utf8","fra");
echo (strftime("%A %B %Y"));
echo "<br />";
// plus de détails pour strftime:
// http://www.phptutorial.info/?strftime

// voici le format pour stocker dans une colonne DATE de MySqls
echo $d->format ("d-m-Y");
echo "<br />";
$myDate = $d->format ("Y-m-d H:i:s");
echo "<BR/>Pour MySql: ".$myDate;
// et la requête: INSERT INTO my_table (date_time) VALUES (':myDate');
echo "<br /><br />";

// d'autres formats possibles
echo $d->format ("d-m-Y");
echo "<br />";
echo $d->format ("M-d-y");
echo "<br />";
echo $d->format ("M-D-y");
echo "<br />";
echo $d->format ("h i s"); // pas m pour les minutes ;), "m" c'est le mois!
echo "<br />";
echo $d->format ("h:i:s"); // pas m pour les minutes ;), "m" c'est le mois!
echo "<br />";
echo $d->format ("d/m/y h:i:s"); // pas m pour les minutes ;), "m" c'est le mois!
echo "<br />";




// modification d'une date (la date et l'heure) suivies de l'affichage
// ex: changer tout
$d->setDate(2090, 12, 30);
echo $d->format("d/m/Y, h:i:s");
echo "<br />";
$d->setTime(15,59,67);
echo $d->format("d/m/Y, H:i:s");
echo "<br />";


// fixons une date:
$d->setDate(2050, 1, 1);
echo $d->format("d/m/Y, H:i:s");
echo "<br />";

// nous pouvons modifier une date en spécifiant un intervalle du temps
$d->modify("-3 months");
echo $d->format("d/m/Y, H:i:s");
echo "<br />";

$d->modify("-1 months");
echo $d->format("d/m/Y, H:i:s");
echo "<br />";


$d->modify("tomorrow"); // rélatif à la date en $d, pas à la notre!
echo $d->format("d/m/Y, H:i:s");
echo "<br />";


// si on veut copier des objets on doit utiliser le mot clé "clone" de PHP
// Ex: création d'une copie de la date $d dans une autre variable
$autreDate =clone $d;

// Si on fait juste $autreDate=$d, les modifications faites à $d (setDate, modify...) seront aussi réalisées sur $autreDate
// Exemple:
$uneDate= new DateTime();
$uneDate->setDate(2100,12,31);
$uneCopie= $uneDate; // mal! on aurait dû faire: $uneCopie= clone $uneDate


// maintenant on modifie $uneDate: 
// les changements seront réalisés aussi sur $uneCopie, ce qui n'est pas l'effet désiré
$uneDate->setDate(1900,1,1);
echo $uneDate->format("d/m/Y, H:i:s");
echo "<br />";
echo $uneCopie->format("d/m/Y, H:i:s");
echo "<br />";


// On peut calculer la difference entre 2 dates (très utile!!)
$uneDate->setDate(2014,12,29);
$uneDate->setTime(0,0,0);
$autreDate->setDate(2014,12,30);
$autreDate->setTime(0,4,3);
//$autreDate->setTime(11,57,2);
$difference=$uneDate->diff($autreDate);
var_dump($difference); // observez les résultats: différence de un jour, 4 minutes et 3 sec.



$difference=$autreDate->diff($uneDate);
var_dump($difference); // même difference mais à l'invèrse (voir "invert"!)

// on peut accèder à tous les attributs de l'objet difference
// cet objet est de la classe DateInterval
// C'est très simple:
echo "La difference en jours est de ".$difference->days."<br />";
echo "La difference en minutes est de ".$difference->i."<br />";



// on peut aussi comparer deux dates (<, >, ==, <=, >=)
if ($uneDate < $autreDate) { 
    echo "La date 'uneDate' est plus petite/ancienne<br />";
}
if ($uneDate == $uneDate) { 
    echo "les dates sont pareilles!<br />";
}

    

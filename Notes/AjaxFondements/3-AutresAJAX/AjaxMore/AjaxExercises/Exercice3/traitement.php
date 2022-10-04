<?php

$arrayFilms= array ("Comédie"=> array("Rocky", "Alien"),
                    "Terreur"=> array ("Psycho","The cube"));

$choix= $_GET['choix'];

echo json_encode($arrayFilms[$choix]);


 
 
?>
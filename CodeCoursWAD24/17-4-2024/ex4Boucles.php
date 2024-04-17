<?php


$age = readline ("\nTapez votre âge: ");
$nombreEssais = 1;

while ( ($age < 18 OR $age > 130) AND $nombreEssais < 3){
    $age = readline ("\nTapez votre âge: ");
    $nombreEssais ++;
}
if ($age < 18 OR $age > 130){
    print ("\nL'âge n'est pas bonne");
}
else {
    print ("\nBienvenu");
}

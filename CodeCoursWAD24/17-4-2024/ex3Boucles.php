<?php


$age = readline ("\nTapez votre âge: ");
while ($age < 18 OR $age > 130){
    $age = readline ("\nTapez votre âge: ");
}

print ("Bienvenue!");

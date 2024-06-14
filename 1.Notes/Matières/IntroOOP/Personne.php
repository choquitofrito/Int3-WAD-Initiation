<?php

declare(strict_types=1);

class Personne
{
    // propriétés
    public string $prenom;
    public string $hobby;

    // méthodes (fonctionnalité)
    function affiche(): void
    {
        print ("Hello " . $this->prenom . " tout va bien!");
    }
    function chanter (): void{
        print ("<br>LALALALA!!");
    }
}

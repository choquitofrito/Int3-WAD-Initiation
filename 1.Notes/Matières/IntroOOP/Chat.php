<?php

declare (strict_types =1);

class Chat {
    public string $nom;
    public string $race;

    function __construct (string $nom, string $race){
        $this->nom = $nom;
        $this->race = $race;
    }

    function affiche ():void{
        print ("<br>Je suis " . $this->nom . " de la race " . $this->race);
    }

}

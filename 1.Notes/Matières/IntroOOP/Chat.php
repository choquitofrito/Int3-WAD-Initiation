<?php

declare (strict_types =1);

class Chat {
    public string $nom;
    public string $race;
    public string $lienImage;

    function __construct (string $nom, string $race, string $lienImage){
        $this->nom = $nom;
        $this->race = $race;
        $this->lienImage = $lienImage;
    }

    function affiche ():void{
        print ("<br>Je suis " . $this->nom . " de la race " . $this->race);
        print ("<img src='". $this->lienImage  ."'>");
    }

}

<?php

class Personne {
    public string $nom;
    public string $hobby;

    public function __construct (string $nom, string $hobby){
        $this->nom = $nom;
        $this->hobby = $hobby;
    }

    public function getNom ():string{
        return $this->nom;
    }
    public function setNom (string $nom):void {
        $this->nom = $nom;
    }

    public function getHobby ():string{
        return $this->hobby;
    }
    public function setHobby (string $hobby):void {
        $this->hobby = $hobby;
    }

    public function __toString ():string{
        return $this->nom . " aime " . $this->hobby;
    }

}

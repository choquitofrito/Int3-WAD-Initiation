<?php


class Personne{
    public $nom;
    public $prenom;
    public $age;
    
    
    function __construct($nom, $prenom, $age) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }
    
}

$personne1= new Personne("Dupont","Marie",56);
$personne2= new Personne("Schapira","Isabelle",30);
$personne3= new Personne("Hermant","Margaret",28);

// on encode un array d'objets en JSON qui devient un array d'objets javascript
$arrayPersonnes = array ($personne1, $personne2, $personne3);


echo json_encode($arrayPersonnes);





<?php
session_start();

// si le panier n'existe pas, on doit le créer et 
// le stocker dans la session
if (empty($_SESSION['panier'])){
    $panier = [];
    $_SESSION['panier'] = $panier;
    print ("nouveau panier");

}
else{
    print ("le panier existe");
}

// obtenir les données du formulaire (idFilm et quantite)
// var_dump ($_POST);
$idFilm = $_POST['idFilm'];
$quantite = $_POST ['quantite'];

// stocker l'idFilm et la quantite dans le Panier
$panier = $_SESSION['panier']; // obtenir le panier de la session


if (isset ($panier[$idFilm])){
    // le Film est déjà dans la session
    // rajouter la nouvelle quantité
    $panier[$idFilm] += $quantite;
}
else {
    // le film n'était pas dans le panier
    $panier[$idFilm] = (int)$quantite; // rajouté l'élément
}




$_SESSION['panier'] = $panier; // stocker à nouveau le panier dans la session

print ("voici la session");
var_dump ($_SESSION);
print ("voici la variable panier");
var_dump ($panier);

var_dump ($panier);


// $_SESSION['panier']
// [ 3 => 6,
//   5 => 10,
//   etc...
// ]


?>




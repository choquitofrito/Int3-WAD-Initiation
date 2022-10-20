<?php
session_start();

$idFilm = $_POST['idFilm'];
$quantite = (int) $_POST['quantite'];

// si pas de panier, on le crée
if (!isset($_SESSION['panier'])){
    $_SESSION['panier'] = [];
}

// chercher le produit dans le panier
if (! isset ($_SESSION['panier'][$idFilm])){
    // le produit n'existe pas
    $_SESSION['panier'][$idFilm] = $quantite;
}
else {
    // le produit existe déjà : incrementer la quantite en $quantite
    $_SESSION['panier'][$idFilm] += $quantite;
};




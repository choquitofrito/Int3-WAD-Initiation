<?php

// 1. Créer une connexion à la BD
include "./connexion/db.php";

try {
        $cnx = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASS);
} catch (Exception $e) {
        // jamais en production car ça montre des infos
        // sensibles
        echo $e->getMessage();

        die();
}
// 2. Créer une requête SQL
// $sql = "SELECT * FROM film";


// Pas optimale, elle obtient trop de colonnes. Mais possible
// SELECT *, favori.idFilm as idFilmFavori FROM film LEFT JOIN favori ON film.id = favori.idFilm


// $sql = "SELECT film.id, titre, description, duree, dateSortie, image, favori.idFilm as idFilmFavori, login FROM film  " . 
// "LEFT JOIN favori ON film.id = favori.idFilm LEFT JOIN utilisateur ON utilisateur.id=favori.idUtilisateur ";


// LEFT JOIN utilisateur ON utilisateur.id = favori.idUtilisateur 
// WHERE utilisateur.login = :login"; // prendre le login de la session

// Fonctionne si on veut afficher les films qui ont été liké par n'importe qui
// $sql = "SELECT DISTINCT film.id, titre, description, duree, dateSortie, image, favori.idFilm as idFilmFavori " .
// "FROM film LEFT JOIN favori ON film.id = favori.idFilm";

$sql = "SELECT film.id as id, film.titre,film.image, favori.idFilm AS idFilmFavori FROM film 
        LEFT JOIN favori ON film.id = favori.idFilm AND favori.idUtilisateur = 
        (SELECT utilisateur.id FROM utilisateur WHERE login = :login)";

// 3. Lancer la requête (préparation et lancement)
$stmt = $cnx->prepare($sql);
$stmt->bindValue(":login", $_SESSION['loginConnecte']);
$stmt->execute();
// 4. Obtenir les données dans un array 
$arrayRes = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($arrayRes);
var_dump($_SESSION['loginConnecte']);

// var_dump($arrayRes);
// die();

// 5. Afficher los données selon nos besoins


foreach ($arrayRes as $film) {

        echo '<div class="card" style="width: 10rem;">';
        echo '<a href="./detailFilm.php?id=' . $film['id']  . '"><img class="card-img-top" src="./img/'  . $film['image'] .   '" alt="' . $film['titre'] . '"></a>';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $film['titre'] . '</h5>';
        echo '</div>';
        echo '</div>';
        if (!is_null($film['idFilmFavori'])) {
                echo "<p class='coeur' data-id ='" . $film['id'] . "'>&#10084;</p>";
        } else {
                echo "<p class='coeur' data-id ='" . $film['id'] . "'>&#10085;</p>";
        }
        echo "<a href ='./effacerFilm.php?id=" . $film['id'] . "'>Effacer</a>&nbsp";
        echo "<a href ='./index.php?p=updateFilm&id=" . $film['id'] . "'>Modifier</a>";
}

echo '<script src="./js/main.js"></script>';

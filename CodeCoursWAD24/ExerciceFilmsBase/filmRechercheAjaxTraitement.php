<?php

// Obtenir les données du form
// (dans ce cas le terme de recherche)
// print($_POST['termRecherche']);

// Connecter à la BD et obtenir tous les films qui correspondent
// 1. Obtenir le terme de la recherche (du form)
$termeRecherche = $_POST['termRecherche'];

// 2. Connecter à la BD
include "./db/config.php";
try {
    // essayer de connecter
    $cnx = new PDO(DSN, USERNAME, PASSWORD);
} catch (Exception $e) {
    // problème de connexion!!
    // instructions à suivre en cas de 
    // problème de connexion
    print("<h3>Un problème est survenu</h3>");
    print("<img src='./image.jpg'>");
    print("<a href='./accueil.php'>Accueil</a>");

    // var_dump ($e->getMessage());
    die();
}

// 3. Créer une requête
$sql = "SELECT * FROM film WHERE titre LIKE :termeRecherche";

// 4. Préparer
$stmt = $cnx->prepare($sql);

// 5. Donner des valeurs aux paramètres (placeholders)
$stmt->bindValue(":termeRecherche", "%" . $termeRecherche . "%", PDO::PARAM_STR);

// 6. Executer la requête
$stmt->execute();

// 7. Obtenir les données
$arrayFilms = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Encoder le tableau contenant les films en JSON
$tableauJSON = json_encode($arrayFilms);
print ($tableauJSON);



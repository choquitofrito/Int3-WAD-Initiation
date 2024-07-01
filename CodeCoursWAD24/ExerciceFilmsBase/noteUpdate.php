<?php

var_dump ($_POST);
die();
$idFilm = $_POST['idFilm'];
$valeur = $_POST['valeur'];
$idUtilisateur = $_SESSION['idUtilisateur'];
$nouvelleNote = $_POST['nouvelleNote'];

// Connecter à la BD (PDO)
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

if ($nouvelleNote === "true" ){
    $sql = "INSERT INTO note (id, valeur, idUtilisateur, idFilm) VALUES (null, :valeur, :idUtilisateur, :idFilm)";

}
else {
    $sql = "UPDATE note SET valeur = :valeur WHERE idUtilisateur=:idUtilisateur AND idFilm=:idFilm";
}











?>
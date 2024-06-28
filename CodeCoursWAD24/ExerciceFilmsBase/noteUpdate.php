<?php



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

// $valeur = $_GET....

$sql = "UPDATE note SET valeur=:valeur WHERE note.id =:id";

$sql = "INSERT INTO note (id, valeur, idUtilisateur, idFilm) VALUES (null, :valeur, :idUtilisateur, :idFilm)";











?>
<?php
session_start();
$loginUtilisateur = $_SESSION['loginConnecte'];
$idFilm = $_GET['id'];
$deleteLike = $_GET['deleteLike'];

var_dump($deleteLike);


$arr = ['donnees' => [],
        'erreurs' => [] ]; // erreurs va être (notre choix) une liste de string

include "./connexion/db.php";

try {
    $cnx = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASS);
} catch (Exception $e) {
    // jamais en production car ça montre des infos
    // sensibles
    $arr['erreurs'][] = "Érreur de connexion"; // il y a mieux (HTTP headers)
    die();
}


if ($deleteLike == 'true') {
    $sql = "DELETE L FROM favori L" .
    " INNER JOIN utilisateur U ON U.id = L.idUtilisateur" .
    " WHERE L.idFilm=:idFilm AND U.login=:login";
}
else {
    $sql = "INSERT INTO favori (idFilm, idUtilisateur)" .
    " SELECT :idFilm as idFilm, id FROM utilisateur WHERE login=:login";
}

    // INSERT INTO favori (idFilm, idUtilisateur) SELECT 8 as idFilm, id FROM utilisateur WHERE login='wad@interface3.be'; 

    // INSERT INTO favori (id, idFilm, idUtilisateur)
    // SELECT :id, :idFilm, id FROM utilisateur WHERE login=:login


    // INSERT INTO favori (id, idFilm, idUtilisateur)
// SELECT NULL, id, :idFilm FROM utilisateur WHERE login=:login

    // $sql .= " VALUES (NULL, :idFilm, :idUtilisateur)";
// }
// $titre = "%" . $_POST['titre'] . "%";
// $sql = "SELECT * FROM favori" .
//         " INNER JOIN utilisateur ON utilisateur.id = favori.idUtilisateur" .      
//         " WHERE favori.idFilm=:idFilm AND utilisateur.login=:login";
// DECLARE @Id INT
// SET @Id = (SELECT id FROM utilisateur WHERE login=:login)
// INSERT INTO favori (id, idFilm, idUtilisateur)
// VALUES (NULL, :idFilm, @Id);

$stmt = $cnx->prepare($sql);
// if ($deleteLike == false) {
//     $stmt->bindValue(":id", NULL);
// }
$stmt->bindValue(":login", $loginUtilisateur);
$stmt->bindValue(":idFilm", $idFilm);
$stmt->execute();

// var_dump($stmt->errorInfo());
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
// var_dump($res);
$arr['donnees'] = $res; 
// var_dump($res);
echo json_encode ($arr);
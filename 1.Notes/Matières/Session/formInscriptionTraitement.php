<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// Récuperer les données du form
$nom = $_POST['nom'];
$login = $_POST['login'];
$password = $_POST['password'];


var_dump ($_POST);

// Filtrer le login et password
// (plus tard)

// Connecter à la BD (loginpassbd, tableau Utilisateur)
include "./connexion/db.php";

try {
    $cnx = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASS);
} catch (Exception $e) {
    // jamais en production car ça montre des infos
    // sensibles

    // echo $e->getMessage();
    die();
}

// Créer une requête pour chercher le login du form
$sql = "INSERT INTO utilisateur (id, nom, login, password) VALUES (null, :nom, :login, :password)";

// Vérifier si le password du form correspond à celui de la BD
$stmt = $cnx->prepare($sql);
$stmt->bindValue(":nom", $nom);
$stmt->bindValue(":login", $login);

// dans la BD on insére le hash du password, pas le password tel quel
$passwordHash = password_hash ($password, PASSWORD_BCRYPT);
print ($passwordHash);

$stmt->bindValue(":password", $passwordHash);
// Lancer la requête
$stmt->execute();
var_dump ($stmt->errorInfo());

// Si inscription ok, stocker login dans la session et aller vers la page d'accueil
session_start();
$_SESSION['login'] = $login;
header ("./accueil.php");

?>    
</body>
</html>


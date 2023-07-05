<?php
session_start();

// 1. Récuperer le login et le pass du formulaire
$login = $_POST['login'];
$password = $_POST['password'];


// 2. Connecter à la BD
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

// 3. Obtenir l'utilisateur de la BD (on cherche par login)

// Créer la requête
$sql = "SELECT nom,login,password FROM utilisateur WHERE login = :login";

// Preparer la requête et la lancer
$stmt = $cnx->prepare($sql);
$stmt->bindValue (":login", $login);
$stmt->execute();

// Obtenir le résultat dans un array
$resArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Utiliser password_verify por vérifier que le password du form est celui de la BD
$passwordBD = $resArray[0]['password'];


if (password_verify($password, $passwordBD) == true){
    // stocker dans la session le login
    session_start();
    $_SESSION['login'] = $login;
    $_SESSION['nom'] = $resArray[0]['nom'];

    // login ok, on va vers l'accueil
    header ("location: ./accueil.php");    
}
else {
    // mauvais user ou mauvais password
    header ("location: ./login.php?msg=erreur");    
}


?>


<?php
// vérifier login et pass dans la BD
// var_dump ($_POST);
// die();

// tout ok 

// charger une autre page

// var_dump ($_POST);

// print ("login: " . $login);
// die();

// stocker le login dans la session
// aucune sécurite (au départ)
session_start();
$login = $_POST['login'];

// filtrer le login et voir s'il est valable

$_SESSION['login'] = $login;


header ("location: ./accueil.php");



?>


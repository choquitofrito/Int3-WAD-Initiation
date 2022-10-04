<html>
<head>
<meta charset = "utf-8">
</head>
<!-- On a besoin des balises car cette page sera affichée -->
<body>

<?php


// 1. connecter à la BD
include "./config/config.php";

try {
    $pdo = new PDO(MYSQL_DSN, DB_USER, DB_PWD);
} 
catch (PDOException $e) {
    $pdo = null;               
    die('Problème technique'); 
}	
// 2. obtenir les données du formulaire et le mettre dans de variables
$sexeChoisi =  $_POST['selectSexe'];

// 3. faire la requête de recherche
$sql = "SELECT * FROM t_characters WHERE sex = :leSexe";
$resultat = $pdo->prepare ($sql); // envoyer la requête au serveur et obtenir 
								// un objet PDOStatement qui permet de lancer
								// la requête et stocker le résultat); 
	
$resultat->bindValue (":leSexe", $sexeChoisi); // donner une valeur au paramétre de la requête
$resultat->execute(); // lancer la requête
$tableau = $resultat->fetchAll (PDO::FETCH_ASSOC);

// 4. Dans ce cas, afficher les données de la BD sans aucun format
foreach  ($tableau as $indexPersonnage => $unPersonnage){
	foreach ($unPersonnage as $clePersonnage => $valeurCle){
		echo "<br>".$clePersonnage." : ".$valeurCle;
	}
	echo "<br>";
}





?>
</body>
</html>

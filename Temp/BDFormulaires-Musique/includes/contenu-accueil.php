<?php

// Obtenir les groupes

// 0. Inclure la config
include "./db/config.php";
// 1. Créer la connexion
$cnx = new PDO (DSN, USER, PASSWORD);
// 2. Créer une requête
$sql = "SELECT * FROM groupes ORDER BY RAND() LIMIT 10";
// 3. Préparer la requête
$stmt = $cnx->prepare($sql);
// 4. Executer la requête
$stmt->execute();
// 5. Stocker le résultat de la recherche
// dans un array
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($res as $cle => $arrGroupe) {
    print ('<div class="card" style="width: 18rem;">');
    print ('<img class="card-img-top" src="./images/' . $arrGroupe['lienImage']. '" alt="Card image cap">');
    print ('<div class="card-body">');
    print ('<h5 class="card-title">' . $arrGroupe['nom'] . '</h5>');
    print ('<p class="card-text">Description</p>');
    print ('<a href="./includes/affichageMorceaux.php?idGroupe=' . $arrGroupe['id']. '" class="btn btn-primary">Go somewhere</a>');
    print ('</div>');
    print ('</div>');
}

var_dump ($res);






// Afficher les groupes avec de cartes



?>

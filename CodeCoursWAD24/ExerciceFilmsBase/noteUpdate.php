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

// var_dump($_POST);

$idFilm = $_POST['idFilm'];
$idUtilisateur = $_POST['idUtilisateur'];
$valeur = $_POST['valeur'];
$nouvelleNote = $_POST['nouvelleNote']; // true or false

try {
    $sql ="";
    if ($nouvelleNote == "true") {
        // INSERT
        $sql = "INSERT INTO note (id, valeur, idUtilisateur, idFilm) VALUES (null, :valeur, :idUtilisateur, :idFilm)";
    } else {
        // UPDATE
        $sql = "UPDATE note SET valeur=:valeur WHERE idUtilisateur=:idUtilisateur and idFilm=:idFilm";
    }
    $stmt = $cnx->prepare($sql);

    $stmt->bindValue(":valeur", $valeur);
    $stmt->bindValue(":idUtilisateur", $idUtilisateur);
    $stmt->bindValue(":idFilm", $idFilm);
    $stmt->execute();
    
    // indiquer au client si la requête a fonctionné
    echo json_encode(["etat" => "success"]);

}
catch (Exception $e){
    // indiquer au client si la requête a fonctionné
    echo json_encode(["etat" => "error"]);


}







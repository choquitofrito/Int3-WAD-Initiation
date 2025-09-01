<?php

require_once "./classes/Personne.php";

$p1 = new Personne ("Orsula", "lire");
$p2 = new Personne ("Tran", "déssiner");

$personnes = [$p1, $p2];
echo json_encode ($personnes);

?>

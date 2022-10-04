<?php

$arrayVilles= array ("Paris"=> array("Londres", "Bruxelles","Tokyo"),
                    "Pekin"=> array("Washington","Tokyo","New York"));
                           

$choix= $_GET['villeDepart'];

$keys= array_keys($arrayVilles);

if (in_array($choix,$keys)){
    echo json_encode($arrayVilles[$choix]);
}
else {
    echo json_encode(array());
}


 
 
?>
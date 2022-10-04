<?php

header("Content-type: text/javascript");
/* voici un array en PHP */
$personne1= array ("nom" =>"Julie",
              "prenom"=>"Christine");
$personne2= array ("nom" =>"Cho",
              "prenom"=>"Kimball");
$personnes= array ($personne1,$personne2);

$personnesJs= json_encode($personnes);
echo $personnesJs;
//echo "var javascript_array=".$nomsJs.";\n";


?>



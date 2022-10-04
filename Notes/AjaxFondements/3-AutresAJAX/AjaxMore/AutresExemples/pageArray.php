<?php

header("Content-type: text/javascript");
/* voici un array en PHP */
$personne= array ("nom" =>"Julie",
              "prenom"=>"Christine");

$personneJs= json_encode($personne);
echo $personneJs;
//echo "var javascript_array=".$nomsJs.";\n";


?>



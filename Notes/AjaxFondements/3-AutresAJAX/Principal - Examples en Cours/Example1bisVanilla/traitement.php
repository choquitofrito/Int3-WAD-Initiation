<?php

$ville = ['nom'=>'Bruxelles',
		'population'=>1400000,
		'pays'=>'Belgique'];
		
		
echo "<ul>";
foreach ($ville as $cle => $valeur){
	echo "<li>".$cle." : ".$valeur."</li>";
}
echo "</ul>";



?>

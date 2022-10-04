<?php

if ($_GET['nom']=="Jean"){
   echo json_encode(array("Bonjour"));
}
else {
	echo json_encode(array("Au revoire"));
	
}




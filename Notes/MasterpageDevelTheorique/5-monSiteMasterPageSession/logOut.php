<?php
	// le session_start est dans le header
	session_destroy();
	header ("location: ./index.php");
	
	// si on veut effacer uniquement une variable: 
	// unset($_SESSION['login']));
	// dans ce cas on veut détruire completement la session

?>

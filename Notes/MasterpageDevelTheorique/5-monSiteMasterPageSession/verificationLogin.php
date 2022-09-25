<?php
	
	
	// se connecter à la BD et verifier login et pass
	$fakeLogin="Sandrine";
	$fakePass="rouge";
		
	$login="";
	
	if (isset($_POST['login'])){
		if (strlen($_POST['login'])>=5 && strlen($_POST['login'])<=10){
				$login=htmlentities($_POST['login']);
				echo "Le login est: ".$login;
				$_SESSION['login']=$login;
				header ("location: ./index.php");
		}
		else {
			echo "<BR />Le login n'est pas correct<BR />";
			include "./login.php";
		}
	}
	
?>

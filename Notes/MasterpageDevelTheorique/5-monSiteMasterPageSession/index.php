<html>
<head>
	<meta charset="utf-8">
	<title>
	<?php 
		if (isset($_GET['titre'])){
			$titre= htmlentities($_GET['titre']);
			echo $titre;
		}
		else{
			echo "Accueil";
		}
	?>
	</title>
</head>
<body>
<?php
	include "./includes/header.php";
	include "./includes/nav.php";
?>

<?php
	//var_dump ($_GET);
		
	if (isset($_GET['pageCharger'])){
		$nomPageCharger= htmlentities($_GET['pageCharger']);
		include "./".$nomPageCharger.".php";
	}
	else{
		include "./accueil.php";
	}
	
	
	
?>

<?php
	include "./includes/footer.php";
?>
</body>
</html>


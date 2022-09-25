<html>
<head>
	<meta charset="utf-8">
	<title>Monsite</title>
</head>
<body>

<?php
	include "./includes/header.php";
	include "./includes/nav.php";
?>
<!-- contenu -->
<!--<h2>Bienvenu! Voici le contenu de Monsite</h2>-->
<?php

    if (isset($_GET['p'])){
        include "./".$_GET['p'].".php";
    }
    else {
        echo "<h2>Contenu dans l'index</h2>";
    }
    
    
?>

<?php
	include "./includes/footer.php";
?>
</body>
</html>


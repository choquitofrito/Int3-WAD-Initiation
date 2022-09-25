<header>
Je suis le nouveau header 
<br/>

<?php

	session_start();
	if (isset($_SESSION['login'])) {
			echo "<p style='color:blue;display:inline-block'>";
			echo $_SESSION['login'];
			echo "</p>";
			echo "<a href='./index.php?pageCharger=logOut'>Logout</a>";
	}
	else{
		echo "<a href='./index.php?pageCharger=login'>Login</a>";
	}
?>
<br/>
</header>

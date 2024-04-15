<?php

session_start();

// effacer uniquement le login de la session
unset ($_SESSION['login']);

// ou on peut aussi effacer la session
// dans sa totalité
// session_destroy();


header ("location: ./login.php");

?>
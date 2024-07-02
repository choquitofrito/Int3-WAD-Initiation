<?php

if (empty($_SESSION['nomUtilisateur'])) {
    header("location: login.php");
}

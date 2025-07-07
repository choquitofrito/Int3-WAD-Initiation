<?php
session_start();

header ('location: ./formLogin.php');

session_destroy();
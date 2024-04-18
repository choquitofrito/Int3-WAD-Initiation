<?php

$noms = ['Jenny', 'Jessica', 'Debby', 'Amalia', 'Mariam'];

// Le opérateur "spread" (...) permet d'extraire les éléments d'un array 
$tousLesNoms = [...$noms, 'Khaoula', 'Emilie'];

var_dump ($tousLesNoms);

var_dump ($noms);
var_dump ([...$noms]);


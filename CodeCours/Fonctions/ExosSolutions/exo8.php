<?php
declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// penser d'abord à l'appel
afficheTableau ([5, 6 ,8]);

function afficheTableau (array $tab):void {
    foreach ($tab as $key => $val){
        print ($val . " ");
    }
}


?>

    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// var_dump ($_POST);

$indexAnimalChoisi = $_POST['animal'];

$images = ['chat.jpg','souris.jpg','chien.jpg'];

print ("<img src='./images/" . $images[$indexAnimalChoisi] . "'>");


?>
    

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
    
    <?php
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    // attention, pas sécurisé
    print ("Bonjour " . $prenom . " " . $nom);

    if ($nom == "Leal" AND $prenom == "Fran"){
        print ("<br>Que la force soi avec toi ");
        print ("<a href='https://www.starwars.com/'>Star Wars</a>"); 
    }
    ?>
</body>
</html>
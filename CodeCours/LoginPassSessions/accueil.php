<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="./logout.php">Se déconnecter</a>
    <h1>Bienvenue au site
        <?php
        session_start();
        echo $_SESSION['nom'];
        
        ?>
    !!!</h1>
    Je suis le contenu du site
    
</body>

</html>
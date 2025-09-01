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

        // vérifier si un user est connecté. Autrement aller vers le login
        if ( isset($_SESSION['email']) == false){
            header ('location: ./formLogin.php');
        }

        echo $_SESSION['nom'];
        
        ?>
    !!!</h1>
    Je suis le contenu du site
    
</body>

</html>
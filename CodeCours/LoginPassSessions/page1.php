<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    session_start();
    
    echo "je suis dans la page1";
    $_SESSION['potte'] = 'Emilie';

    ?>
    <a href="./page2.php?potte=">page 2</a>

</body>
</html>
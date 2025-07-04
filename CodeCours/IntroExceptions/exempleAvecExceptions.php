<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // try{
    //     $cnx = new PDO ('asdfsadfasdf', 'asdfasdfasdf', 'asdfasdf');
    // }
    // catch (Exception $e){
    //     // echo "Une erreur s'est produite";
    //     // die();

    //     // ou 

    //     // dans la réalite, une rédirection 
    //     header('location: pageErreur.php');
    // }

    $division = function (float $v1, float $v2):float{
        if ($v2 != 0){
            return $v1 / $v2;
        }
        else {
            // division par zero
            throw new Exception ("Division par zéro");
        }
    };


    try {
        $div = $division (4,0);
    }
    catch (Exception $e) {
        echo "Une exception s'est produite: ";
        echo $e->getMessage();
        // header (.....)
    }
    echo "on continue";

    ?>
</body>
</html>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    $valeurCorrecte = mt_rand(0, 10);


    $valeurChoisie = $_POST['chiffre'];
    if (filter_var($valeurChoisie, FILTER_VALIDATE_INT) == false) {
        print("La valeur est incorrecte");
        print("<br><a href='./ex3Form.php'>Ré-éssayer</a>");
    } else {
        // debug
        // $valeurChoisie = $valeurCorrecte;
        if ($valeurCorrecte == $valeurChoisie) {
            print("<img src='./images/soleil.jpg'>");
        } else {
            print("<br>Oh non! La valeur était " . $valeurCorrecte);
            print("<br><a href='./ex3Form.php'>Ré-éssayer</a>");
        }
    }
    ?>
</body>

</html>
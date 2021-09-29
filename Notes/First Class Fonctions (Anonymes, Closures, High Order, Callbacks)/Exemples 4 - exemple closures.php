<?php
declare(strict_types=1);
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php

    // Fonction qui génére du HTML - h1, h2, ....
    $genHeader = function (string $texte, string $taille):void {
        echo "<" . $taille . ">" . $texte . "<" . $taille . ">";
    };

    $genHeader("du vin!", "h1");
    $genHeader("de l'eau!", "h1");
    $genHeader("du riz!", "h4");
    $genHeader("fromage", "h4");

    // on pourrait aller plus loin et générer des fonctions spécifiques pour chaque header
    // en utilisant une closure
    function generateurFonctionHeader($taille): callable
    {
        $fn = function (string $texte) use ($taille) {
            echo "<" . $taille . ">" . $texte . "<" . $taille . ">";
        };
        return $fn;
    }

    $h1 = generateurFonctionHeader("h1");

    $h1("du vin");
    // on ne doit plus indiquer la taille, car elle a été definie 
    // quand on appelle le generateur.

    // on gagne dans les appels avec notre fonction personnalisée.
    // Et plus la fonction a de paramètres à definir dans le générateur
    // (ici la $taille uniquement, mais on aurait pu rajouter la couleur)
    // plus on gagnera dans les appels sucessives comme celle-ci 
    $h1("de l'eau");

    $h4 = generateurFonctionHeader("h4");
    $h4("du riz");
    $h4("fromage");




    ?>
</body>


<script>
    // on va faire l'équivalent en JS!


    // générer h1, h2, ....
    const genHeader = function ( texte,  taille) {
        document.write ( "<" + taille + ">" + texte + "<" + taille + ">")
    };

    genHeader("du vin!", "h1");
    genHeader("de l'eau!", "h1");
    genHeader("du riz!", "h4");
    genHeader("fromage", "h4");

    // on pourrait aller plus loin et générer des fonctions spécifiques pour chaque header
    // en utilisant une closure
    const generateurFonctionHeader = function (taille)
    {
        fn = function ( texte)  {
            document.write ( "<" + taille + ">" + texte + "<" + taille + ">")
        }
        return fn;
    }

    const h1 = generateurFonctionHeader("h1");

    h1("du vin");
    // on ne doit plus indiquer la taille, car elle a été definie 
    // quand on appelle le generateur.

    // on gagne dans les appels avec notre fonction personnalisée.
    // Et plus la fonction a de paramètres à definir dans le générateur
    // (ici la taille uniquement, mais on aurait pu rajouter la couleur)
    // plus on gagnera dans les appels sucessives comme celle-ci 
    h1("de l'eau");

    const h4 = generateurFonctionHeader("h4");
    h4("du riz");
    h4("fromage");




</script>


</script>

</html>
<?php
declare (strict_types = 1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $tab = ['Annie', 'Anaïs', 'Ceren', 'Orsula'];

    // function qui génére une fonction 
    // et la renvoie
    function genererFonctionAffichage(string $typeFonction)
    {
        switch ($typeFonction) {
            case "UL":
                // print("On génère une fonction pour afficher en UL");
                return (function (array $tab, string $message = "hello") {
                    echo "<h5>" . $message . "</h5>";
                    echo "<ul>";
                    foreach ($tab as $key => $nom) {
                        echo "<li>" . $nom . "</li>";
                    }
                    echo "</ul>";
                });
                break;
            case "SELECT":
                // print("On génère une fonction pour afficher un SELECT");
                return (function (array $tab) {
                    echo "<select>";
                    foreach ($tab as $key => $nom) {
                        echo "<option>" . $nom . "</option>";
                    }
                    echo "</select>";
                });
                break;
        }
    }
    // on utilise le générateur pour crée une fonction
    // qui nous convient
    // $maFonctionSelect = genererFonctionAffichage("SELECT");
    // $maFonctionSelect($tab);
    $maFonctionUL = genererFonctionAffichage("UL");
    $maFonctionUL($tab, "Un message");

    genererFonctionAffichage("SELECT")($tab);

    ?>
</body>

</html>


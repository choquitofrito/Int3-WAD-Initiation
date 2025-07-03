<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $tab = ['Annie', 'Anaïs', 'Ceren', 'Orsula'];

    // paradigme 1, sans 1st class return

    // fonction qui affiche un array en UL
    function afficheArrayUL(array $tab): void
    {
        echo "<ul>";
        foreach ($tab as $key => $nom) {
            echo "<li>" . $nom . "</li>";
        }
        echo "</ul>";
    }

    // fonction qui crée un select 
    // les options sont les éléments du tableau
    function creerSelect(array $tab): void
    {
        echo "<select>";
        foreach ($tab as $key => $nom) {
            echo "<option>" . $nom . "</option>";
        }
        echo "</select>";
    }
    
    // utiliser les fonctions
    afficheArrayUL($tab);
    creerSelect($tab);
    afficheArrayUL($tab);


    ?>
</body>

</html>
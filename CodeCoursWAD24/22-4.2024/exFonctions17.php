<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function arrayMajuscules(array &$noms): void
    {
        
        // ici on change l'array
        for ($i = 0; $i < count($noms); $i++){
            $noms[$i] = ucfirst($noms[$i]);
        }
    }

    $lesNoms = ['mary','pepi','aisha'];
    arrayMajuscules($lesNoms);

    var_dump ($lesNoms); // ici les noms doivent s'afficher en majuscules

    ?>

</body>

</html>
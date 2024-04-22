<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $noms = ['Dupont', 'García', 'Smith'];
    $prenoms = ['Anne', 'Layla', 'Jean'];

    function nomComplets(array $arrayNoms, array $arrayPrenoms): array
    {
        $arrayNomsComplets = [];
        for ($i = 0; $i < count($arrayNoms); $i++) {
            $arrayNomsComplets[] = $arrayPrenoms[$i] . " " . $arrayNoms[$i];
        }
        return $arrayNomsComplets;
    }

    $res = nomComplets($noms, $prenoms);

    foreach ($res as $nomComplet){
        print ("<br>" . $nomComplet);
    }

    ?>


</body>

</html>
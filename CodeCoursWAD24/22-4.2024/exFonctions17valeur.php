<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Créer une fonction qui reçoit un array de noms 
    // La fonction doit renvoyer un nouvel array où les noms commencent par majuscule
    // L'array original n'est pas modifié

    // VERSION 1: On crée un nouvel array dans la fonction 
    // et on le renvoie
    function arrayMajuscules(array $noms): array
    {
        $nouvelArrayNoms = [];
        // ici on change l'array
        for ($i = 0; $i < count($noms); $i++) {
            $nouvelArrayNoms[] = ucfirst($noms[$i]); // on copie la valeur
        };
        return $nouvelArrayNoms;
    }
    $lesNoms = ['mary', 'pepi', 'aisha'];
    $lesNomsMajuscules = arrayMajuscules($lesNoms);

    var_dump($lesNomsMajuscules); // ici les noms doivent s'afficher en majuscules


    // VERSION 2: On crée un nouvel array dans la fonction 
    // et on le renvoie
    function arrayMajuscules2(array $noms): array
    {
        // dans cette version, on modifie le table $noms
        // N'oubliez pas que $noms est lui-même une copie de la variable
        // $noms qui se trouve à l'extérieur!!
        for ($i = 0; $i < count($noms); $i++) {
            $noms[$i] = ucfirst($noms[$i]); // on écrasse la valeur
                                            // attention à mettre l'index, on ne rajoute pas ici!
        };
        return $noms;
    }
    $lesNoms = ['mary', 'pepi', 'aisha'];
    $lesNomsMajuscules = arrayMajuscules2($lesNoms);

    var_dump($lesNomsMajuscules); // ici les noms doivent s'afficher en majuscules

    ?>

</body>

</html>
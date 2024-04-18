<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // ex.1
    $filmsRealisateur = [
        'Alien' => 'Ridley Scott',
        'Edward Scissorhands' => 'Tim Burton',
        'Total Recall' => 'Paul Verhoeven'
    ];

    // ------- une autre façon de stocker les films et les réalisateurs

    $film1 = [
        'titre' => 'Alien',
        'realisateur' => 'Ridley Scott'
    ];

    $film2 = [
        'titre' => 'Edward Scissorhands',
        'realisateur' => 'Tim Burton'
    ];

    $films = [$film1, $film2];

    // ex.2
    $filmsRealisateur['Alien'] = 'Ed Wood';
    // ------
    $films [0]['realisateur'] = 'Ed Wood';

    // var_dump ($filmsRealisateur);

    // ex.3




















    ?>
</body>

</html>
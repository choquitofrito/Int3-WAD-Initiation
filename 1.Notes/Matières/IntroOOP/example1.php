<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // sans OOP
    print("hello");

    $s1 = [
        'prenom' => 'Mariam',
        'hobby' => 'lire'
    ];
    $s2 = [
        'prenom' => 'Marwa',
        'hobby' => 'danser'
    ];

    function affichePersonne(array $personne): void
    {
        print("<h4>Je suis " . $personne['prenom'] . " et j'aime " . $personne['hobby'] . "</h4>");
    }

    affichePersonne($s1);
    affichePersonne($s2);


    // avec OOP
    include ("./Personne.php");

    $p1 = new Personne();
    $p1->prenom = "Juana";
    $p1->hobby = "nager";
    $p1->affiche();
    $p1->chanter();
    $p1->chanter();

    $p2 = new Personne();
    $p2->prenom = "Margaret";
    $p2->hobby = "musique";
    

    $n1 = "Coucou";
    var_dump ($n1);

    var_dump($p1);
    var_dump($p2);
    

    



    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // array indexé
    $tab = ["Jessica", "Amalia", "Kenza"];

    $tab[1] = "Charifa";

    unset($tab[2]);

    $tab[] = "Lola";

    // array associatif (comme un dictionnaire)
    $personne = [
        'prenom' => 'Mélusine',
        'hobby' => 'natation',
        'nationalite' => 'belge'
    ];

    $personne2 = [
        'prenom' => 'Kenza',
        'hobby' => 'chanter',
        'nationalite' => 'belge'
    ];

    $personne3 = [
        'prenom' => 'Alessandra',
        'hobby' => 'piano',
        'nationalite' => 'italienne'
    ];

    // CRUD (Create, Read, Update, Delete)

    // Read
    print("Le hobby de " . $personne['prenom'] . " est " . $personne['hobby']);

    // Update
    $personne['hobby'] = 'escalade';
    print("<br>Le hobby de " . $personne['prenom'] . " est " . $personne['hobby']);

    // Create
    $personne['age'] = 27;
    print("<br>" . $personne['prenom'] . " a " . $personne['age']);

    // Delete
    unset($personne['age']);

    // jamais sur un array associatif!
    // for ($count = 0; $count < 3; $count++) {
    //     print($personne[$count]);
    // }

    // on utilise foreach sur les arrays assoc
    foreach ($personne as $cle => $valeur) {
        print("<br>" . $cle . " : " . $valeur);
    }

    $cles = array_keys($personne);
    print("<br>Les cles de personne:");
    foreach ($cles as $cle) {
        print("<br>" . $cle);
    }

    print("<br>");
    var_dump($personne);

    $eleves = [$personne, $personne2, $personne3];
    
    $eleves[1]['hobby'] = 'lire';

    $eleves[1]['nationalite'] = ['marocaine','belge'];
    
    var_dump($eleves);

    // parcourir l'array global ($eleves)
    foreach ($eleves as $eleve){
        // chaque élément de l'array global est un array ($eleve)
        foreach ($eleve as $cle => $valeur){
            print ("<br>" . $cle . " : ");
            // si la valeur est un array, parcourir l'array pour afficher chaque valeur
            if (is_array($valeur)){
                foreach ($valeur as $val){
                    print ($val . ",");
                }
            }
            // si la valeur est un string, afficher le string
            else {
                print ($valeur);
            }
        }        
    }









































    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "Bonjour!";
    ?>

    Encore du HTML

    <?php
    echo "Encore du PHP!";

    $nom = "Khaoula";
    print("<h3>" . $nom . "</h3>");

    if ($nom == "Khaoula") {
        print("Interface 3!");
    }

    for ($i = 0; $i <= 20; $i = $i + 2) {
        print(" " . $i);
    }

    print("<ul>");
    for ($count = 0; $count <= 20; $count = $count + 2) {
        print("<li>" . $count . "</li>");
    }
    print("</ul>");

    // print ("<img src='./chat.jpg'>");

    // tableaux
    $noms = ['Leslie', 'Jessica', 'Kenza'];

    // Arrays simples
    // CRUD (Create, Read, Update et Delete)

    // Create
    $noms[] = 'Mariam';

    // Read
    print($noms[2]);
    print("<br>");
    print($noms[3]);
    print("<br>");
    print("On continue");

    // Update
    $noms[2] = 'Fatima';
    print("<br>");
    print($noms[2]);

    // Delete
    unset($noms[2]);
    print("<br>");

    print_r($noms);
    print("<br>");
    foreach ($noms as $cle => $valeur) {
        print(" " . $valeur);
    }

    print("<br>");
    foreach ($noms as $valeur) {
        print(" " . $valeur);
    }

    // Arrays associatifs
    $ville = [
        'nom' => 'Bruxelles',
        'population' => 1500000
    ];
    print("<br>");
    // CRUD
    // Create
    $ville['pays'] = 'Belgique';
    print_r($ville);

    print("<br>");
    // Read 
    print($ville['nom']);

    print("<ul>");
    foreach ($ville as $key => $value) {
        print("<li>" . $key . " : " . $value . "</li>");
    }
    print("</ul>");

    // Update
    $ville['population'] = $ville['population'] + 100000;
    print ("<br>Encore plus de gens!: " . $ville['population']);

    // Delete
    unset ($ville['population']);
    print_r($ville);





















    ?>


</body>

</html>
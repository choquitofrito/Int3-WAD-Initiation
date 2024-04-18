<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $arrayPays = [
        [
            'nom' => 'Italie',
            'capitale' => 'Rome',
        ],
        [
            'nom' => 'Japon',
            'capitale' => 'Tokyo'
        ],
        [
            'nom' => 'Corée du Sud',
            'capitale' => 'Seoul'
        ]
    ];

    print("<table>");

    print("<thead>");
    print("<tr>");
    $cles = array_keys($arrayPays[0]); // ['nom', 'capitale']
    foreach ($cles as $cle) {
        print("<th>" . $cle . "</th>");
    }
    print("</tr>");
    print("</thead>");

    foreach ($arrayPays as $pays){
        print ("<tr>");
        foreach ($pays as $valeur){
            print ("<td>" . $valeur . "</td>");
        }
        print ("</tr>");
    }
    print("</table>");



    ?>
    <style>
        table,
        tr,
        td {
            border: 1px solid blue;
        }
    </style>
</body>

</html>
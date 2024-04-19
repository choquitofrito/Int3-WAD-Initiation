<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // function afficherArray (array $tab):void {
    //     foreach ($tab as $val){
    //         print ($val . " , ");  
    //     }
    // }


    function afficherArray(array $tab): void
    {
        print ("<ul>");
        foreach ($tab as $val) {
            print("<li>" . $val . "</li>");
        }
        print ("</ul>");
    }

    $tab = ["chat", "chien", "requin"];
    afficherArray($tab);

    ?>


</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function affichePrixTVAC(float $prix): void
    {
        $pTVA = $prix * 1.21;
        print ("Le prix TVAC: " . $pTVA);
    }

    affichePrixTVAC(5.9);
    ?>


</body>

</html>
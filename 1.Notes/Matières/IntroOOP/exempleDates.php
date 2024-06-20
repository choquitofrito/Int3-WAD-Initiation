<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $d1 = "3/7/2024";

    $date1 = new DateTime();
    var_dump ($date1);

    $date2 = new DateTime ("8-10-2025");
    var_dump ($date2);
    print ($date2->format("Y-M-D"));
    print ("<br>");
    print ($date2->format("y-m-d"));
    print ("<br>");
    print ($date2->format("d-m-Y"));


    ?>

</body>

</html>
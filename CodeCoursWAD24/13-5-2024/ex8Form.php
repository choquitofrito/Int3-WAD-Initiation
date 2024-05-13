<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="./ex8FormTraitement.php" method="POST">
        <input type="number" name="prix">
        <select name="tauxTva">
            <option value="1.10">10%</option>
            <option value="1.17">17%</option>
            <option value="1.21">21%</option>
        </select>
        <input type="submit">
    </form>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $response = file_get_contents("https://official-joke-api.appspot.com/jokes/random/5");
        var_dump ($response);

        $resultatDecode = json_decode($response);

        print ("Question blague 1: ");
        print ($resultatDecode[1]->setup);
        print ("Réponse blague 1: ");
        print ($resultatDecode[1]->punchline);


        var_dump ($resultatDecode);
    ?>

    <script>
    

    </script>

</body>
</html>
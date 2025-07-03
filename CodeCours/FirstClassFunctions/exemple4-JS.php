<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        // création simple d'une fonction
        function somme (val1, val2){
            return val1 + val2;
        }
        let res = somme (90,100);
        console.log (`res somme ${res}`);

        // on profite de first class
        // 1. mettre une fonction dans une variable
        let multiplication = function (val1, val2){
            return (val1 * val2);
        };

    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        let res = somme(90, 100);
        console.log(`res somme ${res}`);

        // création simple d'une fonction
        function somme(val1, val2) {
            return val1 + val2;
        }


        // on profite de first class
        // 1. mettre une fonction dans une variable
        let multiplication = function(val1, val2) {
            return (val1 * val2);
        };
        let res2 = multiplication(90, 100);
        console.log(`res multiplication ${res2}`);

        // 2. envoyer la fonction en paramètre
        let tab = ['vert', 'bleu', 'rouge', 'blanc'];
        // array_map ($majuscules, $tab)
        
        function majuscules (chaine){
            console.log ( chaine.toUpperCase());
        }
        // console.log (majuscules ("asdadas"));
        
        tab.map (majuscules);

        

    </script>
</body>

</html>
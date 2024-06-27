<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        // f1 - affiche de valeurs
        function f1() {
            for (i = 1; i <= 10; i++) {
                console.log (i);
            }
        }

        // fonction qui prend plein de temps à finir (elle ne sert à rien)
        function functionLongue (){
            let a;
            for (i = 0; i < 1000000000; i++){
                a = i;
            }
        }

        // f1();
        // functionLongue();
        // console.log ("on a fini!");
       
        function f2 (){
            console.log ("Je suis f2");
            functionLongue();
            console.log ("On a fini la fonction longue");
        };

        f2();
        console.log ("on a fini f2, on est dans le code principal!");
        

    </script>
</body>

</html>
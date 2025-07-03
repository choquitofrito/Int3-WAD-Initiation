<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
    let tab = ['Annie', 'Anaïs', 'Ceren', 'Orsula'];

    // function qui génére une fonction 
    // et la renvoie
    function genererFonctionAffichage(typeFonction)
    {
        switch (typeFonction) {
            case "UL":
                // print("On génère une fonction pour afficher en UL");
                return (function (tab, message = "hello") {
                    console.log ( "<h5>" + message + "</h5>");
                    console.log ( "<ul>");
                    
                    foreach ($tab as $key => $nom) {
                        console.log ( "<li>" + nom + "</li>";
                    }
                    console.log ( "</ul>";
                });
                break;
            case "SELECT":
                // print("On génère une fonction pour afficher un SELECT");
                return (function (tab) {
                    console.log ( "<select>");
                    foreach ($tab as $key => $nom) {
                        console.log ( "<option>" + nom + "</option>");
                    }
                    console.log ( "</select>");
                });
                break;
        }
    }
    // on utilise le générateur pour crée une fonction
    // qui nous convient
    // $maFonctionSelect = genererFonctionAffichage("SELECT");
    // $maFonctionSelect($tab);
    $maFonctionUL = genererFonctionAffichage("UL");
    $maFonctionUL($tab, "Un message");

    genererFonctionAffichage("SELECT")($tab);



    </script>
    
</body>
</html>
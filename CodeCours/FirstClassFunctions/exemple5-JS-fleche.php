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
        let genererFonctionAffichage = (typeFonction) => {
            switch (typeFonction) {
                case "UL":
                    // print("On génère une fonction pour afficher en UL");
                    return ((tab, message = "hello") => {
                        document.write("<h5>" + message + "</h5>");
                        document.write("<ul>");

                        tab.forEach((nom) => {
                            document.write("<li>" + nom + "</li>")
                        });

                        // foreach ($tab as $key => $nom) {
                        //     console.log ( "<li>" + nom + "</li>";
                        // }
                        console.log("</ul>");
                    });
                    break;
                case "SELECT":
                    // print("On génère une fonction pour afficher un SELECT");
                    return ((tab) => {
                        document.write("<select>");
                        tab.forEach((nom) => {
                            document.write("<option>" + nom + "</option>");
                        });
                        document.write("</select>");
                    });
                    break;
            }
        }

        // on utilise le générateur pour crée une fonction
        // qui nous convient
        let maFonctionUL = genererFonctionAffichage("UL");
        maFonctionUL(tab, "Un message");

        let maFonctionSELECT = genererFonctionAffichage("SELECT");
        maFonctionSELECT(tab);

        genererFonctionAffichage("SELECT")(tab);
    </script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // 1. Fonctions anonymes

    // fonction standard, pas anonyme
    function hello(string $msg = null): void
    {
        echo "Hello " . $msg;
    }
    hello();

    // fonction anonyme, pas de nom!!!
    // on peut les stocker dans une variable et dans des arrays
    $hello = function (string $msg): void {
        echo "<br>Hello anonyme " . $msg;
    };
    $hello("Laure"); // n'oubliez pas le $
    $arrayFonctions = [$hello, $hello, $hello]; // ça ne sert à rien ici, mais on montre qu'on peut faire un array de fonctions

    echo "<br>";
    foreach ($arrayFonctions as $key => $val) {
        $val(rand(1, 10));
    }

    $autreArray = [
        function (string $msg): void {
            echo "<br>f1 " . $msg;
        },
        function (): void {
            echo "<br>f2";
        }
    ];
    $autreArray[0]("coucou f1");
    $autreArray[1]();

    $autreHello = $hello;
    $autreHello("nanana");

    // Envoi de fonctions en paramètre
    $arrPrix = [40, 50, 100];
    
    // Programmation standard 
    // Fonction normale qui reçoit un array de prix et renvoie un nouvel array contenant les prix TVAC
    function fonctionArrayTVAC (array $unArray) : array {
        $arrayRes = [];
        foreach ($unArray as $val){
            $arrayRes[] = $val * 1.21;
        }
        return ($arrayRes);
    }
    $arrPrixTVAC = fonctionArrayTVAC ($arrPrix);
    var_dump ($arrPrixTVAC);

    // Programmation avec fonctions anonymes
    $fArrayTVAC  = function (array $unArray) : array {
        $arrayRes = [];
        foreach ($unArray as $val){
            $arrayRes[] = $val * 1.21;
        }
        return ($arrayRes);
    }; // pas oublier ;
    $arrPrixTVAC = $fArrayTVAC($arrPrix); // n'oubliez pas le $ :)
    var_dump ($arrPrixTVAC);


    echo "<br><br>";

/////////////////////////////////////////////////

    // on va avoir un array sur lequel appliquer une fonction
    // MAIS la fonction qu'on applique est créé pour agir sur UN SEUL élément
    $arrPrix = [10,100,1000];
    
    $elemTVAC = function (float $prix): float{
        return ($prix * 1.21);
    };
    // on envoie une fonction en paramètre
    $nouvelTVAC = array_map ($elemTVAC, $arrPrix); // notez qu'on envoie la variable mais on spécifie pas de params, 
                                                // car array map parcourt l'array 
    var_dump ($nouvelTVAC);

    // on va faire un fakeArrayMap rudimentaire
    $arrPrix = [10,100,1000];
    
    // dans le fake on peut mettre juste un array en paramètre
    function fakeArrayMap (callable $uneFonction, array $unArray): array {
        $nouvelArray = [];
        foreach ($unArray as $val){
            $nouvelArray[] = $uneFonction($val);
        }
        return $nouvelArray;
    }
    echo "<br><br>Utilisons fake array map<br>";
    $nouvelTVAC = fakeArrayMap ($elemTVAC, $arrPrix);
    var_dump ($nouvelTVAC);

////////
$elemTVAC = function (float $prix): float{
    return ($prix * 1.21);
};

$doubler = function (float $prix): float{
    return ($prix * 2);
};

$reduire = function (float $prix): float{
    return ($prix - $prix * 0.20);
};

$arrPrix = [200,400,600];
$arrTVAC = array_map($elemTVAC, $arrPrix);
echo "<br>";
var_dump ($arrTVAC);
$arrDoubles = array_map($doubler, $arrPrix);
echo "<br>";
var_dump ($arrDoubles);
$arrReduit = array_map($reduire, $arrPrix);
echo "<br>";
var_dump ($arrReduit);

/////


    










    ?>
</body>

</html>
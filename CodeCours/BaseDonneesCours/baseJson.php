    // JSON
    // encoder en json -> transformer un objet ou un array ou un array d'objets de PHP en string JSON
    $songs = ["Bad", "Beat it", "Thriller"];
    print(json_encode($songs));
    $personne = [
        'nom' => 'Tran',
        'hobby' => 'danser',
        'adresse' => 'Rue van AA'
    ];
    print(json_encode($personne));
    $uneDate = new DateTime();
    print(json_encode($uneDate));

    $people = [$personne, $personne, $personne];
    print(json_encode($people));

    // decoder json -> interpreter un string JSON
    // et créer l'objet, l'array ou l'array d'objet
    // du PHP 

    ?>
    <script>
        // encoder en json
        let songs = ["Inner visions", "Happy Birthday", "Superstition"];
        // encoder en JSON des structures de données 
        // de JS
        console.log(JSON.stringify(songs));
        let personne = {'nom' : 'Tran',
                        'hobby' : 'danser',
                        'adresse' : 'Rue van AA'
                        };
        console.log (personne);
        console.log (JSON.stringify(personne));
        
        // decoder un string JSON pour créer un objet
        let film = '{"titre":"Alien", "duree":"125"}';
        console.log (JSON.parse(film));


    </script>

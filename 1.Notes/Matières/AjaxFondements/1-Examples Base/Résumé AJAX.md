
# La Boucle d'Événements en JavaScript 

## Qu'est-ce que la boucle d'événements ?

La boucle d'événements est un mécanisme fondamental dans JavaScript pour gérer les opérations asynchrones. Elle permet au programme de répondre aux événements (comme des clics de souris, des requêtes réseau, etc.) sans bloquer l'exécution du code.

## Comment fonctionne la boucle d'événements ?

1. **Pile d'appels (Call Stack)** : Exécute les fonctions et gère les appels synchrones (les appels aux fonctions s'empilent et se lancen dans l'ordre où elles ont été appelées)
2. **File d'attente des messages (Message Queue)** : Contient les messages (ou événements) à traiter une fois que la pile d'appels est vide.
3. **Boucle d'événements** : Elle vérifie en continu la pile d'appels et la file d'attente des messages. Si la pile d'appels est vide, elle prend le premier message de la file d'attente et l'exécute.

## Exemple 1 : Gestionnaire d'événements

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Boucle d'événements</title>
</head>
<body>
    <button id="myButton">Click Me!</button>

    <script>
        // Ajouter un gestionnaire d'événements pour le bouton
        document.getElementById("myButton").addEventListener("click", function() {
            alert("Button was clicked!");
        });

        // Une autre opération
        console.log("Event listener added.");
    </script>
</body>
</html>
```

### Étapes :

- **Initialisation** : Le gestionnaire d'événements est ajouté pour le bouton.
- **Attente d'événements** : La boucle d'événements attend qu'un utilisateur clique sur le bouton.
- **Gestion de l'événement** : Lorsque le bouton est cliqué, la fonction attachée est exécutée et une alerte s'affiche.

## Exemple 2 : Utilisation de `setTimeout`

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Boucle d'événements</title>
</head>
<body>
    <button id="startButton">Start Timer</button>
    <script>
        // Ajouter un gestionnaire d'événements pour le bouton
        document.getElementById("startButton").addEventListener("click", function() {
            console.log("Timer started.");
            // Démarrer un timer qui se déclenchera après 3 secondes
            setTimeout(function() {
                alert("Timer finished!");
            }, 3000);
        });

        // Une autre opération
        console.log("Event listener added for the timer.");
    </script>
</body>
</html>
```

### Étapes :

- **Initialisation** : Le gestionnaire d'événements est ajouté pour le bouton.
- **Attente d'événements** : La boucle d'événements attend qu'un utilisateur clique sur le bouton.
- **Déclenchement d'un timer** : Lorsque le bouton est cliqué, un timer est démarré.
- **Gestion de l'événement de timer** : Après 3 secondes, le `setTimeout` place l'événement dans la file d'attente. La boucle d'événements exécute ensuite cette fonction pour afficher l'alerte. Entretemps, le console.log sera lance: le code ne s'arrete pas pour attendre les 3 secondes!



## Exemple 3 : Requête AJAX avec `XMLHttpRequest`

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Créer un bouton. Quand on clique 
    le serveur nous renvoie du HTML (un texte) -->
    <!-- Le client n'envoie rien. Le serveur ne reçoit rien -->
    <button id="afficher">
        Afficher
    </button>
    <div id="contenuReponse">
        Ici on aura la reponse du serveur
    </div>
    <script src="./main.js"></script>
</body>
</html>
```


```js
document.getElementById("afficher").addEventListener("click", (evenement) => {
    let xhr = new XMLHttpRequest();


    xhr.onreadystatechange = function () {
        // readyState contient l'état de l'appel AJAX
        // 0 (UNSENT) : La requête a été créée mais la méthode open() n'a pas encore été appelée.
        // 1 (OPENED) : La méthode open() a été appelée. La requête a été initialisée.
        // 2 (HEADERS_RECEIVED) : La méthode send() a été appelée et les en-têtes de la réponse ont été reçus.
        // 3 (LOADING) : Le téléchargement de la réponse est en cours. Des données partielles sont disponibles.
        // 4 (DONE) : La requête est terminée. Toutes les données de réponse sont disponibles.
        if (xhr.readyState == 4) {
            if (xhr.status == 200 || xhr.status == 304) {  // le status de l'appel http
                document.getElementById("contenuReponse").innerHTML = xhr.responseText;
            }
            else {
                document.getElementById("contenuReponse").innerHTML = "Erreur";
            }
        }
    }

    xhr.open("GET", "./traitement.php");
    xhr.send(null);
})
```

1. **Initialisation** : Le gestionnaire d'événements est ajouté pour le bouton "Obtenir données".
2. **Attente d'événements** : La boucle d'événements attend qu'un utilisateur clique sur le bouton.
3. **Déclenchement de la requête AJAX** :
    - **Création de `XMLHttpRequest`** : Une nouvelle instance de `XMLHttpRequest` est créée.
    - **Configuration de la requête** : La méthode `open` configure la requête avec le type de requête (GET) et l'URL.
    - **Définition du gestionnaire d'événements** : La fonction `onreadystatechange` définit ce qui doit se passer lorsque l'état de la requête change. Si `readyState` est 4 (la requête est terminée) et `status` est 200 (réponse réussie), les données reçues sont affichées.
4. **Envoi de la requête** : La méthode `send` envoie la requête au serveur.
5. **Gestion de la réponse** :
    - **Réponse réussie** : Si la réponse est réussie, les données sont converties en JSON et affichées dans le DOM.
    - **Erreur de réponse** : Si une erreur se produit, un message d'erreur est affiché dans la console.



## Exemple 4 : Requête AJAX avec `XMLHttpRequest` (Obtenir des données du serveur)

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Boucle d'événements avec AJAX en vanilla JS</title>
</head>
<body>
    <button id="fetchButton">Obtenir données</button>
    <div id="result"></div>

    <script>
        // Ajouter un gestionnaire d'événements pour le bouton
        document.getElementById("fetchButton").addEventListener("click", function() {
            console.log("Fetching data...");

            // Créer une nouvelle instance de XMLHttpRequest
            var xhr = new XMLHttpRequest();
            
            // Configurer la requête
            xhr.open('GET', 'https://jsonplaceholder.typicode.com/posts/1', true);

            // Définir ce qui doit se passer quand la réponse est prête
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) { // 4 signifie que la requête est terminée
                    if (xhr.status === 200) { // 200 signifie une réponse réussie
                        var data = JSON.parse(xhr.responseText);
                        // Mettre à jour le DOM avec les données reçues
                        document.getElementById("result").innerText = JSON.stringify(data);
                        console.log("Data fetched and displayed.");
                    } else {
                        console.error("Error fetching data:", xhr.status, xhr.statusText);
                    }
                }
            };

            // Envoyer la requête
            xhr.send();
        });

        // Une autre opération
        console.log("Event listener added for fetching data.");
    </script>
</body>
</html>
```

### Étapes :

1. **Initialisation** : Le gestionnaire d'événements est ajouté pour le bouton "Obtenir données".
2. **Attente d'événements** : La boucle d'événements attend qu'un utilisateur clique sur le bouton.
3. **Déclenchement de la requête AJAX** :
    - **Création de `XMLHttpRequest`** : Une nouvelle instance de `XMLHttpRequest` est créée.
    - **Configuration de la requête** : La méthode `open` configure la requête avec le type de requête (GET) et l'URL.
    - **Définition du gestionnaire d'événements** : La fonction `onreadystatechange` définit ce qui doit se passer lorsque l'état de la requête change. Si `readyState` est 4 (la requête est terminée) et `status` est 200 (réponse réussie), les données reçues sont affichées.
4. **Envoi de la requête** : La méthode `send` envoie la requête au serveur.
5. **Gestion de la réponse** :
    - **Réponse réussie** : Si la réponse est réussie, les données sont converties en JSON et affichées dans le DOM.
    - **Erreur de réponse** : Si une erreur se produit, un message d'erreur est affiché dans la console.


## Exemple 5 : Requête AJAX avec Fetch

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Boucle d'événements avec AJAX</title>
</head>
<body>
    <button id="fetchButton">Obtenir données</button>
    <div id="result"></div>

    <script>
        // Ajouter un gestionnaire d'événements pour le bouton
        document.getElementById("fetchButton").addEventListener("click", function() {
            console.log("Fetching data...");

            // Effectuer une requête AJAX pour obtenir des données
            fetch('https://jsonplaceholder.typicode.com/posts/1')
                .then(response => response.json())
                .then(data => {
                    // Mettre à jour le DOM avec les données reçues
                    document.getElementById("result").innerText = JSON.stringify(data);
                    console.log("Data fetched and displayed.");
                })
                .catch(error => {
                    console.error("Error fetching data:", error);
                });
        });

        // Une autre opération
        console.log("Event listener added for fetching data.");
    </script>
</body>
</html>
```

### Étapes :

1. **Initialisation** : Le gestionnaire d'événements est ajouté pour le bouton "Obtenir données".
2. **Attente d'événements** : La boucle d'événements attend qu'un utilisateur clique sur le bouton.
3. **Déclenchement de la requête AJAX** : Lorsque le bouton est cliqué, la fonction fetch est appelée pour effectuer une requête GET vers une API (https://jsonplaceholder.typicode.com/posts/1).
4. **Gestion de la réponse asynchrone** :
    - Le premier `then` reçoit la réponse et la convertit en JSON.
    - Le second `then` reçoit les données JSON et met à jour le DOM pour afficher les données.
    - Si une erreur survient, le `catch` la capture et affiche un message d'erreur dans la console.


## Résumé

La boucle d'événements permet à JavaScript de gérer efficacement les opérations asynchrones sans bloquer l'exécution du code. En écoutant et en répondant aux événements, elle assure que l'application reste réactive et interactive. Les gestionnaires d'événements, les timers et les requêtes AJAX sont des exemples courants d'utilisation de ce mécanisme.

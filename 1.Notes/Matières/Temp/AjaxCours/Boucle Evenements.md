# La Boucle d'Événements en JavaScript : Explication Plus Approfondie

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

1. Initialisation : Le gestionnaire d'événements est ajouté pour le bouton.
2. Attente d'événements : La boucle d'événements attend qu'un utilisateur clique sur le bouton.
3. Gestion de l'événement : Lorsque le bouton est cliqué, la fonction attachée est exécutée et une alerte s'affiche.
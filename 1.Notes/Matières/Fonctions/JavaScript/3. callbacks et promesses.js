// Callbacks et Promesses en JavaScript

// 1. Callbacks
// Un callback est une fonction passée en paramètre à une autre fonction
function traiterDonnees(donnees, callback) {
    // Simulation d'un traitement asynchrone
    setTimeout(() => {
        const resultat = donnees.map(x => x * 2);
        callback(resultat);
    }, 1000);
}

// Utilisation du callback
traiterDonnees([1, 2, 3], (resultat) => {
    console.log("Résultat:", resultat);
});

// Callback Hell (à éviter)
asyncOperation1((result1) => {
    asyncOperation2(result1, (result2) => {
        asyncOperation3(result2, (result3) => {
            console.log("Résultat final:", result3);
        });
    });
});

// 2. Promesses
// Une promesse représente une valeur qui pourrait être disponible maintenant, dans le futur, ou jamais
function traiterDonneesPromise(donnees) {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            try {
                const resultat = donnees.map(x => x * 2);
                resolve(resultat);
            } catch (error) {
                reject(error);
            }
        }, 1000);
    });
}

// Utilisation des promesses
traiterDonneesPromise([1, 2, 3])
    .then(resultat => console.log("Résultat:", resultat))
    .catch(error => console.error("Erreur:", error));

// Chaînage de promesses
fetch('https://api.example.com/data')
    .then(response => response.json())
    .then(data => traiterDonneesPromise(data))
    .then(resultat => console.log(resultat))
    .catch(error => console.error(error));

// Promise.all - attendre plusieurs promesses
const promesse1 = traiterDonneesPromise([1, 2, 3]);
const promesse2 = traiterDonneesPromise([4, 5, 6]);

Promise.all([promesse1, promesse2])
    .then(([resultat1, resultat2]) => {
        console.log("Tous les résultats:", resultat1, resultat2);
    })
    .catch(error => console.error("Une erreur est survenue:", error));

// Promise.race - première promesse résolue
Promise.race([promesse1, promesse2])
    .then(premierResultat => {
        console.log("Premier résultat:", premierResultat);
    });

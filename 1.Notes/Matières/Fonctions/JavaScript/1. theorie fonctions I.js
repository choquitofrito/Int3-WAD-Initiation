// Théorie des fonctions en JavaScript

// 1. Déclaration de base d'une fonction
function direBonjour() {
    console.log("Bonjour!");
}

// 2. Expression de fonction
const direBonjourExp = function() {
    console.log("Bonjour!");
};

// 3. Fonction fléchée (arrow function)
const direBonjourArrow = () => {
    console.log("Bonjour!");
};

// 4. Paramètres et arguments
function addition(a, b) {
    return a + b;
}

// 5. Paramètres par défaut
function saluer(nom = "visiteur") {
    console.log(`Bonjour ${nom}!`);
}

// 6. Rest parameters
function somme(...nombres) {
    return nombres.reduce((total, num) => total + num, 0);
}

// 7. Retour de valeurs
function calculer(a, b) {
    const somme = a + b;
    const produit = a * b;
    return { somme, produit }; // Retourne un objet
}

// 8. Fonctions comme valeurs de première classe
const operations = {
    addition: (a, b) => a + b,
    soustraction: (a, b) => a - b
};

// 9. Closure (fermeture)
function compteur() {
    let count = 0;
    return function() {
        return ++count;
    };
}

// Exemples d'utilisation
direBonjour(); // Affiche: Bonjour!
console.log(addition(5, 3)); // Affiche: 8
saluer(); // Affiche: Bonjour visiteur!
saluer("Marie"); // Affiche: Bonjour Marie!
console.log(somme(1, 2, 3, 4)); // Affiche: 10
console.log(calculer(5, 3)); // Affiche: { somme: 8, produit: 15 }
console.log(operations.addition(5, 3)); // Affiche: 8

const incrementer = compteur();
console.log(incrementer()); // Affiche: 1
console.log(incrementer()); // Affiche: 2

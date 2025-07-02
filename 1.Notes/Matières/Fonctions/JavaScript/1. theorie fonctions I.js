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

// 6. Rest parameters (avancé)
function somme(...nombres) {
    // reduce parcourt le tableau et accumule les valeurs
    // (total, num) => total + num : fonction qui prend l'accumulateur (total) et l'élément courant (num)
    // 0 : valeur initiale de l'accumulateur
    // Exemple: [1,2,3,4].reduce(...) fait:
    // 1er tour: total=0, num=1 => 0+1 = 1
    // 2e tour:  total=1, num=2 => 1+2 = 3
    // 3e tour:  total=3, num=3 => 3+3 = 6
    // 4e tour:  total=6, num=4 => 6+4 = 10
    return nombres.reduce((total, num) => total + num, 0);
}



// 7. Retour de valeurs, quand on veut retourner plusieurs valeurs d'un coup
function calculer(a, b) {
    const somme = a + b;
    const produit = a * b;
    return { somme, produit }; // Retourne un objet
}

// 8. Fonctions comme valeurs de première classe (avancé)
const operations = {
    addition: (a, b) => a + b,
    soustraction: (a, b) => a - b
};

// 9. Closure (fermeture - avancé)
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

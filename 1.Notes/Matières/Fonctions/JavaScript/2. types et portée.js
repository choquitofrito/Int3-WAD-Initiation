// Types et portée en JavaScript

// 1. Types de données et paramètres
let nombre = 42;
let texte = "Hello";
let tableau = [1, 2, 3];
let objet = { nom: "Alice" };

// Passage par valeur (types primitifs)
function modifierPrimitif(x) {
    x = 100; // Modification locale uniquement
    console.log("Dans la fonction:", x);
}

// Passage par référence (objets et tableaux)
function modifierObjet(obj) {
    obj.valeur = 100; // Modifie l'objet original
    console.log("Dans la fonction:", obj);
}

// 2. Portée des variables
let variableGlobale = "Je suis globale";

function porteeTest() {
    let variableLocale = "Je suis locale";
    var variableFunction = "Je suis dans la fonction";
    
    if (true) {
        let variableBlocLet = "Je suis dans le bloc (let)";
        var variableBlocVar = "Je suis accessible partout dans la fonction";
        console.log(variableBlocLet); // OK
    }
    
    // console.log(variableBlocLet); // Erreur: non définie
    console.log(variableBlocVar); // OK
}

// 3. Hoisting (remontée des déclarations)
console.log(typeof maFonction); // "function"
console.log(typeof varHoistee); // "undefined"
// console.log(typeof letVariable); // Erreur!

function maFonction() {}
var varHoistee = "Je suis hoistée";
let letVariable = "Je ne suis pas hoistée";

// Exemples d'utilisation
let n = 5;
modifierPrimitif(n);
console.log("Après modification:", n); // Affiche: 5 (non modifié)

let obj = { valeur: 5 };
modifierObjet(obj);
console.log("Après modification:", obj); // Affiche: { valeur: 100 } (modifié)

// 4. this et contexte
const personne = {
    nom: "Alice",
    direBonjour: function() {
        console.log(`Bonjour, je suis ${this.nom}`);
    },
    direHello: () => {
        console.log(`Hello, je suis ${this.nom}`); // this n'est pas lié correctement
    }
};

personne.direBonjour(); // Fonctionne
personne.direHello(); // this.nom sera undefined

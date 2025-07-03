# Comparaison des Fonctions en JavaScript et PHP

## 1. Déclaration de Base

### JavaScript
```javascript
// Déclaration classique
function maFonction() {
    console.log("Hello");
}

// Expression de fonction
const maFonctionExp = function() {
    console.log("Hello");
};

// Fonction fléchée (Arrow function) - Spécifique à JS
const maFonctionArrow = () => {
    console.log("Hello");
};
```

### PHP
```php
// Déclaration classique
function maFonction() {
    echo "Hello";
}

// Expression de fonction (fonction anonyme)
$maFonctionExp = function() {
    echo "Hello";
};
```

## 2. First Class Functions (Fonctions de Première Classe)

Les deux langages traitent les fonctions comme des "citoyens de première classe", ce qui signifie qu'elles peuvent être :
- Stockées dans des variables
- Passées en paramètres
- Retournées par d'autres fonctions

### JavaScript
```javascript
// Stockage dans une variable
const maFonction = function(x) { return x * 2; };

// Passage en paramètre
array.map(function(x) { return x * 2; });

// Retour de fonction
function creerMultiplicateur(facteur) {
    return function(x) {
        return x * facteur;
    };
}
```

### PHP
```php
// Stockage dans une variable
$maFonction = function($x) { return $x * 2; };

// Passage en paramètre
array_map(function($x) { return $x * 2; }, $array);

// Retour de fonction
function creerMultiplicateur($facteur) {
    return function($x) use ($facteur) {
        return $x * $facteur;
    };
}
```

## 3. Closures (Fermetures)

### JavaScript
```javascript
function compteur() {
    let count = 0;
    return function() {
        return ++count;
    };
}
```

### PHP
```php
function compteur() {
    $count = 0;
    return function() use (&$count) {
        return ++$count;
    };
}
```

**Différence importante**: En PHP, il faut explicitement déclarer les variables externes utilisées avec le mot-clé `use`. En JavaScript, les closures capturent automatiquement les variables de leur portée externe.

## 4. Paramètres

### JavaScript
```javascript
// Paramètres par défaut
function saluer(nom = "visiteur") {
    console.log(`Bonjour ${nom}`);
}

// Rest parameters
function somme(...nombres) {
    return nombres.reduce((a, b) => a + b, 0);
}
```

### PHP
```php
// Paramètres par défaut
function saluer($nom = "visiteur") {
    echo "Bonjour $nom";
}

// Spread operator (PHP 7.4+)
function somme(...$nombres) {
    return array_sum($nombres);
}
```

## 5. Principales Différences

1. **Syntaxe des Arrow Functions**: 
   - JavaScript les supporte: `() => {}`
   - PHP ne les supporte pas

2. **Capture des variables dans les closures**:
   - JavaScript: Automatique
   - PHP: Explicite avec `use()`

3. **Portée des variables**:
   - JavaScript: Lexical scoping
   - PHP: Nécessite `use()` pour les closures

4. **Type Hinting**:
   - PHP: Support natif des types de retour et paramètres (`function foo(): int`)
   - JavaScript: Pas de typage natif (TypeScript nécessaire pour le typage)

5. **This**:
   - JavaScript: Contexte dynamique, dépend de l'appel
   - PHP: Toujours lié à l'instance de la classe

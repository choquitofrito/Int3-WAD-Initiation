<?php
declare(strict_types=1);

// 1. Types de retour nullables (PHP 7.1+)
// Utilité: Permet d'indiquer explicitement qu'une fonction peut retourner null
// Très utile pour gérer les cas d'erreur ou d'absence de résultat
function trouverUtilisateur(int $id): ?array {
    // Peut retourner soit un array, soit null
    if ($id <= 0) {
        return null;
    }
    return ['id' => $id, 'nom' => 'Test'];
}

// 2. Types de retour union (PHP 8.0+)
// Utilité: Permet à une fonction de retourner différents types de données
// Pratique pour la validation de données ou la conversion de types
function validerDonnee(mixed $donnee): int|float|string {
    if (is_numeric($donnee)) {
        return is_int($donnee) ? (int)$donnee : (float)$donnee;
    }
    return (string)$donnee;
}

// 3. Types de paramètres union (PHP 8.0+)
// Utilité: Permet d'accepter plusieurs types pour un même paramètre
// Idéal quand une fonction peut traiter différents types de nombres
function traiterValeur(int|float $nombre): float {
    return $nombre * 1.5;
}

// 4. Paramètres nommés avec valeurs par défaut (PHP 8.0+)
// Utilité: Rend le code plus lisible et permet de sauter des paramètres optionnels
// Très utile pour les fonctions avec beaucoup de paramètres optionnels
function configurer(
    string $host = 'localhost',
    int $port = 8080,
    string $protocol = 'http'
): string {
    return "{$protocol}://{$host}:{$port}";
}
// On peut spécifier uniquement les paramètres qu'on veut modifier
echo configurer(port: 3000) . "\n";

// 5. Match expression (PHP 8.0+)
// Utilité: Plus sûr et plus concis que switch, avec une syntaxe moderne
// Parfait pour les mappings de valeurs et le pattern matching
function getStatus(int $code): string {
    return match($code) {
        200 => 'OK',
        404 => 'Not Found',
        500 => 'Server Error',
        default => 'Unknown Status'
    };
}

// 6. Spread operator dans les paramètres de fonction (PHP 7.4+)
// Utilité: Permet de passer un tableau comme liste d'arguments
// Très pratique pour les fonctions variadiques ou pour combiner des tableaux d'arguments
function somme(...$nombres): int {
    return array_sum($nombres);
}
$valeurs = [1, 2, 3];
echo somme(...$valeurs) . "\n";

// 7. Arrow functions (PHP 7.4+)
// Utilité: Syntaxe courte pour les fonctions simples, idéale pour les callbacks
// Parfait pour array_map, array_filter et autres fonctions de tableaux
$multiplier = fn($x) => $x * 2;
$nombres = [1, 2, 3];
$doubles = array_map(fn($n) => $n * 2, $nombres);

// 8. Type mixed (PHP 8.0+)
// Utilité: Accepte explicitement n'importe quel type de données
// Utile pour les fonctions génériques qui doivent traiter différents types
function accepteTout(mixed $valeur): string {
    return match(gettype($valeur)) {
        'integer' => 'Nombre entier',
        'double' => 'Nombre décimal',
        'string' => 'Texte',
        'array' => 'Tableau',
        default => 'Autre type'
    };
}

// 9. Paramètres obligatoires après optionnels (PHP 8.0+)
// Utilité: Permet plus de flexibilité dans la définition des paramètres
// Particulièrement utile avec les paramètres nommés
function exemple(string $a = "a", string $b = "b", string $c): string {
    return $a . $b . $c;
}
echo exemple(c: "C") . "\n"; // Affiche: abC

// 10. Constructor Property Promotion (PHP 8.0+)
class Utilisateur {
    // Définition et initialisation des propriétés directement dans le constructeur
    public function __construct(
        private string $nom,
        private string $email,
        private ?int $age = null
    ) {}
    
    public function getNom(): string {
        return $this->nom;
    }
}

// 11. Types de retour never (PHP 8.1+)
function arreterProgramme(string $message): never {
    echo $message;
    exit(1);
}

// 12. Readonly properties (PHP 8.1+)
class Configuration {
    public function __construct(
        public readonly string $environnement,
        public readonly array $options = []
    ) {}
}

// Exemples d'utilisation
$user = trouverUtilisateur(1);
var_dump($user); // array ou null

$valeur = validerDonnee("123");
var_dump($valeur); // int(123)

$config = new Configuration('production');
// $config->environnement = 'dev'; // Erreur: propriété readonly

?>

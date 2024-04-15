
# Cheatsheet de programmation : Python vs PHP 

Ce guide compare l'utilisation des structures conditionneles, des boucles, des tableaux, et des fonctions entre Python et PHP.

## Structures conditionnelles

### Python
```python
if condition:
    # Instructions si la condition est vraie
elif autre_condition:
    # Instructions si l'autre condition est vraie
else:
    # Instructions si aucune des conditions précédentes n'est vraie
```

### PHP
```php
if ($condition) {
    // Instructions si la condition est vraie
} elseif ($autre_condition) {
    // Instructions si l'autre condition est vraie
} else {
    // Instructions si aucune des conditions précédentes n'est vraie
}
```

## Boucles

### Python

#### Boucle For
```python
for i in range(10):  # Boucle de 0 à 9
    print(i)
```

#### Boucle While
```python
i = 0
while i < 10:
    print(i)
    i += 1
```

### PHP

#### Boucle For
```php
for ($i = 0; $i < 10; $i++) {
    echo $i;
}
```

#### Boucle While
```php
$i = 0;
while ($i < 10) {
    echo $i;
    $i++;
}
```

## Tableaux (Arrays)

### Python
```python
# Création d'un tableau
mon_tableau = [1, 2, 3, 4]

# Accès aux éléments
element = mon_tableau[0]  # premier élément

# Boucle sur les éléments
for element in mon_tableau:
    print(element)
```

### PHP
```php
# Création d'un tableau
$mon_tableau = array(1, 2, 3, 4);

# Accès aux éléments
$element = $mon_tableau[0];  # premier élément

# Boucle sur les éléments
foreach ($mon_tableau as $element) {
    echo $element;
}
```

## Tableaux associatifs

### Python (Dictionnaires)
```python
# Création d'un dictionnaire
mon_dico = {'cle1': 'valeur1', 'cle2': 'valeur2'}

# Accès aux éléments
valeur = mon_dico['cle1']  # accède à 'valeur1'

# Boucle sur les clés et valeurs
for cle, valeur in mon_dico.items():
    print(f"Clé: {cle}, Valeur: {valeur}")
```

### PHP
```php
# Création d'un tableau associatif
$mon_tableau = array('cle1' => 'valeur1', 'cle2' => 'valeur2');

# Accès aux éléments
$valeur = $mon_tableau['cle1'];  # accède à 'valeur1'

# Boucle sur les clés et valeurs
foreach ($mon_tableau as $cle => $valeur) {
    echo "Clé: $cle, Valeur: $valeur";
}
```

## Fonctions

### Python
```python
def ma_fonction(param1, param2):
    return param1 + param2  # Retourne la somme des paramètres

# Appel de la fonction
resultat = ma_fonction(5, 3)
print(resultat)
```

### PHP
```php
function ma_fonction($param1, $param2) {
    return $param1 + $param2;  # Retourne la somme des paramètres
}

# Appel de la fonction
$resultat = ma_fonction(5, 3);
echo $resultat;
```

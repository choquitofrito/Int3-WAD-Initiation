

# Exercices PHP de base

Variables, ifs, boucles, tableaux (arrays)

- [Exercices PHP de base](#exercices-php-de-base)
  - [Exercices Variables, Entree et Sortie](#exercices-variables-entree-et-sortie)
  - [Exercices IF](#exercices-if)
  - [Exercices Boucles](#exercices-boucles)
  - [Exercices Arrays (Tableaux)](#exercices-arrays-tableaux)
  - [Exercices: Arrays Associatifs](#exercices-arrays-associatifs)
    - [Exercice extra arrays: Prix Avions](#exercice-extra-arrays-prix-avions)

<br>



## Exercices Variables, Entree et Sortie

<br>


Créez un nouveau fichier pour chaque exercice!

1.  Affichez \"Bonjour\" dans l\'écran avec print et echo

2.  Affichez \"La console est rudimentaire mais elle fonctionne assez
    bien...\" dans la ligne suivante (**PHP_EOL** ou **\n** en console)

3.  Créez une variable contenant le titre du dernier film que vous avez
    regardé et une deuxième variable contenant une note de 0 à 10.
    Affichez un texte « Je donne un xxxx pour le film xxxxx ».

4.  Créez une variable contenant le prix d'un ticket pour l'UGC et une
    autre contenant le prix d'un ticket pour le Vendôme. Calculez la
    différence de prix entre les deux tickets et affichez-la sur l'écran
    avec un message.

5.  Le Vendôme est un cinéma cher (contrairement au Styx, qui
    d\'ailleurs n\'existe plus) et de fois ils offrent une réduction du
    10% sur les entrées. Affichez le prix d'un ticket normal et le prix qu'on payerait si on avait la réduction.

6.  Créez un programme qui demande son nom à l'utilisateur et affiche un
    message du style « Bienvenu xxxxxxxx ». Utilisez la fonction "readline(message à afficher)". Cette fonction affice le message à afficher à l'utilisateur, puis permet à l'utilisateur de taper un string sur le clavier. La saisie terminera quand l'utilisateur appuie sur Enter.

Ex:

```php
$nom = readline ("Tapez le nom de votre chat:"); // le logiciel s'arrete ici et attends la saisie et qu'on appuie sur Enter. Quand on appuie sur Enter, le contenu saisi sera stocké dans la variable $nom
echo ($nom); // afficher ce que l'utilisateur a saisi
```

7.  Créez un logiciel qui demande deux chiffres à l'utilisateur et qui
    affiche l'addition, la soustraction, la multiplication et la
    division.

<br>


## Exercices IF
<br>

1.  Créez un code capable de calculer la surface d'une chambre. Demandez
    à l'utilisateur la largeur et la longueur. Si les valeurs sont
    pareilles, affichez le message \"La chambre est carrée!\"

2.  Demandez à l'utilisateur la température de la salle où il se trouve.
    Si elle vaut entre 15 et 25 affichez \"Il fait bon\". Si la valeur
    est inférieure, affichez \"Ça caille !! Montez la température !\" et
    si la valeur est supérieure affiche \"Trop chaud ! Descendez la
    température !\"

3.  Demandez deux chiffres à l'utilisateur et une opération à réaliser
    avec ces deux chiffres (addition, multiplication, soustraction et
    division). Affichez le calcul correspondant.

4.  Nous faisons un système informatique pour une école.
    Pour qu\'un élève puisse réussir une matière il doit assister à un
    minimum de cours :

    1.  80% des cours s\'il est en 1ere année

    2.  70% des cours s\'il est en 2eme année

    3.  60% des cours s\'il est en 3eme année

Considérez qu'il y a 50 cours chaque année.
Le script doit demander à l'utilisateur l'année et le nombre d'absences, et afficher si l'élève a reussi ou pas.


<br>

5.  Nous voulons calculer le prix d\'une commande dans un magasin de téléphonie. On vend juste trois produits :

```
Samsung Galaxy S24 - 1000 euros
IPhone 15 - 1500 euros
Huawei P60 Pro - 800 euros
```

-   Demandez à l'utilisateur le nombre d'unités qu'il veut acheter de chaque produit (fonction "readline" ;) )

-   Calculez le total de la commande sachant que :

    -   Si on commande plus de 5 unités d\'un certain produit on a une remise du 10% sur le prix de ce produit

    -   Les produits peuvent être retirés au magasin ou livrés. La livraison coute 2% du prix total de la commande, mais elle est
        gratuite si notre commande dépasse 3000 euros

    -   Une carte de fidélité accorde 20% de réduction sur le prix total de la commande

<br>

## Exercices Boucles
<br>


1.  Faites une boucle while pour afficher les valeurs entre 0 et 10. Utilisez **while** et **for** (deux versions différentes)

2.  Faites une boucle while et une boucle for pour afficher les valeurs entre 50 et 70

2.  Faites un logiciel qui demande son âge à l'utilisateur. Le logiciel continue à demander jusqu'à ce qu'il introduise une valeur entre 0 et 130. Utilisez une boucle **while**. Si l'utilisateur est une personne majeure on lui donne la bienvenue. Dans le cas contraire, on affiche le message « Vous êtes encore très jeune»

4.  Modifiez l'exercice précedant pour que l'utilisateur puisse se tromper 3 fois ... mais pas plus!

5.  Faites une boucle pour afficher les valeurs impaires entre 50 et 100

6.  Faites une boucle qui, à partir d\'une valeur de départ stockée dans
    une variable, affiche les dix nombres suivants. Par exemple, si la
    valeur stockée est 17, le programme affichera les nombres de 18
    à 27. Faites deux versions de l\'algorithme : while et for.

7.  Créez un logiciel qui calcule la multiplication d'une suite de
    valeurs saisies par l'utilisateur. Le logiciel doit demander à
    l'utilisateur le nombre de valeurs qu'il souhaite saisir

8.  Créez un logiciel qui calcule la multiplication d'une suite de
    valeurs saisis par l'utilisateur. L'entrée de données doit
    s'arrêter quand l'utilisateur saisit la valeur -1.

9.  Créez une boucle qui écrit la table de multiplication d\'un nombre
    (stocké dans une variable), présentée comme suit 

**Table du 7:**

7 x 1 = **7**\
7 x 2 = **14**\
7 x 3 = **21**\
...\
7 x 10 = **70**

<br>

10. Créer une boucle qui affiche les 24h d'une journée. Pour chaque heure il affiché toutes les 5 minutes et pour chacune de ces 5 min
    il affiche toutes les 10 secondes

**Résultat souhaité** :

1 h

5min

10sec
>
20sec
>
30sec
>
...

10min

15min

...

2h
.
.



   Exercice à faire en Web : Modifiez la boucle précédant pour qu\'elle affiche les heures paires en bleu et les heures impaires en rouge

<br>


## Exercices Arrays (Tableaux)
<br>

1)  Créez un array de prix contenant les montants 10,20 et 50 euros.

Affichez son contenu sans utiliser de boucles

2)  Rajoutez les montants 8 et 70 au tableau précédant. Affichez les éléments 2éme et 5éme du tableau.

3)  Créez un tableau contenant les noms de 5 villes. Affichez le contenu du tableau en utilisant une boucle

4)  Rajoutez deux villes au tableau précédant et affichez le tableau

5)  Remplacez la première ville du tableau par \'Quito\'

6)  Créez un tableau qui contient les valeurs du 1 à 200. Affichez son contenu (boucles)

7)  Créez une boucle qui multiplie par deux chaque valeur du tableau précédant. Le tableau doit être modifié, ce n'est pas juste un affichage

8)  (Web) Créez un tableau contenant les notes de 5 élèves et une boucle qui affiche son contenu. Les notes inférieures à 10 seront affichées en rouge. En plus, la boucle calcule et affiche la moyenne des notes. Faites-le avec for et while.

9)  Ecrivez un algorithme constituant un tableau, à partir de deux tableaux de même longueur existants. Le nouveau tableau sera la somme des éléments des deux tableaux de départ.

Tableau 1 :

  --- --- --- --- --- --- --- ---
  4   8   7   9   1   5   4   6
  --- --- --- --- --- --- --- ---

Tableau 2 :

  --- --- --- --- --- --- --- ---
  7   6   5   2   1   3   7   4
  --- --- --- --- --- --- --- ---

Tableau résultat :

  ---- ---- ---- ---- --- --- ---- ----
  11   14   12   11   2   8   11   10
  ---- ---- ---- ---- --- --- ---- ----

10) Toujours à partir de deux tableaux existants, écrivez un algorithme
    qui calcule le schtroumpf des deux tableaux. Pour calculer le
    schtroumpf, il faut multiplier chaque élément du tableau 1 par
    chaque élément du tableau 2, et additionner le tout. Par exemple si
    l\'on a:


**Tableau 1 :**
  --- ---
  3   6
  --- ---

**Tableau 2 :**
  --- --- --- ----
  4   8   7   12
  --- --- --- ----

**Le Schtroumpf sera :**

3 \* 4 + 3 \* 8 + 3 \* 7 + 3 \* 12 + 6 \* 4 + 6 \* 8 + 6 \* 7 + 6 \* 12
= 279

<br>

11) Ecrivez un algorithme qui permette la saisie d'un nombre
    de montants d'argent choisit par l'utilisateur et les stocke dans un tableau. Toutes les valeurs doivent être ensuite augmentées de la TVA, et le nouveau tableau sera affiché à l'écran.


12) Créez un array contenant 10 prix. Appliquez une TVA de 12% à chaque élément du tableau

13) Ecrivez un algorithme permettant, toujours sur le même principe, à
    l'utilisateur de saisir un nombre déterminé de prix. Le
    programme, une fois la saisie terminée, renvoie le prix le plus élevé en précisant quelle position elle occupe dans le tableau. On prendra soin d'effectuer la saisie dans un premier temps, et la recherche de la plus grande valeur du tableau dans un second temps.


<br>

## Exercices: Arrays Associatifs

<br>

1)  Créez un array associatif contenant de couples film-réalisateur. Affichez le contenu en utilisant une boucle foreach

2)  Remplacez le réalisateur du premier film par \"Ed Wood\"

3)  Créez un tableau contenant des pays. Pour chaque pays on doit stocker son nom et sa capitale. Créez une boucle foreach pour afficher
    son contenu dans la forme \"La capital de xxxx est xxxx\"

4)  Rajoutez deux pays et leur capital après la déclaration mais avant
    la boucle d\'affichage

5)  Modifiez la boucle pour qu\'elle affiche uniquement les pays.
    Modifiez la boucle pour qu\'elle affiche uniquement les capitales.
    Revenez à la boucle originale.

6)  Affichez le contenu du array avec var_dump pour mieux comprendre
    l\'organisation des indices

7)  Créez trois arrays contenant le nom, date de naissance et le numéro
    de téléphone de 3 personnes. Créez un array \"repertoire\" contenant ces
    trois arrays. Affichez le contenu complet du repertoire.

8)  (Web) À partir de l\'exercice précédent

-   Affichez le\'repertoire dans un tableau HTML, choisissez vous-même un
    format qui vous plaise

-   Rajoutez au repertoire le contact de votre meilleur ami

9)  (Web) Créez un array contenant de noms de sites web (ex: Startpage,
    Wikipedia), leur lien d\'internet (ex: www.startpage.com) et une
    description de chacun (ex: moteur de recherche).

Une fois crée, rajoutez encore deux sites.
>
Affichez le contenu de l\'array dans un tableau HTML en utilisant une
boucle

10) Créer un array \"pistesCD\". Chaque élément de l\'array contiendra
    un nom (ex: \"Billie Jean\") et une durée exprimée en secondes
    (250s.)

-   Affichez le contenu de l\'array en utilisant une boucle

-   Créez une nouvelle version qui affiche la durée en minutes et
    secondes

Ex: Billie Jean: 4m. 10s.
>
Vous pouvez garder les mêmes variables et ses valeurs dans l\'array.
>
Pour éliminer les décimales, vous pouvez utiliser la fonction
\"floor\" de PHP

-   Créez un array \"album\" contenant le genre de l\'album,
    l\'interprète principal, le prix et l\'ensemble de pistes

-   Pour finir, affichez toutes les infos de l\'album dans un tableau
    HTML

<br>

### Exercice extra arrays: Prix Avions

<br>

Créez l\'array suivant contenant les prix de billets d\'avion
disponibles pour aller à Cuba à une certaine date (en euros):

  ------ ----- ----- ----- ----- ----- ------ ------ ------ ------
  1000   800   900   700   800   900   1800   1900   1400   1500
  ------ ----- ----- ----- ----- ----- ------ ------ ------ ------

1)  Affichez le contenu de l\'array avec une boucle foreach

2)  Affichez le contenu de l\'array avec une boucle for

3)  Affichez à nouveau l\'array. Cette fois, les prix en dessous de 900
    seront considérés comme \"promo\" et doivent être affichés en rouge

4)  Suite à une promotion, tous les prix ont descendu soudainement à la
    moitie. Mettez à jour le tableau pour qu\'il montre ce changement

5)  Créez un nouveau tableau contenant les nouveaux prix affichés en
    dollars

6)  Comptez le nombre de vols qui coutent moins de 700 euros

7)  Calculez la moyenne de prix de vols

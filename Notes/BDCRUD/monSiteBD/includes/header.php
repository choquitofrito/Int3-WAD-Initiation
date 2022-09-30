<?php 
session_start();
?>
<header>
    <nav>
        <a href="./index.php?p=accueil">Accueil</a>
        <a href="./index.php?p=listeFilms">Liste de films</a>
        <a href="./index.php?p=page2">Page2</a>
        <a href="./index.php?p=page3">Page3 (formulaire)</a>
        <h5>
            <?php
                if (isset($_SESSION['loginConnecte'])){
                    echo $_SESSION['loginConnecte'];
                    echo "<a href='./logout.php'>Se deconnecter</a>";
                }
                else {
                    header ("location: ./login.php");
                }
            ?>
        </h5>
     </nav>
</header>
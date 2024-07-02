<?php 
    if (session_id()===""){
        session_start();
    }
?>

<nav>
    <a href="./accueil.php">Accueil</a>
    <a href="./filmInserer.php">Insérer un film</a>
    <a href="./filmRecherche.php">Chercher un film</a>
    <a href="./filmRechercheAjax.php">Chercher un film (AJAX)</a>
    <a href="./logout.php">Se dé-connecter</a>
    <a href="./checkout.php">🛒</a>
    <div class="divPanier">
    <?php
        
        if (isset ($_SESSION['quantiteTotale'])){
            print ($_SESSION['quantiteTotale']);
        }
        else {
            print (0);
        }
    ?>
    </div>
</nav>
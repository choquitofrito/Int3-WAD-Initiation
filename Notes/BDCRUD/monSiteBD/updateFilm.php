<!-- formulaire pour modifier le film choisi -->
<form action="./updateTraitement.php" method="POST">
    Titre<input type="text" maxlength="100" name="titre">
    Duree<input type="number" name="duree">
    Description<textarea name="description"></textarea>
    Date de sortie<input type="date" name="dateSortie">
    <input type="submit" value="Modifier">
</form>



<?php



?>
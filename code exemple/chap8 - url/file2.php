<?php 
    if (isset($_GET['prenom']) AND isset($_GET['nom'])) // On vérifie si on a le nom et le prénom
    {
        echo "<p>Bonjour ". $_GET['nom']. " " . $_GET['prenom'] . "</p>";
    }
    else
    {
        echo "<br>Triste aucune information";
    }

?>
<?php 
    if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['repeat']))
    {   
        $start = 0;
        while ($start < $_GET['repeat'])
        {
            echo "<p>Bonjour ". $_GET['nom']. " " . $_GET['prenom'] . " et je répète ". $_GET['repeat'] . " fois" . "</p>";
            $start++;
        }   
    }
    else
    {
        echo "<br>Triste aucune information";
    }

?>
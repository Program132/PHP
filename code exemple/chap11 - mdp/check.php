<?php
    if(isset($_POST['mdp']) AND $_POST['mdp'] == "mdp")
    {
        echo 'Bien joué tu as trouvé les bon mot de passe !';
    }
    else
    {
        echo "Mot de passe incorrect, désolé.";
    }
?>
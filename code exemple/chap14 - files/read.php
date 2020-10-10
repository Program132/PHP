<?php
    $myFile = fopen('read.txt', 'r+'); // On récupère le fichier

    $ligne = fgets($myFile); // On prend le text

    echo $ligne; // On print les lignes

    fclose($myFile) // On ferme
?>
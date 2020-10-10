<?php
    $myFile = fopen('write.txt', 'r+'); // On récupère le fichier

    fputs($myFile, 'Text à écrire'); // On écrit avec le nom du fichier puis le texte

    fclose($myFile); // On ferme
?>
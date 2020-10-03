<!DOCTYPE html>
<html>
<head>
  <title>PHP : boucles</title>
</head>
<body>
  <?php
    $nom = array ('bey entertainment','bey game','beyptitloup');
    

    $position = array_search("bey game", $nom);
    echo "<br>Bey Game est à la postion " . $position . " du tableau.";

    $position = array_search("beyptitloup", $nom);
    echo "<br>beyptitloup est à la postion " . $position . " du tableau.";
  ?>
</body>
</html>
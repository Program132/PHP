<!DOCTYPE html>
<html>
<head>
  <title>PHP : boucles</title>
</head>
<body>
  <?php
    $nbrLignes = 0;

    while ($nbrLignes < 12)
    {
      echo "<br>Bonjour tout le monde, le nombre de ligne est : " . $nbrLignes;
      $nbrLignes++; // $nbrLignes = $nbrLignes + 1;
    }
  ?>
</body>
</html>
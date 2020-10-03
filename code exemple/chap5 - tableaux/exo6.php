<!DOCTYPE html>
<html>
<head>
  <title>PHP : tableaux</title>
</head>
<body>
  <?php
    $bey = array (

      nom => "Bey Entertainment",
      adresse => "Iconnu",
      nomAncien => "Bey Game",
      createBy => "beyptitloup");

    if (array_key_exists("nom", $bey))
    {
      echo "Le nom est bien défini";
    }
    else
    {
      echo "Rien";
    }
  ?>
</body>
</html>
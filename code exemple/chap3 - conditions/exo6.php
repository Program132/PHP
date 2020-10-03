<!DOCTYPE html>
<html>
<head>
  <title>PHP : conditions(switch)</title>
</head>
<body>
  <?php
    $note = 20; // Si on mettait pas exemple 17 il metterait ce qu'il y a dans default

    switch ($note)
    {

      case 0:
        echo "Hum je te conseille de revoir tes leçons !";
        break;

      case 5:
        echo "Aïe sa fais mal.";
        break;

      case 10:
        echo "La moyenne de justesse.";
        break;

      case 15:
        echo "Bien !";
        break;

      case 20:
        echo "Gg tu as la meilleur note !";
        break;

      default:
        echo "Ta note n'est pas enregistrer dans mon système.";
    }
  ?>
</body>
</html>
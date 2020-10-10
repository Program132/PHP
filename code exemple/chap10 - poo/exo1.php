<!DOCTYPE html>
<html>
<head>
  <title>PHP : poo</title>
</head>
<body>
    <?php
        class utils
        {
            public function age($parm1)
            {
                echo "<br>Vous avez mis l'âge à " . $parm1;
            }

        }

        echo "Bienvenue !";
        $utils = new utils();
        $utils->age(10);
    ?>
</body>
</html>
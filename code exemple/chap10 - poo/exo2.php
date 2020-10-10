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

            public function nom($parm1)
            {
                echo "<br>Le nom à changé " . $parm1;
            }

        }

        $utils = new utils();
        $utils->age(15);
        $utils->nom("Program");
    ?>
</body>
</html>
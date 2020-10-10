<!DOCTYPE html>
<html>
<head>
    <title>PHP : poo</title>
</head>
<body>
    <?php
        class utils
        {
            protected function logs($nomChange, $ageChange)
            {
                echo "<br>Le nom : " . $nomChange . "<br>L'âge est :" .$ageChange;
            }

            public function age($a)
            {
                echo "<br>Vous avez mis l'âge à " . $a;
                $this->logs("Iconnu", $a);
            }

            public function nom($n)
            {
                echo "<br>Vous avez mis le nom à " . $n;
                $this->logs($n, "Inconnu"); // $this c'est la classe.
            }

        }

        echo "Bienvenue !";
        $utils = new utils();
        $utils->age(15);
        $utils->nom("Program");
        //$utils->logs("Progrm", 15); // Cause un problème vut qu'on a mis private
    ?>
</body>
</html>
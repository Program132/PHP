<?php
    session_start();

    $_SESSION['name'] = "Program";
    $_SESSION['tag'] = 1807;
    $_SESSION['age'] =  12;
?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP : TP mdp</title>
</head>
<body>
    <p>Bonjour <?php echo $_SESSION['name']; ?>.</p>
    <a href="age.php">Clique ici pour voir ton âge et ton tag</a>
</body>
</html>
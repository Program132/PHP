<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP : TP mdp</title>
</head>
<body>
    <p>Bonjour tu t'appelles <?php echo $_SESSION['name']; ?>.<br>
    Ton tag est <?php echo $_SESSION['tag']; ?>.<br>
    Tu as <?php echo $_SESSION['age']; ?></p>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <title>PHP : boucles</title>
</head>
<body>
  <?php
    function add($a, $b)
    {
      return $a + $b;
    }

    function remove($a, $b)
    {
      return $a - $b;
    }

    $result = add(5, 10);
    echo "<br>" . $result;

    $result = remove(5, 10);
    echo "<br>" . $result;

  ?>
</body>
</html>
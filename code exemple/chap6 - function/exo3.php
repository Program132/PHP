<!DOCTYPE html>
<html>
<head>
  <title>PHP : function</title>
</head>
<body>
  <?php
    function add($a, $b)
    {
      return $a + $b;
    }

    $result = add(5, 10);
    echo $result;
  ?>
</body>
</html>
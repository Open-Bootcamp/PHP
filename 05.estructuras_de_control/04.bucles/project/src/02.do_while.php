<!DOCTYPE html>
<html>

<body>

  <h1>bucles</h1>
  <h2>do ... while</h2>
  <?php
  // do ... while
  $y = 1;
  do {
    echo $y . ", ";
    $y++;
  } while ($y <= 100);
  echo "<p>otro ejemplo</p><br>";
  $z = 0;
  do {
    echo $z . ", ";
    $z += 10;
  } while ($z <= 100);
  ?>
</body>

</html>
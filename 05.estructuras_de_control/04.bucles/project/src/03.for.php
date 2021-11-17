<!DOCTYPE html>
<html>

<body>

  <h1>bucles</h1>
  <h2>For</h2>
  <?php
  // for
  /* SINTAXIS
  for (expresion1; expresion2; expresion3) {
    instrucciones
  }
  */
  for ($x = 0; $x <= 10; $x++) {
    echo "El número es: $x<br>";
  }
  echo "<p>otro ejemplo</p><br>";
  for ($x = 0; $x <= 10; $x += 2) {
    echo "El número es: $x<br>";
  }
  echo "<p>otro ejemplo</p><br>";
  //
  for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i . "<br>", $i++);
  echo "<p>otro ejemplo</p><br>";
  // 
  $personas = [
    [
      "nombre" => "Miguel",
      "salt" => 1123481234
    ],
    [
      "nombre" => "Olga",
      "salt" => 1123481235
    ]
  ];
  for ($i = 0; $i < count($personas); ++$i) {
    $personas[$i]['salt'] = mt_rand(0000000, 9999999);
    var_dump($personas);
  }
  echo "<p>otro ejemplo</p><br>";
  for ($i = 0, $size = count($personas); $i < $size; ++$i){
    $personas[$i]['salt'] = mt_rand(0000000, 9999999);
    var_dump($personas);
  }
  ?>
</body>

</html>
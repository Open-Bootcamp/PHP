<!DOCTYPE html>
<html>

<body>

  <h1>recorrer arrays</h1>

  <?php
  $array = ["valor0", "valor1", "valor2", "valor3", "valor4", "valor5"];
  for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . "<br>";
  }

  echo "<h2>otro ejemplo</h2>";
  $z = 0;
  while ($z < count($array)) {
    echo $array[$z] . "<br>";
    $z++;
  }

  echo "<h2>otro ejemplo</h2>";
  $z = 0;
  do {
    echo $array[$z] . "<br>";
    $z++;
  } while ($z < count($array));

  echo "<h2>otro ejemplo</h2>";
  foreach($array as $valor) {
    echo $valor . "<br>";
  } 
  echo "<h2>otro ejemplo</h2>";
  foreach($array as $clave => $valor) {
    echo $array[$clave]." - ".$valor . "<br>";
  } 

// multidimensional
foreach($array as list($a, $b)){
  echo "A: $a; B: $b\n";
}

  ?>
</body>

</html>
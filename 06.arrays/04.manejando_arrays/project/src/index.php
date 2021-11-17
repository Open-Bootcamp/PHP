<!DOCTYPE html>
<html>

<body>

  <h1>manejando arrays</h1>

  <?php
  /*
  $a = ["1", "2", "3"];
  var_dump($a);
  $b = ["primero del segundo 4", "5", "6"];
  var_dump($b);

  $c = array_merge($a, $b);
  var_dump($c);

  $d = ["a" => "b", "5", "6"];
  var_dump($b);

  $g = array_merge($a, $d);
  var_dump($g);

  echo "<h2>otro ejemplo</h2>";
  // ordenar arrays

  $frutas = ["limón", "naranja", "banana", "albaricoque", "manzana"];
  sort($frutas);
  echo print_r($frutas, 1);
  echo "<h2>otro ejemplo</h2>";
  rsort($frutas);
  echo print_r($frutas, 1);

  // ordenar matrices asociativas
  $age = [
    "peter" => 35, 
    "Ben" => 27, 
    "Joe" => 43
  ];
  // según un valor
  asort($age);
  var_dump($age);
  // según la clave
  ksort($age);
  var_dump($age);
  // orden descendente según valor
  arsort($age);
  var_dump($age);
  // orden descendente según clave
  krsort($age);
  var_dump($age);
  */
  /* Comparar arrays
  */
  $frutas1 = ["limón", "naranja"];
  $frutas2 = ["limón", "mandarina"];
  // diferencias entre arrays
  echo print_r(array_diff($frutas1, $frutas2), 1)."<br>";
  // elementos en común
  echo print_r(array_intersect($frutas1, $frutas2), 1)."<br>";
  /* convertir un array en string
   */
  $string_frutas = implode(", ", $frutas1);
  var_dump($string_frutas);
  $array_frutas = explode(", ", $string_frutas);
  var_dump($array_frutas);

  // eliminar elementos duplicados

  $frutas = array_merge($frutas1, $frutas2);
  echo "frutas (repetidas y no)";
  var_dump($frutas);
  $frutas = array_unique($frutas);
  ?>
</body>

</html>
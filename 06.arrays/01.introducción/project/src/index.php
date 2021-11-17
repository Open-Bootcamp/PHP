<!DOCTYPE html>
<html>

<body>

  <h1>arrays</h1>

  <?php
  // arrays indexados
  $cosas = array("Lápiz", "Goma");
  print_r($cosas);
  $cosas = ["Lápiz", "Goma"];
  print_r($cosas);
  // arrays asociativos
  $paises = array(
    "España" => "Madrid",
    "Francia" => "París",
    // ...
  );
  print_r($paises);
  //
  $paises = [
    "España" => "Madrid",
    "Francia" => "París",
    // ...
  ];
  print_r($paises);

  //
  $array = [
    "clave1" => "valor1",
    3.5 => "valor2",
    NULL => "valor3",
    TRUE => "valor4"
  ];

  var_dump($array);

  // tamaño de un array
  $cosas = ["Lápiz", "Goma", "cuaderno", "estuche"];
  echo count($cosas);

  ?>
</body>

</html>
<!DOCTYPE html>
<html>

<body>

  <h1>acceso y modificación</h1>

  <?php
  $array = ["valor0", "valor1", "valor2", "valor3", "valor4", "valor5"];
  var_dump($array);
  echo $array[2];

  // modificar un valor
  $array[3] = $array[0];
  var_dump($array);
  $array[3] = "valor modificado";
  var_dump($array);

  // contar elementos
  echo "número de elementos en un array: ".count($array);

  // eliminar elementos
  unset($array[2]);
  var_dump($array);
  ?>
</body>

</html>
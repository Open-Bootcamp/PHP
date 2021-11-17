<!DOCTYPE html>
<html>

<body>

  <h1>bucles</h1>
  <h2>While</h2>
  <?php
  // foreach
  $array = [1, 2, 3, 4];
  var_dump($array);
  foreach($array as &$valor){
    $valor = $valor*2;
  }
  var_dump($array);

  unset($valor);
  foreach($array as $clave => $valor){
    echo "Clave: $clave - Valor: $valor<br>";
  }

  ?>
</body>

</html>
<!DOCTYPE html>
<html>

<body>

  <h1>try catch</h1>

  <h2> ejemplo 1 - throw </h2>
  <?php
  // throw - mostrar mensajes de excepción customizados
  function dividir($dividendo, $divisor)
  {
    if ($divisor == 0) {
      throw new Exception("División por cero");
    }
    return $dividendo / $divisor;
  }

  echo dividir(1, 2);
  // el siguiente daría error
  // echo dividir(1, 0);
  ?>
  <h2> ejemplo 2 - try catch </h2>
  <?php
  echo "<hr>";
  // try catch
  try {
    echo dividir(1, 0)."<br>";
  } catch (Exception $e) {
    // aquí manejamos el error de la ejecución
    echo "<br>deshabilitado método divide";
  } finally  {
    // código a realizar siempre al final de la ejecutación falle o no falle
    echo "<br>proceso completado";
  }
  ?>

<h2> ejemplo 3 - try catch </h2>
  <?php
  echo "<hr>";
  function dividir2($dividendo, $divisor)
  {
    if ($divisor == 0) {
      throw new Exception("División por cero", 1);
    }
    return $dividendo / $divisor;
  }
  // try catch
  try {
    echo dividir2(1, 0)."<br>";
  } catch (Exception $e) {
    // aquí manejamos el error de la ejecución
    echo "<br>deshabilitado método divide<br>";
    // usemos $e
    $code = $e->getCode();
    $message = $e->getMessage();
    $file = $e->getFile();
    $line = $e->getLine();
    echo "<b>Exception throw en archivo $file, línea $line: [Code $code] $message<b><br>";
  } finally  {
    // código a realizar siempre al final de la ejecutación falle o no falle
    echo "<br>proceso completado";
  }
  ?>
</body>

</html>
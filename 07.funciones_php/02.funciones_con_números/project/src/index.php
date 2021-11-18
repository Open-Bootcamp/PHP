<!DOCTYPE html>
<html>

<body>

  <h1>funciones en números</h1>

  <?php
  // ejemplos de enteros 2, 256, -256, -12354123
  /* Enteros
   * constantes PHP para enteros:
   * PHP_INT_MAX
   * PHP_INT_MIN
   * PHP_INT_SIZE
   */
  echo 'PHP_INT_MAX: '.PHP_INT_MAX."<br>";
  echo 'PHP_INT_MIN: '.PHP_INT_MIN."<br>";
  echo 'PHP_INT_SIZE: '.PHP_INT_SIZE."<br>";
  // 
  $x = 5985;
  $is_int = is_int($x);
  // alternativas a is_int?? is_integer() y is_long() 
  var_dump($is_int);

    /* Decimales
   * constantes PHP para decimales:
   * PHP_FLOAT_MAX
   * PHP_FLOAT_MIN
   * PHP_FLOAT_DIG
   */
  echo 'PHP_FLOAT_MAX: '.PHP_FLOAT_MAX."<br>";
  echo 'PHP_FLOAT_MIN: '.PHP_FLOAT_MIN."<br>";
  echo 'PHP_FLOAT_DIG: '.PHP_FLOAT_DIG."<br>";
  //
  $x = 10.456;
  // alternativas a is_float(): is_double()
  var_dump(is_float($x));
/* Infinito
 */
  echo PHP_FLOAT_MAX."<br>";
  $x = 1.9e411;
  var_dump($x);
  /* NaN
   */
  $x = acos(8);
  var_dump($x);

  // cadenas numéricas
  $x = 5985;
  var_dump(is_numeric($x));
  $x = "5985";
  var_dump(is_numeric($x));
  $x = "59.85"+100;
  var_dump(is_numeric($x));
  $x = "Hello";
  var_dump(is_numeric($x));
  // convertir desde cadenas y floats a enteros
  $x = 23465.777;
  $int_cast = (int)$x;
  var_dump($int_cast);

  echo "<br>";

  $x = "23465.777";
  $int_cast = (int)$x;
  var_dump($int_cast);
  ?>
</body>

</html>
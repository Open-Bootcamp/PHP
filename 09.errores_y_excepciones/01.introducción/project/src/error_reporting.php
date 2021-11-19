<!DOCTYPE html>
<html>

<body>

  <h1>errores y excepciones </h1>

  <?php
  // E_ALL muestra todos los errores
  // E_NOTICE nos da tmabién consejos sobre la sintaxis
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  const PULGADAS = 26;

  function desplazarse(){
    echo "mi mtb me desplaza sin contaminar";
  }


  class Bici{

    static function tamano_ruedas(){
      echo "Ruedas de : ".PULGADAS."<br>";
    }
  }

  desplazarse();
  Bici::tamano-ruedas();

  echo PULGADAS."<br>";
  
  ?>
</body>

</html>
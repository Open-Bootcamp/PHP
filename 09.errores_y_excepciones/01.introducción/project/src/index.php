<!DOCTYPE html>
<html>

<body>

  <h1>errores y excepciones</h1>

  <?php
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
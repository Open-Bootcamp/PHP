<!DOCTYPE html>
<html>

<body>

  <?php

  require_once "./index.php";
  // ejemplo 1
  try {
    echo "Error customizado tipo: THROW_CUSTOM<br>";
    $o = new ProbarExcepcion(ProbarExcepcion::THROW_CUSTOM);
  } catch (MIExcepcion $e) {
    echo "excepción atrapada<br>", $e;
    $e->funcionPersonalizada();
  } catch (Exception $e) {
    echo "atrapada la Excepción Predeterminada", $e;
  }

  // var_dump($o);
  echo "<br><br>";
  ?>

  <a href="./">volver al index</a>
</body>

</html>
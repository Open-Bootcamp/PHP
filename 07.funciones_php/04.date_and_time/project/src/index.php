<!DOCTYPE html>
<html>

<body>

  <h1>fecha y hora</h1>

  <?php
  /* formato de fecha:
    * `d` día
    * `m` mes
    * `Y` año
    * `l` dia de la semana
    */
  $today = date("d/m/Y");
  var_dump($today);
  var_dump(date("Y-m-d"));
  var_dump(date("Y"));
  var_dump(date("l"));
  ?>

  &copy; 2020-<?php echo date("Y"); ?>
  <hr>

  <?php
  /* formato de hora:
    * `H` - hora en 24
    * `h` - hora en 12
    * `i` - minutos
    * `s` - segundos
    * `a` - meridiano
    */
    echo "La hora es: ".date("h:i:s")."<br>";

    // timezone
    date_default_timezone_set("Europe/Madrid");
    echo "La hora es ". date("h:i:sa")."<br>";
    date_default_timezone_set("America/New_York");
    echo "La hora es ". date("h:i:sa")."<br>";

    // crear una fecha, mktime(hora, minuto, segundo, mes, dia, año)
    $d = mktime(11,14,54,8,12,2021);
    echo "La fecha de creación es ".date("Y-m-d h:i:sa", $d)."<br>";

    // crear una fecha, strtotime()
    $d = strtotime("10:30pm 15 April 2026");
    echo "La fecha de creación es ". date("Y-m-d h:i:sa", $d)."<br>";



  ?>
</body>

</html>
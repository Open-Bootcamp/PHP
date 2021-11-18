<!DOCTYPE html>
<html>

<body>

  <h1>math</h1>

  <?php
    // pi()
    echo "pi es igual a: ".pi()."<br>";

    // min y max
    $min = min(3,6,8,90,-200);
    $max = max(3,6,8,90,-200);
    echo "min es: $min, y max es $max<br>";

    // valor absoluto
    $a = -89.3;
    echo "el valor abosluto de $a es igual a : ".abs($a)."<br>";
    // redondear un valor
    echo "el valor redondeado de $a es igual a: ".round($a)."<br>";
    // números aleatorios
    echo "un número aleatorio es: ".rand()."<br>";
    echo "un número aleatorio es entre 20 y 50: ".rand(20, 50);
  ?>
</body>

</html>
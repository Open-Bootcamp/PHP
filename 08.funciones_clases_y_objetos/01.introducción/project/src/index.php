<!DOCTYPE html>
<html>

<body>

  <h1>funciones</h1>

  <?php
  function suma($num1, $num2){
    return $num1 + $num2;
  }
  $a = 1;
  $b = 99;

  echo "la suma de $a + $b es igual a: ".suma($a, $b)."<br>";

  // otro ejemplo

  function modificar_cadena(&$cadena){
    $cadena .= "-Modificado";
  }
  $texto = "texto inicial";
  echo $texto."<br>";
  modificar_cadena($texto);

  echo $texto."<br>";

  // otro ejemplo

  function mostrar_comida($comida ="pollo"){
    echo "Ho tenemos $comida para comer<br>";
  }

  mostrar_comida();
  mostrar_comida("lentejas");


  // usando return
  function suma2($a = 1, $b = 2){
    return $a + $b;
  }

  $suma2 = suma2(30, 40);
  echo $suma2."<br>";

  // funciones como variables
  $function1 = "suma2";
  echo $function1();
  $function2 = "mostrar_comida";
  echo $function2();

  
  ?>
</body>

</html>
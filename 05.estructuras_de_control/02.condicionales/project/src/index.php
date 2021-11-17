<!DOCTYPE html>
<html>

<body>

  <h1>condicionales</h1>

  <?php
  // if ()
  $a = 30;
  $b = 20;
  if($a > $b){
    // ejecuta la instruccion
    echo "A es mayor que B<br>";
    // $a = $b;
  }
  // echo $a. $b;

  // if () ... else
  $a = 30;
  $b = 40;
  if($a > $b){
    // ejecuta la instruccion
    echo "A es mayor que B<br>";
  }else{
    echo "A no es mayor que B<br>";
  }


  // if () ...esle if () ... else
  $a = 30;
  $b = 40;
  if($a > $b){
    // ejecuta la instruccion
    echo "A es mayor que B<br>";
  }elseif ($a == $b){
    echo "A y B son iguales<br>";
  }else{
    echo "A es menor que B<br>";
  }
  ?>
  <h2>Sintaxis alternativa</h2>
  <?php
  /* Sintaxis alternativa
   */
  $a = 40;
  $b = 40;
  if ($a > $b):
    echo "A es mayor que B";
  elseif ($a == $b):
    echo "A y B son iguales<br>";
  else: 
    echo "A es menor que B<br>";
  endif;
  ?>

  <h2>Ejemplo de aplicación</h2>

  <?php $usuario_logueado = false; ?>
  <?php if($usuario_logueado): ?> <span>muestra username y botón de perfil</span>
  <?php else: ?>
    <span>muestra botón de login o registro</span>
  <?php endif; ?>
</body>

</html>
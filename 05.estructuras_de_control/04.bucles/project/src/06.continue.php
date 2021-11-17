<!DOCTYPE html>
<html>

<body>



  <h1>bucles</h1>
  <h2>continue</h2>
  <?php
  // continue
  for($i = 1; $i <= 100; $i++){
    if($i % 5 == 0){
      continue;
    }
    // esta línea no se ejecuta si entramos en la condición
    echo $i. ", ";
  }

  ?>
</body>

</html>
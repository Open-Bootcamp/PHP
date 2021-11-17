<!DOCTYPE html>
<html>

<body>



  <h1>bucles</h1>
  <h2>go TO</h2>
  <?php
  // goto
  $i = 1;

  if($i > 1){
    goto a;
  }else{
    echo "Mensaje que no vemos\n";
  }

  a: 
    for ($i=5; $i <= 10; $i++){
      echo $i;
    }
  ?>
</body>

</html>
<!DOCTYPE html>
<html>

<body>



  <h1>bucles</h1>
  <h2>break</h2>
  <?php
  // break
  for ($i = 7; $i <= 100; $i++) {
    
    if ($i % 6 == 0) {
      break;
    }
    echo $i . ", ";
  }

  ?>
</body>

</html>
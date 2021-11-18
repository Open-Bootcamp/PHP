<!DOCTYPE html>
<html>

<body>

  <h1>funciones en string</h1>

  <?php
  // longitud de la cadena
  $txt = "Hellow World";
  echo "La cadena para trabajar es: '$txt'<br>";
  $str_len = strlen($txt);
  echo 'strlen(): ' . $str_len . "<br>";
  // número de palabras
  $str_word_count = str_word_count($txt);
  echo 'str_word_count(): ' . $str_word_count . "<br>";
  // strrev()
  $str_rev = strrev($txt);
  echo 'strrev(): ' . $str_rev . "<br>";
  // buscar una coincidencia()
  $str_pos = strpos($txt, "World");
  echo 'strpos(): ' . $str_pos . "<br>";
  // reemplazar un contenido
  $str_replace = str_replace("World", "Country", $txt);
  echo 'str_replace(): ' . $str_replace . "<br>";
  ?>
</body>

</html>
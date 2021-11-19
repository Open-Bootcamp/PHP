<?php
interface Animal
{
  public function haceSonido();
}

/** 
 * @category Comentario
 */
class Gato implements Animal
{
  /** 
   * @return echo
   */
  public function haceSonido()
  {
    echo "Miauuuu";
  }
}

$animal = new Gato();
$animal->haceSonido();

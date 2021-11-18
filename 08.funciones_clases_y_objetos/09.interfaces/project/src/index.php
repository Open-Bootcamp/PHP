<?php
interface Animal
{
  public function haceSonido();
}

class Gato implements Animal
{
  public function haceSonido()
  {
    echo "Miauuuu";
  }
}

$animal = new Gato();
$animal->haceSonido();

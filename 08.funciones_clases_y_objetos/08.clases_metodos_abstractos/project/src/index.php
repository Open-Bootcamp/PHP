<?php

abstract class Car {
  public $name;
  public function __construct($name){
    $this->name = $name;
  }
  abstract public function intro(): string;
}

// clase hijo
class Seat extends Car{
  public function intro(): string{
    return "Elige calidad española! Yo soy un $this->name!";
  }
}

class Audi extends Car{
  public function intro(): string{
    return "Elige calidad alemana! Yo soy un $this->name!";
  }
}

class Volvo extends Car{
  public function intro(): string{
    return "Elige calidad sueca! Yo soy un $this->name!";
  }
}


$audi = new Audi("Audi");
echo $audi->intro();
echo "<br>";


$seat = new Seat("Seat");
echo $seat->intro();
echo "<br>";

$volvo = new Volvo("Volvo");
echo $volvo->intro();
echo "<br>";
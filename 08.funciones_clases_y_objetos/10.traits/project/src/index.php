<?php

trait message1{
  public function msg1(){
    echo "OPP es divertido!";
  }
}

class Bienvenido{
  use message1;
}

$ob = new Bienvenido();

$ob->msg1();
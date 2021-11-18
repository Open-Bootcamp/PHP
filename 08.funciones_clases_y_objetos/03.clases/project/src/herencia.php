<!DOCTYPE html>
<html>

<body>

  <h1>herencia</h1>

  <?php
  class Coche {
    public $marca;
    protected $valocidad_maxima;

    function __construct($marca, $velocidad_maxima){
      $this->marca = $marca;
      $this->velocidad_maxima = $velocidad_maxima;
    }

    function arrancaMotor(){
      echo "BRUM..!!!<br>";
    }
  }

  class CocheF1 extends Coche{
    public function rompeMotor(){
      echo "el motor del ".$this->marca." esta roto, 
        y dice adios al llegar  los ".$this->velocidad_maxima."Km/h<br>";
    }
  }

  $auto = new CocheF1("McClaren", 90);
  $auto->arrancaMotor();
  $auto->rompeMotor();
  ?>
</body>

</html>
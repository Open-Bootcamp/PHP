<!DOCTYPE html>
<html>

<body>

  <h1>clases</h1>

  <?php
  class Coche{

    /* modificadores de acceso:
     * public
     * private
     * protected
     */ 
    public $marca;
    protected $velocidad_maxima;
    private $seguridad_ncap;

    function __construct($marca, $velocidad_maxima, $seguridad_ncap){
      $this->marca = $marca;
      $this->velocidad_maxima = $velocidad_maxima;
    }

    function __destruct(){
      echo "El coche está roto";
    }

    function getMarca(){
      return $this->marca;
    }

    function setMarca ($marca){
      $this->marca = $marca;
    }
  }

  // instanciamos la clas
  $auto = new Coche("Renault", 50, 2);
  $auto->setMarca("Fiat");
  // var_dump($auto);
  $auto->marca = "Renault";
  // $auto->velocidad_maxima = 40;
  $auto->seguridad_ncap = 3;
  var_dump($auto->seguridad_ncap);
  var_dump($auto->getMarca());
  ?>
</body>

</html>
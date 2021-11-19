<?php

class MIExcepcion extends Exception
{

  public function __construct($message, $code = 0, Exception $previous = null)
  {
    parent::__construct($message . $code, $previous);
  }

  public function __toString()
  {
    // mensaje a retornar en caso de dispararse la excepción
    return __CLASS__ . ": [ {$this->code}] {$this->message}<br>";
  }

  public function funcionPersonalizada()
  {
    echo "<i>Una función personalizada para este tipo de excepciones</i><br><hr>";
  }
}

class ProbarExcepcion
{
  public $var;

  const THROW_NONE = 0;
  const THROW_CUSTOM = 1;
  const THROW_DEFAULT = 2;

  function __construct($value = self::THROW_NONE)
  {
    switch($value){
      case self::THROW_CUSTOM:
        //lanze la excepción personalizada
        throw new MIExcepcion("1 no es un parámetro permitido válido ", 5);
        break;
      case self::THROW_DEFAULT:
        //lanze la excepción por defecto
        throw new MIExcepcion("2 no es un parámetro permitido válido ", 6);
        break;
      default:
        // no hay excepción
        $this->var = $value;
        break;
    }
  }
}

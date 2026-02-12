<?php 

class Auto{

  private $marca;
  private $modelo;
  private $color;
  private $cantPuertas;

    //constructor
    public function __construct($marca, $modelo, $color, $cantPuertas){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->cantPuertas = $cantPuertas;
    }

    //getters
    public function getMarca(){
        return $this->marca;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function getColor(){
        return $this->color;
    }
    public function getCantPuertas(){
        return $this->cantPuertas;
    }

    //setters
    public function setMarca($marca){
        $this->marca = $marca;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function setColor($color){
        $this->color = $color;
    }
    public function setCantPuertas($cantPuertas){
        $this->cantPuertas = $cantPuertas;
    }
}

    $auto1 = new Auto("toyota", "corolla", "rojo", 4);
    echo "Marca: " . $auto1->getMarca() . "<br>";
    echo "Modelo: " . $auto1->getModelo() . "<br>";
    echo "Color: " . $auto1->getColor() . "<br>";
    echo "Cantidad de puertas: " . $auto1->getCantPuertas() . "<br>";
?>
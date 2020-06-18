<?php
class Artist_birthday{
    public $artname;
    public $rol;
    public $birthday;

  public function artist1(){
    echo"----------------ARTISTA---------------- <br>";
    echo"Nombre: {$this->artname}<br> ";
    echo"es: {$this->rol}<br> ";
    echo"Fecha de cumpleaños: {$this->birthday}<br> ";
  }
}

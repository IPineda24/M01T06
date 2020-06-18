<?php
class Serie{
    public $seriename='The fast and the furious';
    public $actors='act1,act2';
    public $director='irvin';
    public $temporada='1';
    public $cap='2';
    public $namecap='irvin';
    public $news='la noticia';


    
    public function data_serie(){
        echo"----------------SERIE---------------- <br>";
        echo"Nombre: {$this->seriename}<br> ";
        echo"Actores: {$this->actors}<br> ";
        echo"Director: {$this->director}<br> ";
        echo"Temporrada: {$this->temporada}<br> ";
        echo"Capitulo: {$this->cap}<br> ";
        echo"Nombre del capitulo : {$this->namecap}<br> ";
        echo"Reseña: {$this->news}<br> ";
    }
  
}

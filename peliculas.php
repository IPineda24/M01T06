
<?php


class Movies{
    public $moviename='The fast and the furious';
    public $actors='act1,act2';
    public $director='paco';
    public $news='la noticia';




    public function data_movie(){
        echo"----------------PELICULA---------------- <br>";
        echo"pelicula: {$this->moviename}<br> ";
        echo"Actores: {$this->actors}<br> ";
        echo"Director: {$this->director}<br> ";
        echo"Reseña: {$this->news}<br> ";
    }
  
}






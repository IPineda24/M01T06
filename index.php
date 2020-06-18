<?php
require_once 'peliculas.php';
require_once 'serie.php';
require_once 'register.php';
require_once 'artista.php';
require_once 'comentarios.php';

$user = new User_register();
$user->name='pedro';
$user->email='pedro@gmail.com';
$user->edad='28';
$user->password='sss';
$user->password2='sss';


//datos de la palicula
$movie = new Movies();
$movie->moviename='The fast and the furious';
$movie->actors='Paul Walker, Vin Diesel, Michelle Rodríguez, Jordana Brewster, Rick Yune';
$movie->director='pablo';
$movie->news='Muestra que detrás de cada carrera El dinero corre con demasiada facilidad por estos circuitos callejeros hay grandes apuestas e incluso sus propios autos, también que son un espectáculo callejero, campo de batalla y de reunión tribal, alimentada a adrenalina, tensión sexual, velocidad salvaje y fuera de control. La gente se amontona en calles. Lo peligroso que son los retos que hay en cada carrera, y los continuos esfuerzos de la policía por controlar los piques callejeros, por que ellos saben que gran parte de este dinero es sucio.';

//datos de la serie
$serie = new Serie();
$serie->seriename='The fast and the furious';
$serie->actors='	
Grant Gustin,Candice Patton,Danielle Panabaker,Rick Cosnett,Carlos Valdes,Tom Cavanagh,Jesse L. Martin';
$serie->director='	Greg Berlanti';
$serie->temporada='1';
$serie->cap='1';
$serie->namecap='Piloto';
$serie->news='Muestra que detrás de cada carrera El dinero corre con demasiada facilidad por estos circuitos callejeros hay grandes apuestas e incluso sus propios autos, también que son un espectáculo callejero, campo de batalla y de reunión tribal, alimentada a adrenalina, tensión sexual, velocidad salvaje y fuera de control. La gente se amontona en calles. Lo peligroso que son los retos que hay en cada carrera, y los continuos esfuerzos de la policía por controlar los piques callejeros, por que ellos saben que gran parte de este dinero es sucio.';

// Artista 
$artista = new Artist_birthday();
$artista->artname='Reik';
$artista->rol='cantante';
$artista->birthday='26 de enero de 1983 ';

//puntuar y marcar como favoritas
$star = new Star();
//puntuar del 1 al 5 
$star->star=4;
//s o n
$star->fav='s';




$coment = new Coments();
 $coment->comentario="me gusto la reseña yo creo que el profe te pondra 10";





     //mostrar


     $user->valid();

     //para mostar serie  $serie->data_serie();
     //para mostrar movie $movie->data_movie();
     //para mostar artista $artista->artist1();
     $serie->data_serie();



     echo"<br>         ";
     $user->user_public();
          echo"<br> ------------------------------------------------------------- <br>";
     $star->star5();
     $star->fav();
     echo"<br> ------------------------------------------------------------------------------------------------------------------------- <br>";
     $coment->com();
<?php
class Coments{
    public $comentario;

    public function com(){
$total=0;
$total+=1;
echo"comentarios{$total}<br>";
echo $this->comentario;


    }

}





class Star{
    public $star;
    public $fav;

    public function star5(){
        $total5=2;
        $total4=0;
        $total3=0;
        $total2=0;
        $total1=0;
        
       
        switch ($this->star) {
            case '5':
                $total5+=1;
                echo"puntuacion: {$this->star}⭐⭐⭐⭐⭐<br>";
                break;
                case '4':
                    $total4+=1;
                    echo"puntuacion: {$this->star}⭐⭐⭐⭐<br>";
                    break;
                    case '3':
                        $total3+=1;
                        echo"puntuacion: {$this->star}⭐⭐⭐<br>";
                        break;
                        case '2':
                            $total2+=1;
                            echo"puntuacion: {$this->star}⭐⭐<br>";
                            break;
                            case '1':
                                $total1+=1;
                                echo"puntuacion: {$this->star}⭐<br>";
                                break;
            
            default:
                echo" no valido ";
                break;

        }
     $promedio =(5*$total5 + 4*$total4 + 3*$total3 + 2*$total2 + 1*$total1) / ($total5+$total4+$total3+$total2+$total1);
     $promedior= number_format($promedio, 2, '.', '');
        echo"promedio es: {$promedior} Stars <br>";

        
    }


    public function fav(){
        switch ($this->fav) {
            case 's':
                echo"favoritos: 💙 <br>";
                break;
                case 'n':
                    echo"favoritos: ✰ <br>";
                    break;
            
            default:
                # code...
                break;
        }
    }
}
<?php
class User_register{
    public $name='pedro';
    public $email='hola';
    public $edad='18';
    public $password;
    public $password2;

    public function user_public(){
        echo"Escrito por: {$this->name}<br> ";
        echo"{$this->email}<br> ";
       
    }

    public function valid(){
        if ($this->password==$this->password2) {
            echo"user {$this->name} is online<br><br>";
        } else {
            echo"no registrado <br><br>";
        }
        
    }
  

}
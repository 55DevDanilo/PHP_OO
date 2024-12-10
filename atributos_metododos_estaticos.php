<?php
class Exemplo
{
    public static $atributo1 = 'Eu sou um atributo estático';
    public $atributo2= 'Eu sou um atributo Normal';


    public static function metodo1(){
        echo'Eu sou um metodo estatico';
    }

    public function metodo2(){
        echo'Eu sou um metodo normal';
    }


}

    echo Exemplo::metodo1();
    echo '<br />';
    echo Exemplo::$atributo1;

    $x =new Exemplo();

    echo $x->metodo2();
?>
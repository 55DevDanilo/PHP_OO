<?php

class Veiculo 
{
    public $placa = null;
    public $cor = null;
    function acelerar()
    {
        echo 'Acelerar';
    }
    
    function freiar(){
        echo 'Freiar';
    }

    function trocarMarcha(){
        echo'engatar a marcha';
    }

}
class Carro extends Veiculo
{
    function __construct($placa,$cor)
    {
        $this->placa=$placa;
        $this->cor=$cor;

    }
    public $teto_solar = true;



    function abrirTetoSolar()
    {
        echo 'Abrir o teto solar';
    }

    function alterarPosicaoVolante()
    {
        echo 'alterar posicao volante';
    }
}



class Moto extends Veiculo
{
    function __construct($placa,$cor)
    {
        $this->placa=$placa;
        $this->cor=$cor;

    }
    public $contraPesoGuidao = true;



    function empinar()
    {
        echo 'Empinar';
    }

    function trocarMarcha(){
        echo' desengatar com mão e engatar a marcha com o pé';
    }

}

$carro = new Carro('ABC1234','Branco');
$moto = new Moto('DEF5678','VERMELHO');


$carro->trocarMarcha();
echo '<br />';
$moto->trocarMarcha();







?>
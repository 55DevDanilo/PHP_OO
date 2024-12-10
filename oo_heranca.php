<?php
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

class Veiculo 
{
    public $placa = null;
    public $cor = null;
    function acelerar()
    {
        echo 'Acelerar';
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

}

$carro = new Carro('ABC1234','Branco');
$moto = new Moto('DEF5678','VERMELHO');

echo '<pre>';
print_r($carro);
echo '<br /><br />';
print_r($moto);
echo '</pre>';

echo '<hr />';

$carro->abrirTetoSolar();
echo '<hr />';
$carro->acelerar();
echo '<br /><br />';
$moto->acelerar();







?>
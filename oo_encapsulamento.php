<?php

class Pai
{
    private $nome = 'Danilo';
    protected $sobrenome = 'Amorim';
    public $humor = 'ódio';

    // public function getNome(){
    //     return $this->nome;
    // }

    // public function setNome($value)
    // {
    //     if (strlen($value)>=3) {
    //         # code...
    //         $this->nome=$value;
    //     }

    // }

    public function __get($attr)
    {
        return $this->$attr;
    }

    public function __set($attr, $value)
    {
        $this->$attr = $value;
    }

    private function executarMania()
    {
        echo 'Assobiar';
    }

    protected function responder()
    {
        echo 'Oi';
    }

    public function executarAcao()
    {
        $x = rand(1, 10);

        if ($x >= 1 && $x <= 8) {
            $this->responder();
            # code...
        } else {
            # code...

            $this->executarMania();
        }

    }



}

class Filho extends Pai
{

    // public function getAtributo($attr)
    // {
    //     return $this->$attr;
    // }

    // public function setAtributo($attr, $value)
    // {
    //     $this->$attr = $value;
    // }

    public function __construct()
    {
        echo '<pre>';
        print_r(get_class_methods($this));
        echo '<pre/>';

    }

}


$filho = new Filho();
//$pai = new Pai();
// echo $pai->getNome();
// $pai->setNome('Daniloo');
// echo'<br />';
// echo $pai->getNome();

// echo $pai->nome;
// echo '<br />';
// echo $pai->sobrenome = "Ferreira";
// echo '<br />';

// echo $pai->executarAcao();

// echo $filho->getAtributo('humor');
// echo '<br />';
// $filho->setAtributo('humor', 'Triste');
// echo $filho->getAtributo('humor');
// echo $filho->setAtributo('nome', 'Timóteo');
// echo '<br />';
// echo $filho->getAtributo('nome');

// exibir os metodos do objeto


// echo $filho->__get('nome');
// echo '<br />';
// echo $filho->__set('nome','Timoteo');
// echo $filho->__get('nome');

$filho->executarAcao();















?>
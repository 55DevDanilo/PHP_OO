<?php
class Funcionario
{
    public $nome = null;
    public $telefone = null;
    public $numeroFilhos =null;

    function setNome($nome)
    {
        $this->nome=$nome;
    }

    function setNumFilhos($numeroFilhos)
    {
        $this->numeroFilhos=$numeroFilhos;
    }

    function getNome()
    {
        return $this->nome;
    }

    function getNumFilhos()
    {
        return $this->numeroFilhos;
    }

    function resumirCadFunc()
    {
        return " $this->nome possui $this->numeroFilhos filhos(s)";
    }
    function modificarNumFilhos($numeroFilhos)
    {
        $this->numeroFilhos = $numeroFilhos;
    }

}

$y= new Funcionario();
$y->setNome('Jose');
$y->setNumFilhos(2);
echo $y->resumirCadFunc();
echo '<br />';
echo '<hr />';
echo $y->getNome().'possui'.$y->getNumFilhos().'filho(s)';
/* $y = new Funcionario();
echo $y->nome = 'Jose';
echo '<br />';
$y->numeroFilhos = 2;
echo '<br />';
echo $y->resumirCadFunc(); */

/* echo '<hr />';

$x = new Funcionario();
echo $x->nome = 'Reinaldo';
echo '<br />';
$x->modificarNumFilhos( 1);
echo $x->resumirCadFunc();
$x->modificarNumFilhos(2);
echo '<br />';
echo $x->resumirCadFunc();
?> */
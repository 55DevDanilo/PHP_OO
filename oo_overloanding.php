<?php
class Funcionario
{
    public $nome = null;
    public $telefone = null;
    public $numeroFilhos =null;

    public $cargo=null;
    public $salario=null;
/* 
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
 */

 // Overloading/sobrecarga

    function __set($atributo, $valor){
        $this->$atributo=$valor;
    }

    function __get($atributo){
        return $this->$atributo;

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
$y->__set('nome','Jose');
$y->__set('numeroFilhos',2);

echo '<br />';
echo '<hr />';
echo $y->__get('nome').' possui '.$y->__get('numeroFilhos').'filho(s)';

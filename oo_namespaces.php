<?php
namespace A;

class cliente implements \B\CadastroInterface
{
    public $nome = 'Danilo';

    public function __construct()
    {
        echo '<pre>';
        print_r(get_class_methods($this));
        echo '</pre>';
    }
    public function __get($attr)
    {
        return $this->$attr;
    }

    public function salvar()
    {
        echo 'Salvar';
    }

    public function remover()
    {
        echo 'Remover';
    }
}

interface CadastroInterface
{
    public function salvar();
}

namespace B;

 

class Cliente implements CadastroInterface
{

    public $nome = 'Timoteo';

    public function __construct()
    {
        echo '<pre>';
        print_r(get_class_methods($this));
        echo '</pre>';
    }

    public function __get($attr)
    {
        return $this->$attr;
    }

    public function salvar()
    {
        echo 'Salvar';
    }

    public function remover()
    {
        echo 'Remover';
    }

}

interface CadastroInterface
{
    public function remover();
}



?>
<<?php

   class Pessoa
    {
        public $nome = null;

        function __construct($nome){
            echo 'iniciando o Construtor e objeto iniciado';
            $this->nome=$nome;
        }

        function __destruct(){
            echo 'Objeto removido';
        }/*remoção do objeto da meomoria */
        function __get($atributo){
            return $this->$atributo;
        }

        function correr()
        {
            return $this->__get('nome').' está correndo';
        }
        
    }
    
$pessoa=new Pessoa('Jorge');
echo'<br/>Nome : '.$pessoa/*$pessoa é a variavel acessando os metodos da classe pessoa*/->__get('nome');

echo '<br />';

unset($pessoa);/**chama o metodo destruct para destruir o objeto, de forma intencional*/



?>
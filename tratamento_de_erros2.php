<?php

class MinhaExceptionCustomizada extends Exception {

    private $erro ='';
    
    public function __construct($erro)
    {
        $this->erro=$erro;
    }

    public function exibirMessagemErroCustomizada(){
        return $this->erro;
    }

}



try {
    throw new MinhaExceptionCustomizada("Esse é um erro de testes", 1);

} catch (MinhaExceptionCustomizada $e) {
    //throw $th;
    echo $e->exibirMessagemErroCustomizada();

}

?>
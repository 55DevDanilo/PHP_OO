<?php
    interface EquipamentoCorInterface{
        public function cor();
    }
    interface EquipamentoEletronicoInterface{
        public function ligar();
        public function desligar();
    }
    class Geladerio implements EquipamentoEletronicoInterface, EquipamentoCorInterface{
        public function abrirPorta (){
            echo 'Porta aberta';

        }
        public function ligar()
        {
            echo 'ligar';
        }

        public function cor()
        {
            echo 'Branco';
        }

        public function desligar()
        {
            echo 'desligar';
        }
    }
    class TV{
        public function trocarCanal()
        {
            echo 'mudar de canal';
            
        }

        public function desligar()
        {
            echo 'desligar';
        }

        
        public function ligar()
        {
            echo 'ligar';
        }

    
    }

    interface AnimalInterface {
        public function comer();
    }

    interface AveInterface extends AnimalInterface{
        public function voar();
    }

    class Papagaio implements AveInterface{
        public function voar(){
            echo 'Voar';
        }

        public function comer(){
            echo'comer';
        }

        
    }

    echo 'Teste';

?>
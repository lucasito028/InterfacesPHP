<?php
    
    class Veiculo {

        protected $estado;

        public function ligarMotor(){
            $this->estado = true;
            return $this->estado;
        }
        
        public function desligarMotor(){
            $this->estado = false;
            return $this->estado;
        }
    }

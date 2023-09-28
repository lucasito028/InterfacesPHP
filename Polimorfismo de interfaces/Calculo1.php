<?php
    
    class Calculo1 extends Calculadora implements OperacoesMatematicas{
        public function adicao(){
            $this->resultado = $this->n1 + $this->n2;
            return $this->resultado;
        }

        public function subtracao(){
            $this->resultado = $this->n1 - $this->n2;
            return $this->resultado;
        }
    
        public function multiplicacao(){
            $this->resultado = $this->n1 * $this->n2;
            return $this->resultado;
        }
    
        public function divisao(){
            $this->resultado = $this->n1 / $this->n2;
            return $this->resultado;
        }
    }
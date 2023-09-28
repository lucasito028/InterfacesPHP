<?php
    
    class Calculo2 extends Calculadora implements OperacoesMatematicas{

        public function adicao($n1, $n2){
            $this->resultado = $n1 + $n2;
            return $this->resultado;
        }
        public function subtracao($n1, $n2){
            $this->resultado = $n1 - $n2;
            return $this->resultado;
        }
        public function multiplicacao($n1, $n2){
            $this->resultado = $n1 * $n2;
            return $this->resultado;
        }
        public function divisao($n1, $n2){
            $this->resultado = $n1 / $n2;
            return $this->resultado;
        }
    }
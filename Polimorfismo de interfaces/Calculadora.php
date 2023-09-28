<?php
    
    abstract class Calculadora{

        protected $resultado;
        protected $n1;
        protected $n2;

        function __construct($n1, $n2){
            $this->$n1 = $n1;
            $this->$n2 = $n2;
        }

    }

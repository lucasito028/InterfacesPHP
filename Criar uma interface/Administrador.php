<?php
    
    class Administrador implements Autenticavel{

        protected $email;
        protected $senha;
        protected $numero;
        
        public function __construct($senha, $email, $numero){
            $this->senha = $senha;
            $this->email = $email;
            $this->numero = $numero;
                }
        public function autenticar(){
            if(isset($this->senha) && isset($this->email) && isset($this->numero)){
                echo "ADM Logado com Sucesso";
            }else{
                echo "Deu errado algo";
            }
        }
    }

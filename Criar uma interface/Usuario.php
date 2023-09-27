<?php
    
    class Usuario implements Autenticavel{

        protected $email;
        protected $senha;

        public function __construct($senha, $email){
            $this->senha = $senha;
            $this->email = $email;
                }
        public function autenticar(){
            if(isset($this->senha) && isset($this->email)){
                 echo "Usuario Logado com Sucesso";
            }else{
                echo "Deu errado algo";
            }
        }
    }

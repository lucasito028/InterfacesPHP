<?php
    
    class Sistemalogin {

        protected $autenticavel;
    
        public function __construct(Autenticavel $autenticavel){
            $this->autenticavel = $autenticavel;}


        public function efetuarlogin($email, $senha){
            if($this->autenticavel->autenticar($email, $senha)){
                echo "Usuario Logado com Sucesso";
           }else{
               echo "Deu errado algo";
           }
            
        }
    }
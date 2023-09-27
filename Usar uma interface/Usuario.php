<?php
    
    class Usuario implements Autenticavel{

        protected $email;
        protected $senha;

        public function __construct($senha, $email){
            $this->senha = $senha;
            $this->email = $email;
                }
                
        public function autenticar($email, $senha){
            if(isset($this->senha) && isset($this->email)){
                 return ($this->email === $email && $this->senha === $senha);
            }
        }
    }

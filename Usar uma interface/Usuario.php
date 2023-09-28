<?php
    
    class Usuario implements Autenticavel {
        protected $email;
        protected $senha;
    
        public function __construct($email, $senha) {
            $this->email = $email;
            $this->senha = $senha;
        }
    
        public function autenticar($email, $senha) {
            return ($this->email === $email && $this->senha === $senha);
        }
    }
    

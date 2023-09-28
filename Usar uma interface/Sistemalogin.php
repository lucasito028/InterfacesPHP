<?php
    
class SistemaDeLogin {
    protected $autenticavel;

    public function __construct(Autenticavel $autenticavel) {
        $this->autenticavel = $autenticavel;
    }

    public function efetuarLogin($email, $senha) {
        $autenticado = $this->autenticavel->autenticar($email, $senha);
        if ($autenticado) {
            echo "Usuário logado com ssucesso";
        } else {
            echo "Falha na autenticação";
        }
    }
}


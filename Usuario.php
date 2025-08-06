<?php

class Usuario {
    public $id = 0;
    public $login = "";
    public $senha = "";
    public $nomeUsuario = "";
    public $emailRecuperacao = "";
    public $status = true;
    public $tipoPerfil = "";
    public $permissoes = "";
    public $logado = false;

    public function logar($login, $senha) { 
        $seed = "Ab4cax1#456B3nt0";

        $this->login = $login;
        $this->senha = $senha . $seed;

        $senhaCrypto = hash('sha256', $this->senha);
       
        // obter a senha do banco pelo $login
       $senhaBanco = "2cf24dba5fb0a30e26e83b2ac5b9e29e1b161e5c1fa7425e730";
       
       $senhasIguais = $senhaCrypto === $senhaBanco;

       if ($senhasIguais) {
           $this->logado = true;
         // redirect home/pagina inicial
       } else {
         // redirect login
       }

    }
    
    public function deslogar() {
        $this->logado = false;
    }

    public function ativarUsuario($id, $status) {
        $this->status = true;
    }

    public function desativarUsuario($id, $status) {
        $this->status = false;
    }

    public function recuperarSenha($emailRecuperacao) {
        $this->emailRecuperacao = $emailRecuperacao;
    }

    public function alterarTipoPerfil($id, $tipoPerfil) {
        $this->tipoPerfil = $tipoPerfil;
    }

    public function alterarPermissoes($id, $permissoes) {
         $this->permissoes = $permissoes;
    }

}

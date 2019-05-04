<?php
class Cadastro{
    private $Nome, $Email, $Senha;

    public function getNome():string
    {
        return $this->Nome;
    }

    public function getEmail():string
    {
        return $this->Email;
    }

    public function getSenha():string
    {
        return $this->Senha;
    }

    public function setNome($nome)
    {
        $this->Nome = $nome;
    }

    public function setEmail($email)
    {
        $this->Email = $email;
    }

    public function setSenha($senha)
    {
        $this->Senha = $senha;
    }

    public function __toString(){
        return json_encode(array(
            "Nome" => $this->getNome(),
            "Email" => $this->getEmail(),
            "Senha" => $this->getSenha()
        ));
    }

}
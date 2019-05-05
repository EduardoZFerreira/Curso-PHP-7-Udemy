<?php

class Usuario
{
    private $Idusuario, $Deslogin, $Dessenha, $Dtcadastro;

    public function __construct($login = "", $password = "")
    {
        $this->SetDeslogin($login);
        $this->SetDessenha($password);
    }

    public function GetIdusuario()
    {
        return $this->Idusuario;
    }

    public function GetDeslogin()
    {
        return $this->Deslogin;
    }

    public function GetDessenha()
    {
        return $this->Dessenha;
    }

    public function GetDtcadastro()
    {
        return $this->Dtcadastro;
    }

    public function SetIdusuario($idusuario)
    {
        $this->Idusuario = $idusuario;
    }

    public function SetDeslogin($deslogin)
    {
        $this->Deslogin = $deslogin;
    }

    public function SetDessenha($dessenha)
    {
        $this->Dessenha = $dessenha;
    }

    public function SetDtcadastro($dtcadastro)
    {
        $this->Dtcadastro = $dtcadastro;
    }

    public function GetById($id)
    {
        $sql = new Sql();
        $result = $sql->Select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(":ID"=> $id));
        if(count($result) > 0)
        {
            $this->SetData($result[0]);
        }
    }

    public static function GetAll()
    {
        $sql = new Sql();
        return $sql->Select("SELECT * FROM tb_usuarios ORDER BY deslogin");
    }

    public static function Search($login)
    {
        $sql = new Sql();
        return $sql->Select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(':SEARCH' => "%" . $login . "%"));
    }

    public function Login($login, $password)
    {
        $sql = new Sql();
        $result = $sql->Select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASS", array(
            ":LOGIN" => $login,
            ":PASS" => $password
        ));
        if(count($result) > 0)
        {
            $this->SetData($result[0]);
        }
        else 
        {
            throw new Exception("Login e/ou senha inválidos");
        }
    }

    public function Insert()
    {
        $sql = new Sql();
        $result = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
            ":LOGIN"=>$this->GetDeslogin(),
            ":PASSWORD"=>$this->GetDessenha()
        ));
        if(count($result) > 0)
        {
            $this->SetData($result[0]);
        }
    }

    public function SetData($data)
    {
        $this->SetIdusuario($data["idusuario"]);
        $this->SetDeslogin($data["deslogin"]);
        $this->SetDessenha($data["dessenha"]);
        $this->SetDtcadastro(new DateTime($data["dtcadastro"]));
    }

    public function __toString()
    {
        return json_encode(array(
            "idusuario" => $this->GetIdusuario(),
            "deslogin" => $this->GetDeslogin(),
            "dessenha" => $this->GetDessenha(),
            "dtcadastro" => $this->GetDtcadastro()->format("d/m/Y")
        ));
    }
}
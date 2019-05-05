<?php

class Usuario
{
    private $Idusuario, $Deslogin, $Dessenha, $Dtcadastro;

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
            $row = $result[0];
            $this->SetIdusuario($row["idusuario"]);
            $this->SetDeslogin($row["deslogin"]);
            $this->SetDessenha($row["dessenha"]);
            $this->SetDtcadastro(new DateTime($row["dtcadastro"]));
        }
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
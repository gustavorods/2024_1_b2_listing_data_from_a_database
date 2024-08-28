<?php
include_once 'Conectar.php';

// Atributos
class autor
{
    private $Cod_autor;
    private $NomeAutor;
    private $Sobrenome;
    private $Email;
    private $Nasc;
    private $conn;


    // getter e setter
    public function getCod_autor() {
        return $this->Cod_autor;
    }
    
    public function setCod_autor($Cod_autorr) {
        $this->Cod_autor = $Cod_autorr;
    }
    
    public function getNomeAutor() {
        return $this->NomeAutor;
    }
    
    public function setNomeAutor($NomeAutorr) {
        $this->NomeAutor = $NomeAutorr;
    }
    
    public function getSobrenome() {
        return $this->Sobrenome;
    }
    
    public function setSobrenome($Sobrenomee) {
        $this->Sobrenome = $Sobrenomee;
    }

    public function getEmail() {
        return $this->Email;
    }
    
    public function setEmail($Emaill) {
        $this->Email = $Emaill;
    }

    public function getNasc() {
        return $this->Nasc;
    }
    
    public function setNasc($Nascc) {
        $this->Nasc = $Nascc;
    }
    
    // métodos

    function salvar()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("insert into autor values (null, ?,?,?,?)");
            @$sql->bindParam(1, $this->getNomeAutor(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getSobrenome(), PDO::PARAM_STR);
            @$sql->bindParam(3, $this->getEmail(), PDO::PARAM_STR);
            @$sql->bindParam(4, $this->getNasc(), PDO::PARAM_STR);
            if($sql->execute() == 1)
            {
                return "Registro salvo com sucesso!";
            }
            $this->conn = null;
        }
        catch(PDOException $exc)
        {
            echo "Erro ao salvar o registro. " . $exc->getMessage();
        }
    }

    function alterar() 
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("Select * from produto where id = ?");
            @sql-> bindParam(1, $this->getId(), PDO::PARAM_STR); 
            $sql->execute();
            return $sql->fetchAll ();
            $this->conn = null;
        }
        catch(PDOExeception $exc)
        {
            echo "Erro ao alterar. " . $exc->getMessage();
        }
    }

    function alterar2()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("update produto set nome = ?, estoque = ? where id = ?");
            @sql-> bindParam(1, $this->getNome(), PDO::PARAM_STR);
            @sql-> bindParam(2, $this->getEstoque(), PDO::PARAM_STR);
            @sql-> bindParam(3, $this->getId(), PDO::PARAM_STR);
            if($sql->execute() == 3) 
            {
                return "registro alterado com sucesso!";
            }
            $this->conn = null;
        }
        catch(PDOException $exc)
        {
            echo "Erro ao salvar o registro. " . $exc->getMessage();
        }
    }

    function consultar()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("Select * from autor where NomeAutor like ?");
            @$sql-> bindParam(1, $this->getNomeAutor(), PDO::PARAM_STR); 
            $sql->execute();
            return $sql->fetchAll ();
            $this->conn = null;
        }
        catch(PDOExeception $exc)
        {
            echo "Erro a consulta" . $exc->getMessage();
        }
    }

    function exclusao()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("delete from autor where Cod_autor = ?");
            @$sql-> bindParam(1, $this->getCod_autor(), PDO::PARAM_STR);
            if($sql->execute() == 1) 
            {
                return "Excluido com sucesso!";
            }
            $this->conn = null;
        }
        catch(PDOException $exc)
        {
            echo "Erro ao excluir. " . $exc->getMessage();
        }
    }

    function listar()
    {
        try {
            $this->conn = new conectar();
            $sql = $this->conn->prepare("select * from autor order by Nasc");
            $sql -> execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch (PDOException $exc) {
            echo "Erro ao listar autor: " . $exc -> getMessage();
        }
    }
}
?>
<?php
include_once 'Conectar.php';

// Atributos
class produtos
{
    private $id;
    private $nome;
    private $estoque;
    private $conn;

    // getter e setter
    public function getId() {
        return $this->id;
    }
    
    public function setId($iid) {
        $this->id = $iid;
    }
    
    public function getNome() {
        return $this->nome;
    }
    
    public function setNome($name) {
        $this->nome = $name;
    }
    
    public function getEstoque() {
        return $this->estoque;
    }
    
    public function setEstoque($estoqui) {
        $this->estoque = $estoqui;
    }
    
    // métodos

    function salvar()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("insert into produtos values (null, ?,?)");
            @$sql->bindParam(1, $this->getNome(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getEstoque(), PDO::PARAM_STR);
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
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("Select * from produtos where nome like ?");
            @$sql->bindParam(1, $this->getNome(), PDO::PARAM_STR); 
            $sql->execute();
            return $sql->fetchAll();
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
            $sql = $this->conn->prepare("delete from produto where id = ?");
            @sql-> bindParam(1, $this->getId(), PDO::PARAM_STR);
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
            $sql = $this->conn->prepare("select * from produtos order by nome");
            $sql -> execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch (PDOException $exc) {
            echo "Erro ao listar Produto: " . $exc -> getMessage();
        }
    }
}
?>
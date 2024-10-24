<?php
include_once 'conectar.php';
class usuario
{
private $usuario;
private $senha;
private $conn;

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

function logar()
{
    try {
        $this-> conn = new conectar();
        $sql = $this->conn->prepare("SELECT * FROM usuario WHERE Login LIKE ? AND Senha = ?");
        @$sql-> bindParam(1,$this->getUsuario(), PDO::PARAM_STR);
        @$sql-> bindParam(2,$this->getSenha(), PDO::PARAM_STR);
        $sql->execute();
        return $sql->fetchAll();
        $this->conn = null;
    }
    catch (PDOException $exc) {
        echo "Erro ao logar: " . $exc->getMessage();
    }
}

}
?>
<?php
require_once('init.php');

class Banco{
    private $mysqli;
    
    public function __construct(){
        echo "Conexão efetuada com sucesso";
        $this->conexao();
    }

    public function query($sql){
	$this->stmt = $this->mysqli->prepare($sql);
    }

    public function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
        if ($this->mysqli->connect_errno) {
            echo "Falha ao conectar ao MySQL: (" . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error;
    } 
}
    public function setJogo($nome,$programador,$quantidade_niveis,$preco,$data){
        $stmt = $this->mysqli->prepare("INSERT INTO jogos (`nome`,`programador`,`quantidade_niveis`,`preco`,`data`) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss",$nome,$programador,$quantidade_niveis,$preco,$data);
        if($stmt->execute() == TRUE){
            return true;
        } else {
            return false;
        }
    }
}
?>
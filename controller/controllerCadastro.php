<?php
require_once("../model/cadastroLivro.php");
class cadastroController {
    private $cadastro;
    public function __construct() {
        $this->cadastro = new Cadastro();
        $this->incluir();
    }
    private function incluir() {
            $this->cadastro->setNome($_POST["nome"]);
            $this->cadastro->setProgramador($_POST["programador"]);
            $this->cadastro->setQuantidade_niveis($_POST["quantidade_niveis"]);
            $this->cadastro->setPreco($_POST["preco"]);
            $this->cadastro->setData(date('Y-m-d', strtotime($_POST["data"])));

            $result = $this->cadastro->incluir();
            if($result >= 1){
                echo "<script>alert('Registro incluído com sucesso!'); document.location='../view/cadastro.php'</script>";
            } else {
                echo"<script>alert('Erro ao gravar registro!, verifique se o livro não está duplicado'); history.back();</script>";
            }
        }
    }
    new cadastroController();
?>
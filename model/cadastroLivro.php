<?php
require_once("banco.php");

class Cadastro extends Banco{
    private $nome;
    private $programador;
    private $quantidade_niveis;
    private $preco;
    private $data;


    public function setNome($string){
        $this->nome = $string;
    }
    public function setProgramador($string){
        $this->programador = $string;
    }
    public function setQuantidade_niveis($string){
        $this->quantidade_niveis = $string;
    }
    public function setPreco($string){
        $this->preco = $string;
    }
    public function setFlag($string){
        $this->flag = $string;
    }
    public function setData($string){
        $this->data = $string;
    }

    public function getNome(){
        return $this->nome;
    }
    public function getProgramador(){
        return $this->programador;
    }
    public function getQuantidade_niveis(){
        return $this->quantidade_niveis;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function getFlag(){
        return $this->flag;
    }
    public function getData(){
        return $this->data;
    }

    public function incluir(){
        return $this->setJogo($this->getNome(),$this->getProgramador(),$this->getQuantidade_niveis(),$this->getPreco(),$this->getData());
    }
}
?>
<?php

class Fabricante {

    private $id;
    private $nome;
    private $imagem;
    private $telefone;
    private $cnpj;

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getImagem() {
        return $this->imagem;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

}

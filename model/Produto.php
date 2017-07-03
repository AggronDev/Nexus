<?php

require_once './Fabricante.php';

class Produto {

    private $id;
    private $nome;
    private $descricao;
    private $imagem;
    private $quantidade;
    private $fabricante_id;
    private $categoria_id;

    public function __construct() {
        $this->fabricante_id = new Fabricante();
        $this->categoria_id = new Categoria();
    }

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

    function getDescricao() {
        return $this->descricao;
    }

    function getImagem() {
        return $this->imagem;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getFabricante_id() {
        return $this->fabricante_id;
    }

    function getCategoria_id() {
        return $this->categoria_id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setFabricante_id($fabricante_id) {
        $this->fabricante_id = $fabricante_id;
    }

    function setCategoria_id($categoria_id) {
        $this->categoria_id = $categoria_id;
    }

}

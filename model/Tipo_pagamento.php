<?php

class Tipo_pagamento {

    private $id;
    private $nome;
    private $ativo;

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getAtivo() {
        return $this->ativo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setAtivo($ativo) {
        $this->ativo = $ativo;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }

}

<?php

class Entrega {

    private $id;
    private $nome;
    private $previsto_para;
    private $pedido_id;
    private $rastreamento;

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getPrevisto_para() {
        return $this->previsto_para;
    }

    function getPedido_id() {
        return $this->pedido_id;
    }

    function getRastreamento() {
        return $this->rastreamento;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setPrevisto_para($previsto_para) {
        $this->previsto_para = $previsto_para;
    }

    function setPedido_id($pedido_id) {
        $this->pedido_id = $pedido_id;
    }

    function setRastreamento($rastreamento) {
        $this->rastreamento = $rastreamento;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }

}

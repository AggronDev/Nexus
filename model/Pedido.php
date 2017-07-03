<?php

require_once './Usuario.php';
require_once './Endereco.php';

class Pedido {

    private $id;
    private $valor_total;
    private $status;
    private $data_pedido;
    private $usuario;
    private $produto_id;
    private $endereco_cobranca_id;
    private $endereco_entrega_id;
    private $tipo_pagamento_id;

    function getId() {
        return $this->id;
    }

    function getValor_total() {
        return $this->valor_total;
    }

    function getStatus() {
        return $this->status;
    }

    function getData_pedido() {
        return $this->data_pedido;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getProduto_id() {
        return $this->produto_id;
    }

    function getEndereco_cobranca_id() {
        return $this->endereco_cobranca_id;
    }

    function getEndereco_entrega_id() {
        return $this->endereco_entrega_id;
    }

    function getTipo_pagamento_id() {
        return $this->tipo_pagamento_id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setValor_total($valor_total) {
        $this->valor_total = $valor_total;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setData_pedido($data_pedido) {
        $this->data_pedido = $data_pedido;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setProduto_id($produto_id) {
        $this->produto_id = $produto_id;
    }

    function setEndereco_cobranca_id($endereco_cobranca_id) {
        $this->endereco_cobranca_id = $endereco_cobranca_id;
    }

    function setEndereco_entrega_id($endereco_entrega_id) {
        $this->endereco_entrega_id = $endereco_entrega_id;
    }

    function setTipo_pagamento_id($tipo_pagamento_id) {
        $this->tipo_pagamento_id = $tipo_pagamento_id;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }

}

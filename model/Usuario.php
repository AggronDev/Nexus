<?php

class Usuario {

    private $id;
    private $nome;
    private $usuario;
    private $email;
    private $senha;
    private $cpf;
    private $nascimento;
    private $telefone;

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }

    public function setId($id) {
        $this->id = $id;
    }

    function getId() {
        return $this->id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function getNome() {
        return $this->nome;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function getEmail() {
        return $this->Email;
    }

    function getSenha() {
        return $this->senha;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function getCpf() {
        return $this->cpf;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function getNascimento() {
        return $this->nascimento;
    }

    function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

}

<?php

class vendedor {

    private $codigo;
    private $nome;
    private $cpf;
    private $email;
    private $telefone;
    private $usuario;
    private $senha;
    private $status;
    
    function __construct($codigo, $nome, $cpf, $email, $telefone, $usuario, $senha, $status) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->usuario = $usuario;
        $this->senha = $senha;
        $this->status = $status;
    }

        function getStatus() {
        return $this->status;
    }

    function setStatus($status) {
        $this->status = $status;
    }

        function getCodigo() {
        return $this->codigo;
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getSenha() {
        return $this->senha;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }



    function insere($l) {
        $sql = mysqli_query($l, "INSERT INTO vendedor (nome, cpf, email, telefone,usuario, senha,status) VALUES ('$this->nome','$this->cpf','$this->email','$this->telefone','$this->usuario','$this->senha','$this->status')") or die(mysqli_error_());
    }

    function delete($cod, $l) {
        $sql = mysqli_query($l, "delete from vendedor where cod ='$cod'") or die(mysqli_error_());
    }

    function atualiza($cod, $l) {
        $sql = mysqli_query($l, "update vendedor set nome = '$this->nome',cpf ='$this->cpf',email= '$this->email', telefone = '$this->telefone',status = '$this->status' where cod ='$cod'") or die(mysqli_error_());
    }

    function mostra($cod, $l) {
        $sql = mysqli_query($l, "select * from vendedor where cod = '$cod'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->nome = $row['nome'];
            $this->cpf = $row['cpf'];
            $this->email = $row['email'];
            $this->usuario = $row['usuario'];
            $this->senha = $row['senha'];
            $this->telefone = $row['telefone'];
            $this->status = $row['status'];
        
            
        }
    }
 function mostra1($cpf, $l) {
        $sql = mysqli_query($l, "select * from vendedor where cpf = '$cpf'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->nome = $row['nome'];
            $this->cpf = $row['cpf'];
            $this->email = $row['email'];
            $this->usuario = $row['usuario'];
            $this->senha = $row['senha'];
            $this->telefone = $row['telefone'];
            $this->status = $row['status'];
        
            
        }
    }
}

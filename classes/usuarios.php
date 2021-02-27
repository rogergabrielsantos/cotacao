<?php

class usuarios {

    private $codigo;
    private $nome;
    private $usuario;
    private $senha;
    private $perfil;
    private $cpf;
    private $acesso;
    private $status;

    
    function __construct($codigo, $nome, $usuario, $senha, $perfil, $cpf, $acesso, $status) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->usuario = $usuario;
        $this->senha = $senha;
        $this->perfil = $perfil;
        $this->cpf = $cpf;
        $this->acesso = $acesso;
        $this->status = $status;
    }

    
    function getStatus() {
        return $this->status;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function getAcesso() {
        return $this->acesso;
    }

    function getCpf() {
        return $this->cpf;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setAcesso($acesso) {
        $this->acesso = $acesso;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getNome() {
        return $this->nome;
    }

    function getPerfil() {
        return $this->perfil;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getSenha() {
        return $this->senha;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

    function insere($l) {
        $sql = mysqli_query($l, "INSERT INTO usuarios (usuario, senha, perfil, nome,cpf, primeiroacesso,status) VALUES ('$this->usuario','$this->senha','$this->perfil','$this->nome','$this->cpf','$this->acesso','$this->status')") or die(mysqli_error_());
    }

    function delete($cod, $l) {
        $sql = mysqli_query($l, "delete from usuarios where cod ='$cod'") or die(mysqli_error_());
    }

    function atualiza($cod, $l) {
        $sql = mysqli_query($l, "update usuarios set nome = '$this->nome', senha ='$this->senha', perfil= '$this->perfil', usuario = '$this->usuario', primeiroacesso='$this->acesso', status = '$this->status'  where cod ='$cod'") or die(mysqli_error_());
    }

    function atualizasenha($cod, $l) {
        $sql = mysqli_query($l, "update usuarios set senha ='$this->senha', primeiroacesso='$this->acesso' where cod ='$cod'") or die(mysqli_error_());
    }

    function mostra($l) {
        $sql = mysqli_query($l, "select * from usuarios") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->usuario[] = $row['usuario'];
            $this->senha[] = $row['senha'];
            $this->perfil[] = $row['perfil'];
            $this->nome[] = $row['nome'];
            $this->codigo[] = $row['cod'];
            $this->codvendedor[] = $row['cpf'];
            $this->acesso[] = $row['primeiroacesso'];
            $this->status[] = $row['status'];
        }
    }

    function mostra1($l, $cod) {
        $sql = mysqli_query($l, "select * from usuarios where cod= '$cod'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->usuario = $row['usuario'];
            $this->senha = $row['senha'];
            $this->perfi = $row['perfil'];
            $this->nome = $row['nome'];
            $this->codigo = $row['cod'];
            $this->codvendedor = $row['cpf'];
            $this->acesso = $row['primeiroacesso'];
             $this->status = $row['status'];
        }
    }
function mostra2($l, $cpf) {
        $sql = mysqli_query($l, "select * from usuarios where cpf= '$cpf'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->usuario = $row['usuario'];
            $this->senha = $row['senha'];
            $this->perfi = $row['perfil'];
            $this->nome = $row['nome'];
            $this->codigo = $row['cod'];
            $this->codvendedor = $row['cpf'];
            $this->acesso = $row['primeiroacesso'];
             $this->status = $row['status'];
        }
    }
}

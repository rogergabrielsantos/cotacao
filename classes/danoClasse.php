<?php

class danoClasse {

    private $codigo;
    private $codvistoria;
    private $placa;
    private $controle;
    private $dano;
    private $estado;
    private $foto;
    private $obs;

    function __construct($codigo, $codvistoria, $placa, $controle, $dano, $estado, $foto, $obs) {
        $this->codigo = $codigo;
        $this->codvistoria = $codvistoria;
        $this->placa = $placa;
        $this->controle = $controle;
        $this->dano = $dano;
        $this->estado = $estado;
        $this->foto = $foto;
        $this->obs = $obs;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getCodvistoria() {
        return $this->codvistoria;
    }

    function getPlaca() {
        return $this->placa;
    }

    function getControle() {
        return $this->controle;
    }

    function getDano() {
        return $this->dano;
    }

    function getEstado() {
        return $this->estado;
    }

    function getFoto() {
        return $this->foto;
    }

    function getObs() {
        return $this->obs;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setCodvistoria($codvistoria) {
        $this->codvistoria = $codvistoria;
    }

    function setPlaca($placa) {
        $this->placa = $placa;
    }

    function setControle($controle) {
        $this->controle = $controle;
    }

    function setDano($dano) {
        $this->dano = $dano;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setObs($obs) {
        $this->obs = $obs;
    }

    function insere($l) {
        $sql = mysqli_query($l, "INSERT INTO danoavaria (codvistoria, placa, controle, dano, estado, foto, obs) VALUES ('$this->codvistoria', '$this->placa', '$this->controle', '$this->dano', '$this->estado', '$this->foto', '$this->obs')") or die(mysqli_error_());
        echo("<script type='text/javascript'> alert('Dado Enviados com sucesso !!!'); location.href='javascript:history.back()';</script>");
    }

   

    function delete($cod, $l) {
        $sql = mysqli_query($l, "delete from danovistoria where cod ='$cod'") or die(mysqli_error_());
        echo("<script type='text/javascript'> alert('Dado Excluidos com sucesso !!!'); javascript:history.back();</script>");
    }

    function atualiza($cod, $l) {
        $sql = mysqli_query($l, "update danoavaria set codvistoria ='$this->codvistoria', placa ='$this->placa' , controle ='$this->controle', dano='$this->dano', estado='$this->estado', foto ='$this->foto', obs='$this->obs' where cod ='$cod'") or die(mysqli_error_());
        echo("<script type='text/javascript'> alert('Dados Alterados com sucesso !!!'); javascript:history.back();</script>");
    }

    function mostra($cod, $l) {
        $sql = mysqli_query($l, "select * from danovistoria where cod = '$cod'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->codigo = $row['codigo'];
            $this->codvistoria = $row['codvistoria'];
            $this->placa = $row['placa'];
            $this->controle = $row['controle'];
            $this->estado = $row['estado'];
            $this->foto = $row['foto'];
            $this->obs = $obs;
            $this->dano = $row['dano'];
        }
    }

    function mostra2($codvistoria,$dano, $l) {
        $sql = mysqli_query($l, "select * from danoavaria where codvistoria = '$codvistoria' and dano= '$dano'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->codigo = $row['cod'];
            $this->codvistoria = $row['codvistoria'];
            $this->placa = $row['placa'];
            $this->controle = $row['controle'];
            $this->estado = $row['estado'];
            $this->foto = $row['foto'];
            $this->obs = $row['obs'];
            $this->dano = $row['dano'];
        }
    }
  function mostra3($codvistoria,$dano, $l) {
        $sql = mysqli_query($l, "select * from danoavaria where codvistoria = '$codvistoria' and dano LIKE '%".$dano."%'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->codigo[] = $row['cod'];
            $this->codvistoria[] = $row['codvistoria'];
            $this->placa[] = $row['placa'];
            $this->controle[] = $row['controle'];
            $this->estado[] = $row['estado'];
            $this->foto[] = $row['foto'];
            $this->obs[] = $row['obs'];
            $this->dano[] = $row['dano'];
        }
    }
    function mostra4($codvistoria, $l) {
        $sql = mysqli_query($l, "select * from danoavaria where codvistoria = '$codvistoria'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->codigo[] = $row['cod'];
            $this->codvistoria[] = $row['codvistoria'];
            $this->placa[] = $row['placa'];
            $this->controle[] = $row['controle'];
            $this->estado[] = $row['estado'];
            $this->foto[] = $row['foto'];
            $this->obs[] = $row['obs'];
            $this->dano[] = $row['dano'];
        }
    }
    
}

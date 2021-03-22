<?php

class agendaclasse {

    Private $cod;
    Private $data;
    Private $horario;
    Private $codassociado;
    Private $local;
    Private $codfiliacao;
    Private $status;
    Private $codvistoria;
    Private $vistoriador;
    Private $codveiculo;
    Private $placa;
    Private $modelo;
    Private $associado;
    
    function getPlaca() {
        return $this->placa;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getAssociado() {
        return $this->associado;
    }

    function setPlaca($placa) {
        $this->placa = $placa;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setAssociado($associado) {
        $this->associado = $associado;
    }

    
    function __construct($cod, $data, $horario, $codassociado, $local, $codfiliacao, $status, $codvistoria, $vistoriador, $codveiculo) {
        $this->cod = $cod;
        $this->data = $data;
        $this->horario = $horario;
        $this->codassociado = $codassociado;
        $this->local = $local;
        $this->codfiliacao = $codfiliacao;
        $this->status = $status;
        $this->codvistoria = $codvistoria;
        $this->vistoriador = $vistoriador;
        $this->codveiculo = $codveiculo;
    }

    function getCod() {
        return $this->cod;
    }

    function getData() {
        return $this->data;
    }

    function getHorario() {
        return $this->horario;
    }

    function getCodassociado() {
        return $this->codassociado;
    }

    function getLocal() {
        return $this->local;
    }

    function getCodfiliacao() {
        return $this->codfiliacao;
    }

    function getStatus() {
        return $this->status;
    }

    function getCodvistoria() {
        return $this->codvistoria;
    }

    function getVistoria() {
        return $this->vistoria;
    }

    function getCodveiculo() {
        return $this->codveiculo;
    }

    function setCod($cod) {
        $this->cod = $cod;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setHorario($horario) {
        $this->horario = $horario;
    }

    function setCodassociado($codassociado) {
        $this->codassociado = $codassociado;
    }

    function setLocal($local) {
        $this->local = $local;
    }

    function setCodfiliacao($codfiliacao) {
        $this->codfiliacao = $codfiliacao;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setCodvistoria($codvistoria) {
        $this->codvistoria = $codvistoria;
    }

    function setVistoria($vistoria) {
        $this->vistoria = $vistoria;
    }

    function setCodveiculo($codveiculo) {
        $this->codveiculo = $codveiculo;
    }

    function insere($l) {
        $sql = mysqli_query($l, "INSERT INTO agenda (data, horario, codassociado, local, codfiliacao, status, codvistoria, vistoriador, codveiculo ) VALUES ('$this->data' ,  '$this->horario' ,  '$this->codassociado' ,  '$this->local' ,  '$this->codfiliacao' , '$this->status', '$this->codvistoria', '$this->vistoriador','$this->codveiculo' ) ") or die(mysqli_error_());
        //echo("<script type='text/javascript'> alert('Dado Enviados com sucesso !!!'); location.href='menu1.php';</script>");
    }

    function delete($l, $cod) {
        $sql = mysqli_query($l, "delete from agenda where codigo = '$cod' ") or die(mysqli_error_());
        //echo("<script type='text/java$cod ")script'> alert('Dado Enviados com sucesso !!!'); location.href='menu1.php';</script>");
    }

    function mostra1($vistoriador, $l, $data) {
        $sql = mysqli_query($l, "select * from agenda JOIN veiculo ON agenda.codveiculo = veiculo.cod where data = '$data' and vistoriador LIKE '%" . $vistoriador . "%'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {
            $this->cod[] = $row['codigo'];
            $this->data[] = $row['data'];
            $this->horario[] = $row['horario'];
            $this->codassociado[] = $row['codassociado'];
            $this->local[] = $row['local'];
            $this->codfiliado[] = $row['codfiliacao'];
            $this->codvistoria[] = $row['codvistoria'];
            $this->codveiculo[] = $row['codveiculo'];
            $this->status[] = $row['status'];
            $this->vistoriador[] = $row['vistoriador'];
            $this->modelo[] = $row['modelo'];
            $this->placa[] = $row['placa'];
            $this->associado[] = $row['nomeassociado'];
            
            
            
        }
    $row = mysqli_num_rows($sql);
    return $row;
        
        }
  function mostra2($l, $cod) {
        $sql = mysqli_query($l, "select * from agenda where codigo = '$cod'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {
            $this->cod = $row['codigo'];
            $this->data = $row['data'];
            $this->horario = $row['horario'];
            $this->codassociado = $row['codassociado'];
            $this->local = $row['local'];
            $this->codfiliado = $row['codfiliacao'];
            $this->codvistoria = $row['codvistoria'];
            $this->codveiculo = $row['codveiculo'];
            $this->status = $row['status'];
            $this->vistoriador = $row['vistoriador'];
            
            
            
        }
 
        }

}

<?php

class vistoria {

    private $codigo;
    private $tipo;
    private $vitoriador;
    private $data;
    private $status;
    private $controlevistoria;
    private $codassociado;
    private $nomeassociado;
    private $codveiculo;
    private $modelo;
    private $marca;
    private $placa;
    private $tipoveiculo;
    private $local;
    private $codvendedor;

    function __construct($codigo, $tipo, $vitoriador, $data, $status, $controlevistoria, $codassociado, $nomeassociado, $codveiculo, $modelo, $marca, $placa, $tipoveiculo, $local, $codvendedor) {
        $this->codigo = $codigo;
        $this->tipo = $tipo;
        $this->vitoriador = $vitoriador;
        $this->data = $data;
        $this->status = $status;
        $this->controlevistoria = $controlevistoria;
        $this->codassociado = $codassociado;
        $this->nomeassociado = $nomeassociado;
        $this->codveiculo = $codveiculo;
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->placa = $placa;
        $this->tipoveiculo = $tipoveiculo;
        $this->local = $local;
        $this->codvendedor = $codvendedor;
    }

    function getCodvendedor() {
        return $this->codvendedor;
    }

    function setCodvendedor($codvendedor) {
        $this->codvendedor = $codvendedor;
    }

    function getLocal() {
        return $this->local;
    }

    function setLocal($local) {
        $this->local = $local;
    }

    function getTipoveiculo() {
        return $this->tipoveiculo;
    }

    function setTipoveiculo($tipoveiculo) {
        $this->tipoveiculo = $tipoveiculo;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getVitoriador() {
        return $this->vitoriador;
    }

    function getData() {
        return $this->data;
    }

    function getStatus() {
        return $this->status;
    }

    function getControlevistoria() {
        return $this->controlevistoria;
    }

    function getCodassociado() {
        return $this->codassociado;
    }

    function getNomeassociado() {
        return $this->nomeassociado;
    }

    function getCodveiculo() {
        return $this->codveiculo;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getMarca() {
        return $this->marca;
    }

    function getPlaca() {
        return $this->placa;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setVitoriador($vitoriador) {
        $this->vitoriador = $vitoriador;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setControlevistoria($controlevistoria) {
        $this->controlevistoria = $controlevistoria;
    }

    function setCodassociado($codassociado) {
        $this->codassociado = $codassociado;
    }

    function setNomeassociado($nomeassociado) {
        $this->nomeassociado = $nomeassociado;
    }

    function setCodveiculo($codveiculo) {
        $this->codveiculo = $codveiculo;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setPlaca($placa) {
        $this->placa = $placa;
    }

    function insere($l) {
        $sql = mysqli_query($l, "INSERT INTO vistoria (tipo, vistoriador, data, status, controlevistoria, codassociado, nomeassociado, codveiculo, modelo, marca, placa, tipoveiculo,codvendedor) VALUES ( '$this->tipo','$this->vitoriador','$this->data','$this->status','$this->controlevistoria','$this->codassociado','$this->nomeassociado', '$this->codveiculo', '$this->modelo','$this->marca', '$this->placa','$this->tipoveiculo','$this->codvendedor') ") or die(mysqli_error_());
    }

    function deletetodos($cod, $l) {
        $sql = mysqli_query($l, "delete from vistoria where cod ='$cod'") or die(mysqli_error_());
        $sql = mysqli_query($l, "delete from documentos where codvistoria ='$cod'") or die(mysqli_error_());
        $sql = mysqli_query($l, "delete from pneus where codvistoria ='$cod'") or die(mysqli_error_());
        $sql = mysqli_query($l, "delete from danoavaria where codvistoria ='$cod'") or die(mysqli_error_());

        // echo("<script type='text/javascript'> alert('Dado Excluidos com sucesso !!!'); javascript:history.back();</script>");
    }

    function aprova($cod, $l) {
        $sql = mysqli_query($l, "update vistoria set status ='VALIDADO' where cod ='$cod'") or die(mysqli_error_());
        // echo("<script type='text/javascript'> alert('Dado Excluidos com sucesso !!!'); javascript:history.back();</script>");
    }

    function atualiza($cod, $l) {
        $sql = mysqli_query($l, "update danoavaria set codvistoria ='$this->codvistoria', placa ='$this->placa' , controle ='$this->controle', dano='$this->dano', estado='$this->estado', foto ='$this->foto', obs='$this->obs' where cod ='$cod'") or die(mysqli_error_());
        echo("<script type='text/javascript'> alert('Dados Alterados com sucesso !!!'); javascript:history.back();</script>");
    }

    function atualiza2($cod, $l) {
        $sql = mysqli_query($l, "update vistoria set vistoriador ='$this->vitoriador', data='$this->data', status='$this->status', local ='$this->local' where cod ='$cod'") or die(mysqli_error_());
        // echo("<script type='text/javascript'> alert('Dados Alterados com sucesso !!!'); javascript:history.back();</script>");
    }

    function mostra($cod, $l) {
        $sql = mysqli_query($l, "select * from vistoria where cod = '$cod'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->codigo = $row['cod'];
            $this->tipo = $row['tipo'];
            $this->vitoriador = $row['vistoriador'];
            $this->data = $row['data'];
            $this->status = $row['status'];
            $this->controlevistoria = $row['controlevistoria'];
            $this->codassociado = $row['codassociado'];
            $this->nomeassociado = $row['nomeassociado'];
            $this->codveiculo = $row['codveiculo'];
            $this->modelo = $row['modelo'];
            $this->marca = $row['marca'];
            $this->placa = $row['placa'];
            $this->local = $row['local'];
            $this->tipoveiculo = $row['tipoveiculo'];
            $this->codvendedor = $row['codvendedor'];
        }
    }

    function mostra2($status, $l) {
        $sql = mysqli_query($l, "select * from vistoria where status = '$status'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->codigo[] = $row['cod'];
            $this->tipo[] = $row['tipo'];
            $this->vitoriador[] = $row['vistoriador'];
            $this->data[] = $row['data'];
            $this->status[] = $row['status'];
            $this->controlevistoria[] = $row['controlevistoria'];
            $this->codassociado[] = $row['codassociado'];
            $this->nomeassociado[] = $row['nomeassociado'];
            $this->codveiculo[] = $row['codveiculo'];
            $this->modelo[] = $row['modelo'];
            $this->marca[] = $row['marca'];
            $this->placa[] = $row['placa'];
            $this->local[] = $row['local'];
            $this->tipoveiculo[] = $row['tipoveiculo'];
        }
    }

    function mostra3($status, $l,$codvendedor) {
        $sql = mysqli_query($l, "select * from vistoria where status = '$status' and codvendedor = '$codvendedor'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->codigo[] = $row['cod'];
            $this->tipo[] = $row['tipo'];
            $this->vitoriador[] = $row['vistoriador'];
            $this->data[] = $row['data'];
            $this->status[] = $row['status'];
            $this->controlevistoria[] = $row['controlevistoria'];
            $this->codassociado[] = $row['codassociado'];
            $this->nomeassociado[] = $row['nomeassociado'];
            $this->codveiculo[] = $row['codveiculo'];
            $this->modelo[] = $row['modelo'];
            $this->marca[] = $row['marca'];
            $this->placa[] = $row['placa'];
            $this->local[] = $row['local'];
            $this->tipoveiculo[] = $row['tipoveiculo'];
        }
    }
function mostra4($placa, $l) {
        $sql = mysqli_query($l, "select * from vistoria where placa = '$placa'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->codigo = $row['cod'];
            $this->tipo = $row['tipo'];
            $this->vitoriador = $row['vistoriador'];
            $this->data = $row['data'];
            $this->status = $row['status'];
            $this->controlevistoria = $row['controlevistoria'];
            $this->codassociado = $row['codassociado'];
            $this->nomeassociado = $row['nomeassociado'];
            $this->codveiculo = $row['codveiculo'];
            $this->modelo = $row['modelo'];
            $this->marca = $row['marca'];
            $this->placa = $row['placa'];
            $this->local = $row['local'];
            $this->tipoveiculo = $row['tipoveiculo'];
            $this->codvendedor = $row['codvendedor'];
        }
    }
}

?>
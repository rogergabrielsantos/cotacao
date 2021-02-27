<?php

class documentosClasse {

    private $codigo;
    private $codvistoria;
    private $placa;
    private $controle;
    private $documento;
    private $obs;
    private $foto;

    function __construct($codigo, $codvistoria, $placa, $controle, $documento, $obs, $foto) {
        $this->codigo = $codigo;
        $this->codvistoria = $codvistoria;
        $this->placa = $placa;
        $this->controle = $controle;
        $this->documento = $documento;
        $this->obs = $obs;
        $this->foto = $foto;
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

    function getDocumento() {
        return $this->documento;
    }

    function getObs() {
        return $this->obs;
    }

    function getFoto() {
        return $this->foto;
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

    function setDocumento($documento) {
        $this->documento = $documento;
    }

    function setObs($obs) {
        $this->obs = $obs;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function insere($l) {
        $sql = mysqli_query($l, "INSERT INTO documentos (codvistoria, placa, controle, documento,  obs ,foto) VALUES ( '$this->codvistoria', '$this->placa', '$this->controle', '$this->documento', '$this->obs', '$this->foto')") or die(mysqli_error_());
        echo("<script type='text/javascript'> alert('Dado Enviados com sucesso !!!'); location.href='documentos.php';</script>");
    }

    function delete($cod, $l) {
        $sql = mysqli_query($l, "delete from documentos  where cod ='$cod'") or die(mysqli_error_());
        echo("<script type='text/javascript'> alert('Dado Excluidos com sucesso !!!'); location.href='vistoria.php';</script>");
    }

    function atualiza($cod, $l) {
        $sql = mysqli_query($l, "update documentos set codvistoria ='$this->codvistoria', placa ='$this->placa' , controle ='$this->controle', documento='$this->documento',  foto ='$this->foto', obs='$this->obs' where cod ='$cod'") or die(mysqli_error_());
        echo("<script type='text/javascript'> alert('Dados Alterados com sucesso !!!'); location.href='documentos.php';</script>");
    }

    function mostra($cod, $l) {
        $sql = mysqli_query($l, "select * from documentos where cod = '$cod'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->codigo = $row['codigo'];
            $this->codvistoria = $row['codvistoria'];
            $this->placa = $row['placa'];
            $this->controle = $row['controle'];
            $this->documento = $row['documento'];
            $this->foto = $row['foto'];
            $this->obs = $obs;
           
        }
    }
    function mostra2($cod, $l) {
        $sql = mysqli_query($l, "select * from documentos where codvistoria = '$cod'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->codigo[] = $row['cod'];
            $this->codvistoria[] = $row['codvistoria'];
            $this->placa[] = $row['placa'];
            $this->controle[] = $row['controle'];
            $this->documento[] = $row['documento'];
            $this->foto[] = $row['foto'];
            $this->obs[] =  $row['obs'];
           
        }
    }

}

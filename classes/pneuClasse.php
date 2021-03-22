<?php

class pneuClasse {

    private $codigo;
    private $tipo;
    private $codvistoria;
    private $placa;
    private $controle;
    private $marca;
    private $estado;
    private $foto;
    private $obs;

    function __construct($codigo, $tipo, $codvistoria, $placa, $controle, $estado, $foto, $obs, $marca) {
        $this->codigo = $codigo;
        $this->tipo = $tipo;
        $this->codvistoria = $codvistoria;
        $this->placa = $placa;
        $this->controle = $controle;
        $this->estado = $estado;
        $this->foto = $foto;
        $this->obs = $obs;
        $this->marca = $marca;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getTipo() {
        return $this->tipo;
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

    function getEstado() {
        return $this->estado;
    }

    function getFoto() {
        return $this->foto;
    }

    function getObs() {
        return $this->obs;
    }

    function getMarca() {
        return $this->marca;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
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

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setObs($obs) {
        $this->obs = $obs;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function insere($l) {
        $sql = mysqli_query($l, "INSERT INTO pneus (tipo, codvistoria, placa, controle, marca, estado, foto, obs) VALUES ('$this->tipo', '$this->codvistoria', '$this->placa', '$this->controle', '$this->marca', '$this->estado', '$this->foto', '$this->obs')") or die(mysqli_error_());
        echo("<script type='text/javascript'> alert('Dado Enviados com sucesso !!!'); location.href='pneus.php';</script>");
    }

    function delete($cod, $l) {
        $sql = mysqli_query($l, "delete from pneus where cod ='$cod'") or die(mysqli_error_());
        echo("<script type='text/javascript'> alert('Dado Excluidos com sucesso !!!'); location.href='pneus.php';</script>");
    }

    function atualiza($cod, $l) {
        $sql = mysqli_query($l, "update pneus set tipo = '$this->tipo', codvistoria ='$this->codvistoria', placa ='$this->placa' , controle ='$this->controle', marca='$this->marca', estado='$this->estado', foto ='$this->foto', obs='$this->obs' where cod ='$cod'") or die(mysqli_error_());
        echo("<script type='text/javascript'> alert('Dados Alterados com sucesso !!!'); location.href='pneus.php';</script>");
    }

    function mostra($cod, $l) {
        $sql = mysqli_query($l, "select * from pneus where cod = '$cod'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->codigo = $row['codigo'];
            $this->tipo = $row['tipo'];
            $this->codvistoria = $row['codvistoria'];
            $this->placa = $row['placa'];
            $this->controle = $row['controle'];
            $this->estado = $row['estado'];
            $this->foto = $row['foto'];
            $this->obs = $obs;
            $this->marca = $row['marca'];
        }
    }
     function mostra2($codvistoria, $l) {
        $sql = mysqli_query($l, "select * from pneus where codvistoria = '$codvistoria'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->codigo[] = $row['cod'];
            $this->tipo[] = $row['tipo'];
            $this->codvistoria[] = $row['codvistoria'];
            $this->placa[] = $row['placa'];
            $this->controle[] = $row['controle'];
            $this->estado[] = $row['estado'];
            $this->foto[] = $row['foto'];
            $this->obs[] = $row['obs'];
            $this->marca[] = $row['marca'];
        }
    }
    

}

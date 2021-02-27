<?php

class checklistmoto {

    private $codigo;
    private $controlevistoria;
    private $codvistoria;
    private $freiodiscod;
    private $freiodiscot;
    private $rodaliga;
    private $carenagem;
    private $Alarme;
    private $partida;
    private $chave;
    private $bloqueador;

    function __construct($codigo, $controlevistoria, $codvistoria, $freiodiscod, $freiodiscot, $rodaliga, $carenagem, $Alarme, $partida, $chave, $bloqueador) {
        $this->codigo = $codigo;
        $this->controlevistoria = $controlevistoria;
        $this->codvistoria = $codvistoria;
        $this->freiodiscod = $freiodiscod;
        $this->freiodiscot = $freiodiscot;
        $this->rodaliga = $rodaliga;
        $this->carenagem = $carenagem;
        $this->Alarme = $Alarme;
        $this->partida = $partida;
        $this->chave = $chave;
        $this->bloqueador = $bloqueador;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getControlevistoria() {
        return $this->controlevistoria;
    }

    function getCodvistoria() {
        return $this->codvistoria;
    }

    function getFreiodiscod() {
        return $this->freiodiscod;
    }

    function getFreiodiscot() {
        return $this->freiodiscot;
    }

    function getRodaliga() {
        return $this->rodaliga;
    }

    function getCarenagem() {
        return $this->carenagem;
    }

    function getAlarme() {
        return $this->Alarme;
    }

    function getPartida() {
        return $this->partida;
    }

    function getChave() {
        return $this->chave;
    }

    function getBloqueador() {
        return $this->bloqueador;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setControlevistoria($controlevistoria) {
        $this->controlevistoria = $controlevistoria;
    }

    function setCodvistoria($codvistoria) {
        $this->codvistoria = $codvistoria;
    }

    function setFreiodiscod($freiodiscod) {
        $this->freiodiscod = $freiodiscod;
    }

    function setFreiodiscot($freiodiscot) {
        $this->freiodiscot = $freiodiscot;
    }

    function setRodaliga($rodaliga) {
        $this->rodaliga = $rodaliga;
    }

    function setCarenagem($carenagem) {
        $this->carenagem = $carenagem;
    }

    function setAlarme($Alarme) {
        $this->Alarme = $Alarme;
    }

    function setPartida($partida) {
        $this->partida = $partida;
    }

    function setChave($chave) {
        $this->chave = $chave;
    }

    function setBloqueador($bloqueador) {
        $this->bloqueador = $bloqueador;
    }

    function insere($l) {
        $sql = mysqli_query($l, "INSERT INTO checklistmoto (controlevistoria, codvistoria, freiodiscod, freiodiscot, rodaliga, carenagem, alarme, partida, chave, bloqueador) VALUES ('$this->controlevistoria', '$this->codvistoria', '$this->freiodiscod', '$this->freiodiscot', '$this->rodaliga', '$this->carenagem', '$this->Alarme', '$this->partida', '$this->chave', '$this->bloqueador') ") or die(mysqli_error_());
        //echo("<script type='text/javascript'> alert('Dado Enviados com sucesso !!!'); location.href='menu1.php';</script>");
    }

    function delete($cod, $l) {
        $sql = mysqli_query($l, "delete from checklistmoto where cod ='$cod'") or die(mysqli_error_());
        //echo("<script type='text/javascript'> alert('Dado Excluidos com sucesso !!!'); location.href='menu1.php';</script>");
    }

    function atualiza($cod, $l) {
        $sql = mysqli_query($l, "update veiculo set tabelafipe = '$this->tabelafipe' ,  codfipe = '$this->codfipe' ,  cota= '$this->cota' ,  plano= '$this->plano',  tipo= '$this->tipo' ,  portas= '$this->portas',  alienado= '$this->alienado',  marca= '$this->marca' ,  cor= '$this->cor' ,  combustivel= '$this->combustivel' ,  modelo= '$this->modelo',  ano= '$this->ano',  placa= '$this->placa', renavam= '$this->renavam' , chassi= '$this->chassi',  km= '$this->km', potencia= '$this->potencia' , cilindrada= '$this->cilindrada', rastreador= '$this->rastreador', codassociado='$this->codassociado', nomeassociado= '$this->nomeassociado'   where cod ='$cod'") or die(mysqli_error_());
        //echo("<script type='text/javascript'> alert('Dados Alterados com sucesso !!!'); location.href='menu1.php';</script>");
    }

    function atualizachecklist($cod, $l) {
        $sql = mysqli_query($l, "update checklistmoto set freiodiscod = '$this->freiodiscod', freiodiscot = '$this->freiodiscot', rodaliga = '$this->rodaliga',carenagem= '$this->carenagem',alarme= '$this->Alarme',partida= '$this->partida',chave= '$this->chave',bloqueador= '$this->bloqueador' where controlevistoria ='$cod'") or die(mysqli_error_());
    }

    function mostra($cod, $l) {
        $sql = mysqli_query($l, "select * from checklistmoto where cod = '$cod'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->codigo = $row['codigo'];
            $this->controlevistoria = $row['controlevistoria'];
            $this->codvistoria = $row['codvistoria'];
            $this->freiodiscod = $row['freiodiscod'];
            $this->freiodiscot = $row['freiodiscot'];
            $this->rodaliga = $row['rodaliga'];
            $this->alarme = $row['alarme'];
            $this->partida = $row['partida'];
            $this->chave = $row['chave'];
            $this->bloqueador = $row['bloqueador'];
        }
    }

    function mostra2($cod, $l) {
        $sql = mysqli_query($l, "select * from checklistmoto where controlevistoria = '$cod'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->codigo = $row['cod'];
            $this->controlevistoria = $row['controlevistoria'];
            $this->codvistoria = $row['codvistoria'];
            $this->freiodiscod = $row['freiodiscod'];
            $this->freiodiscot = $row['freiodiscot'];
            $this->rodaliga = $row['rodaliga'];
            $this->Alarme = $row['alarme'];
            $this->partida = $row['partida'];
            $this->chave = $row['chave'];
            $this->bloqueador = $row['bloqueador'];
            $this->carenagem = $row['carenagem'];
        }
    }

}

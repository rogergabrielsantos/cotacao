<?php

class assinaturaClasse {

    private $cod;
    private $codvistoria;
    private $codassociado;
    private $codfiliacao;
    private $assinatura;

    function __construct($cod, $codvistoria, $codassociado, $codfiliacao, $assinatura) {
        $this->cod = $cod;
        $this->codvistoria = $codvistoria;
        $this->codassociado = $codassociado;
        $this->codfiliacao = $codfiliacao;
        $this->assinatura = $assinatura;
    }

    function getCod() {
        return $this->cod;
    }

    function getCodvistoria() {
        return $this->codvistoria;
    }

    function getCodassociado() {
        return $this->codassociado;
    }

    function getCodfiliacao() {
        return $this->codfiliacao;
    }

    function getAssinatura() {
        return $this->assinatura;
    }

    function setCod($cod) {
        $this->cod = $cod;
    }

    function setCodvistoria($codvistoria) {
        $this->codvistoria = $codvistoria;
    }

    function setCodassociado($codassociado) {
        $this->codassociado = $codassociado;
    }

    function setCodfiliacao($codfiliacao) {
        $this->codfiliacao = $codfiliacao;
    }

    function setAssinatura($assinatura) {
        $this->assinatura = $assinatura;
    }

    function insere($l) {
        $sql = mysqli_query($l, "INSERT INTO assinatura (codvistoria, codassociado,  codfiliacao, assinatura) VALUES ('$this->codvistoria' ,  '$this->codassociado' ,  '$this->codfiliacao' ,  '$this->assinatura' ) ") or die(mysqli_error_());
        //echo("<script type='text/javascript'> alert('Dado Enviados com sucesso !!!'); location.href='menu1.php';</script>");
    }

    function mostra($codvistoria, $l) {
        $sql = mysqli_query($l, "select * from assinatura where codvistoria = '$codvistoria'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {
            $this->codigo = $row['cod'];
            $this->codlevistoria = $row['codvistoria'];
            $this->codassociado = $row['codassociado'];
            $this->codfiliacao = $row['codfiliacao'];
            $this->assinatura = $row['assinatura'];
        }
    }

    function altera($codvistoria, $l) {
        $sql = mysqli_query($l, "update assinatura set assinatura = '$this->assinatura' where codvistoria = '$codvistoria' ") or die(mysqli_error_());
       
    }

}

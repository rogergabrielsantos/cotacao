<?php

class filiacao {

    private $codigo;
    private $data;
    private $codvendedor;
    private $cidade;
    private $codassociado;
    private $codveiculo;
    private $valoradesao;
    private $taxarastreador;
    private $valormesalidade;
    private $protecao;
    private $diavencimento;
    private $carroreserva;
    private $app;
    private $terceiros;
    private $vidrosnacional;
    private $vidrosimportado;
    private $planotopplus;
    private $nomeassociado;
    private $status;
    private $modelo;
    private $placa;
    private $vendedor;

    function __construct($codigo, $data, $codvendedor, $cidade, $codassociado, $codveiculo, $valoradesao, $taxarastreador, $valormesalidade, $protecao, $diavencimento, $carroreserva, $app, $terceiros, $vidrosnacional, $vidrosimportado, $planotopplus, $nomeassociado, $status) {
        $this->codigo = $codigo;
        $this->data = $data;
        $this->codvendedor = $codvendedor;
        $this->cidade = $cidade;
        $this->codassociado = $codassociado;
        $this->codveiculo = $codveiculo;
        $this->valoradesao = $valoradesao;
        $this->taxarastreador = $taxarastreador;
        $this->valormesalidade = $valormesalidade;
        $this->protecao = $protecao;
        $this->diavencimento = $diavencimento;
        $this->carroreserva = $carroreserva;
        $this->app = $app;
        $this->terceiros = $terceiros;
        $this->vidrosnacional = $vidrosnacional;
        $this->vidrosimportado = $vidrosimportado;
        $this->planotopplus = $planotopplus;
        $this->nomeassociado = $nomeassociado;
        $this->status = $status;
    }

    function getVendedor() {
        return $this->vendedor;
    }

    function setVendedor($vendedor) {
        $this->vendedor = $vendedor;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getPlaca() {
        return $this->placa;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setPlaca($placa) {
        $this->placa = $placa;
    }

    function getStatus() {
        return $this->status;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function getNomeassociado() {
        return $this->nomeassociado;
    }

    function setNomeassociado($nomeassociado) {
        $this->nomeassociado = $nomeassociado;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getData() {
        return $this->data;
    }

    function getCodvendedor() {
        return $this->codvendedor;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getCodassociado() {
        return $this->codassociado;
    }

    function getCodveiculo() {
        return $this->codveiculo;
    }

    function getValoradesao() {
        return $this->valoradesao;
    }

    function getTaxarastreador() {
        return $this->taxarastreador;
    }

    function getValormesalidade() {
        return $this->valormesalidade;
    }

    function getProtecao() {
        return $this->protecao;
    }

    function getDiavencimento() {
        return $this->diavencimento;
    }

    function getCarroreserva() {
        return $this->carroreserva;
    }

    function getApp() {
        return $this->app;
    }

    function getTerceiros() {
        return $this->terceiros;
    }

    function getVidrosnacional() {
        return $this->vidrosnacional;
    }

    function getVidrosimportado() {
        return $this->vidrosimportado;
    }

    function getPlanotopplus() {
        return $this->planotopplus;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setCodvendedor($codvendedor) {
        $this->codvendedor = $codvendedor;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setCodassociado($codassociado) {
        $this->codassociado = $codassociado;
    }

    function setCodveiculo($codveiculo) {
        $this->codveiculo = $codveiculo;
    }

    function setValoradesao($valoradesao) {
        $this->valoradesao = $valoradesao;
    }

    function setTaxarastreador($taxarastreador) {
        $this->taxarastreador = $taxarastreador;
    }

    function setValormesalidade($valormesalidade) {
        $this->valormesalidade = $valormesalidade;
    }

    function setProtecao($protecao) {
        $this->protecao = $protecao;
    }

    function setDiavencimento($diavencimento) {
        $this->diavencimento = $diavencimento;
    }

    function setCarroreserva($carroreserva) {
        $this->carroreserva = $carroreserva;
    }

    function setApp($app) {
        $this->app = $app;
    }

    function setTerceiros($terceiros) {
        $this->terceiros = $terceiros;
    }

    function setVidrosnacional($vidrosnacional) {
        $this->vidrosnacional = $vidrosnacional;
    }

    function setVidrosimportado($vidrosimportado) {
        $this->vidrosimportado = $vidrosimportado;
    }

    function setPlanotopplus($planotopplus) {
        $this->planotopplus = $planotopplus;
    }

    function insere($l) {
        $sql = mysqli_query($l, "INSERT INTO filiacao (data, codvendedor, cidade, codassociado, codveiculo, valoradesao, taxarastreador, valormesalidade, protecao, diavencimento, carroreserva, app, terceiros, vidrosnacional, vidrosimportado, planotopplus,nomeassociado,status) VALUES ('$this->data', '$this->codvendedor', '$this->cidade', '$this->codassociado', '$this->codveiculo', '$this->valoradesao', '$this->taxarastreador', '$this->valormesalidade', '$this->protecao', '$this->diavencimento', '$this->carroreserva', '$this->app', '$this->terceiros', '$this->vidrosnacional', '$this->vidrosimportado', '$this->planotopplus','$this->nomeassociado','$this->status') ") or die(mysqli_error_());
        //echo("<script type='text/javascript'> alert('Dado Enviados com sucesso !!!'); location.href='menu1.php';</script>");
    }

    function delete($cod, $l) {
        $sql = mysqli_query($l, "delete from filiacao where codigo ='$cod'") or die(mysqli_error_());
        //echo("<script type='text/javascript'> alert('Dado Excluidos com sucesso !!!'); location.href='menu1.php';</script>");
    }

    function alterar($l,$cod) {
        $sql = mysqli_query($l, "update filiacao set data = '$this->data', cidade ='$this->cidade', valoradesao='$this->valoradesao', taxarastreador='$this->taxarastreador', valormesalidade='$this->valormesalidade', protecao='$this->protecao', diavencimento='$this->diavencimento', carroreserva='$this->carroreserva', app='$this->app', terceiros='$this->terceiros', vidrosnacional='$this->vidrosnacional', vidrosimportado='$this->vidrosimportado', planotopplus='$this->planotopplus' ") or die(mysqli_error_());
        //echo("<script type='text/javascript'> alert('Dado Enviados com sucesso !!!'); location.href='menu1.php';</script>");
    }

    function atualiza($cod, $l, $status) {
        $sql = mysqli_query($l, "update filiacao set status= '$status' where codigo ='$cod'") or die(mysqli_error_());
        // echo("<script type='text/javascript'> alert('Dados Alterados com sucesso !!!'); location.href='menu1.php';</script>");
    }
    function desativa($cod, $l) {
        $sql = mysqli_query($l, "update filiacao set status= 'Desativado' where codigo ='$cod'") or die(mysqli_error_());
        // echo("<script type='text/javascript'> alert('Dados Alterados com sucesso !!!'); location.href='menu1.php';</script>");
    }

    function mostra($cod, $l) {
        $sql = mysqli_query($l, "select * from filiacao INNER JOIN vendedor ON filiacao.codvendedor= vendedor.cod where codigo = '$cod'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->app = $row['app'];
            $this->carroreserva = $row['carroreserva'];
            $this->cidade = $row['cidade'];
            $this->codassociado = $row['codassociado'];
            $this->codveiculo = $row['codveiculo'];
            $this->codvendedor = $row['codvendedor'];
            $this->data = $row['data'];
            $this->diavencimento = $row['diavencimento'];
            $this->planotopplus = $row['planotopplus'];
            $this->protecao = $row['protecao'];
            $this->taxarastreador = $row['taxarastreador'];
            $this->terceiros = $row['terceiros'];
            $this->valoradesao = $row['valoradesao'];
            $this->valormesalidade = $row['valormesalidade'];
            $this->vidrosimportado = $row['vidrosimportado'];
            $this->vidrosnacional = $row['vidrosnacional'];
            $this->nomeassociado = $row['nomeassociado'];
            $this->vendedor = $row['nome'];
            $this->codigo = $row['codigo'];
        }
    }

    function mostra2($nome, $l) {
        $sql = mysqli_query($l, "select * from filiacao where nome like  '%" . $nome . "%'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->app[] = $row['app'];
            $this->carroreserva[] = $row['carroreserva'];
            $this->cidade[] = $row['cidade'];
            $this->codassociado[] = $row['codassociado'];
            $this->codveiculo[] = $row['codveiculo'];
            $this->codvendedor[] = $row['codvendedor'];
            $this->data[] = $row['data'];
            $this->diavencimento[] = $row['diavencimento'];
            $this->planotopplus[] = $row['planotopplus'];
            $this->protecao[] = $row['protecao'];
            $this->taxarastreador[] = $row['taxarastreador'];
            $this->terceiros[] = $row['terceiros'];
            $this->valoradesao[] = $row['valoradesao'];
            $this->valormesalidade[] = $row['valormesalidade'];
            $this->vidrosimportado[] = $row['vidrosimportado'];
            $this->vidrosnacional[] = $row['vidrosnacional'];
        }
    }

    function mostra3($codveiculo, $l) {
        $sql = mysqli_query($l, "select * from filiacao where codveiculo = '$codveiculo'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->app = $row['app'];
            $this->carroreserva = $row['carroreserva'];
            $this->cidade = $row['cidade'];
            $this->codassociado = $row['codassociado'];
            $this->codveiculo = $row['codveiculo'];
            $this->codvendedor = $row['codvendedor'];
            $this->data = $row['data'];
            $this->diavencimento = $row['diavencimento'];
            $this->planotopplus = $row['planotopplus'];
            $this->protecao = $row['protecao'];
            $this->taxarastreador = $row['taxarastreador'];
            $this->terceiros = $row['terceiros'];
            $this->valoradesao = $row['valoradesao'];
            $this->valormesalidade = $row['valormesalidade'];
            $this->vidrosimportado = $row['vidrosimportado'];
            $this->vidrosnacional = $row['vidrosnacional'];
            $this->codigo = $row['codigo'];
        }
    }

    function mostra4($l) {
        $sql = mysqli_query($l, "select * from filiacao INNER JOIN veiculo ON filiacao.codveiculo= veiculo.cod where status = 'pendente'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->app[] = $row['app'];
            $this->carroreserva[] = $row['carroreserva'];
            $this->cidade[] = $row['cidade'];
            $this->codassociado[] = $row['codassociado'];
            $this->codveiculo[] = $row['codveiculo'];
            $this->codvendedor[] = $row['codvendedor'];
            $this->data[] = $row['data'];
            $this->diavencimento[] = $row['diavencimento'];
            $this->planotopplus[] = $row['planotopplus'];
            $this->protecao[] = $row['protecao'];
            $this->taxarastreador[] = $row['taxarastreador'];
            $this->terceiros[] = $row['terceiros'];
            $this->valoradesao[] = $row['valoradesao'];
            $this->valormesalidade[] = $row['valormesalidade'];
            $this->vidrosimportado[] = $row['vidrosimportado'];
            $this->vidrosnacional[] = $row['vidrosnacional'];
            $this->modelo[] = $row['modelo'];
            $this->placa[] = $row['placa'];
            $this->nomeassociado[] = $row['nomeassociado'];
            $this->codigo[] = $row['codigo'];
        }
    }

    function mostra5($l, $codvendedor) {
        $sql = mysqli_query($l, "select * from filiacao INNER JOIN veiculo ON filiacao.codveiculo= veiculo.cod where status = 'pendente' and filiacao.codvendedor = '$codvendedor' ") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->app[] = $row['app'];
            $this->carroreserva[] = $row['carroreserva'];
            $this->cidade[] = $row['cidade'];
            $this->codassociado[] = $row['codassociado'];
            $this->codveiculo[] = $row['codveiculo'];
            $this->codvendedor[] = $row['codvendedor'];
            $this->data[] = $row['data'];
            $this->diavencimento[] = $row['diavencimento'];
            $this->planotopplus[] = $row['planotopplus'];
            $this->protecao[] = $row['protecao'];
            $this->taxarastreador[] = $row['taxarastreador'];
            $this->terceiros[] = $row['terceiros'];
            $this->valoradesao[] = $row['valoradesao'];
            $this->valormesalidade[] = $row['valormesalidade'];
            $this->vidrosimportado[] = $row['vidrosimportado'];
            $this->vidrosnacional[] = $row['vidrosnacional'];
            $this->modelo[] = $row['modelo'];
            $this->placa[] = $row['placa'];
            $this->nomeassociado[] = $row['nomeassociado'];
            $this->codigo[] = $row['codigo'];
        }
    }
function mostra6($l,$placa) {
        $sql = mysqli_query($l, "select * from filiacao INNER JOIN veiculo ON filiacao.codveiculo= veiculo.cod where placa = '$placa'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->app = $row['app'];
            $this->carroreserva = $row['carroreserva'];
            $this->cidade = $row['cidade'];
            $this->codassociado = $row['codassociado'];
            $this->codveiculo = $row['codveiculo'];
            $this->codvendedor = $row['codvendedor'];
            $this->data = $row['data'];
            $this->diavencimento = $row['diavencimento'];
            $this->planotopplus = $row['planotopplus'];
            $this->protecao = $row['protecao'];
            $this->taxarastreador = $row['taxarastreador'];
            $this->terceiros = $row['terceiros'];
            $this->valoradesao = $row['valoradesao'];
            $this->valormesalidade = $row['valormesalidade'];
            $this->vidrosimportado = $row['vidrosimportado'];
            $this->vidrosnacional = $row['vidrosnacional'];
            $this->modelo = $row['modelo'];
            $this->placa = $row['placa'];
            $this->nomeassociado = $row['nomeassociado'];
            $this->codigo = $row['codigo'];
        
            
        }
    }
}

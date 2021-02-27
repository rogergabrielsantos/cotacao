<?php

class checklistcarro {

    private $codigo;
    private $controlevistoria;
    private $codvistoria;
    private $retrovisoreletrico;
    private $vidroeletrico;
    private $travaeletrica;
    private $frisos;
    private $farolneblina;
    private $rodasliga;
    private $protetorcacamba;
    private $chavecod;
    private $capota;
    private $abs;
    private $tetosolar;
    private $radiocd;
    private $disqueteria;
    private $paineldigital;
    private $cambioautomatico;
    private $direcaohidraulica;
    private $autofalante;
    private $amplificador;
    private $bancocouro;
    private $ar;
    private $antenainterna;
    private $console;
    private $tapete;
    private $tampao;
    private $alarme;
    private $extintor;
    private $airbag;
    private $triangulo;
    private $macaco;

    function __construct($codigo, $controlevistoria, $codvistoria, $retrovisoreletrico, $vidroeletrico, $travaeletrica, $frisos, $farolneblina, $rodasliga, $protetorcacamba, $chavecod, $capota, $abs, $tetosolar, $radiocd, $disqueteria, $paineldigital, $cambioautomatico, $direcaohidraulica, $autofalante, $amplificador, $bancocouro, $ar, $antenainterna, $console, $tapete, $tampao, $alarme, $extintor, $airbag, $triangulo, $macaco) {
        $this->codigo = $codigo;
        $this->controlevistoria = $controlevistoria;
        $this->codvistoria = $codvistoria;
        $this->retrovisoreletrico = $retrovisoreletrico;
        $this->vidroeletrico = $vidroeletrico;
        $this->travaeletrica = $travaeletrica;
        $this->frisos = $frisos;
        $this->farolneblina = $farolneblina;
        $this->rodasliga = $rodasliga;
        $this->protetorcacamba = $protetorcacamba;
        $this->chavecod = $chavecod;
        $this->capota = $capota;
        $this->abs = $abs;
        $this->tetosolar = $tetosolar;
        $this->radiocd = $radiocd;
        $this->disqueteria = $disqueteria;
        $this->paineldigital = $paineldigital;
        $this->cambioautomatico = $cambioautomatico;
        $this->direcaohidraulica = $direcaohidraulica;
        $this->autofalante = $autofalante;
        $this->amplificador = $amplificador;
        $this->bancocouro = $bancocouro;
        $this->ar = $ar;
        $this->antenainterna = $antenainterna;
        $this->console = $console;
        $this->tapete = $tapete;
        $this->tampao = $tampao;
        $this->alarme = $alarme;
        $this->extintor = $extintor;
        $this->airbag = $airbag;
        $this->triangulo = $triangulo;
        $this->macaco = $macaco;
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

    function getRetrovisoreletrico() {
        return $this->retrovisoreletrico;
    }

    function getVidroeletrico() {
        return $this->vidroeletrico;
    }

    function getTravaeletrica() {
        return $this->travaeletrica;
    }

    function getFrisos() {
        return $this->frisos;
    }

    function getFarolneblina() {
        return $this->farolneblina;
    }

    function getRodasliga() {
        return $this->rodasliga;
    }

    function getProtetorcacamba() {
        return $this->protetorcacamba;
    }

    function getChavecod() {
        return $this->chavecod;
    }

    function getCapota() {
        return $this->capota;
    }

    function getAbs() {
        return $this->abs;
    }

    function getTetosolar() {
        return $this->tetosolar;
    }

    function getRadiocd() {
        return $this->radiocd;
    }

    function getDisqueteria() {
        return $this->disqueteria;
    }

    function getPaineldigital() {
        return $this->paineldigital;
    }

    function getCambioautomatico() {
        return $this->cambioautomatico;
    }

    function getDirecaohidraulica() {
        return $this->direcaohidraulica;
    }

    function getAutofalante() {
        return $this->autofalante;
    }

    function getAmplificador() {
        return $this->amplificador;
    }

    function getBancocouro() {
        return $this->bancocouro;
    }

    function getAr() {
        return $this->ar;
    }

    function getAntenainterna() {
        return $this->antenainterna;
    }

    function getConsole() {
        return $this->console;
    }

    function getTapete() {
        return $this->tapete;
    }

    function getTampao() {
        return $this->tampao;
    }

    function getAlarme() {
        return $this->alarme;
    }

    function getExtintor() {
        return $this->extintor;
    }

    function getAirbag() {
        return $this->airbag;
    }

    function getTriangulo() {
        return $this->triangulo;
    }

    function getMacaco() {
        return $this->macaco;
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

    function setRetrovisoreletrico($retrovisoreletrico) {
        $this->retrovisoreletrico = $retrovisoreletrico;
    }

    function setVidroeletrico($vidroeletrico) {
        $this->vidroeletrico = $vidroeletrico;
    }

    function setTravaeletrica($travaeletrica) {
        $this->travaeletrica = $travaeletrica;
    }

    function setFrisos($frisos) {
        $this->frisos = $frisos;
    }

    function setFarolneblina($farolneblina) {
        $this->farolneblina = $farolneblina;
    }

    function setRodasliga($rodasliga) {
        $this->rodasliga = $rodasliga;
    }

    function setProtetorcacamba($protetorcacamba) {
        $this->protetorcacamba = $protetorcacamba;
    }

    function setChavecod($chavecod) {
        $this->chavecod = $chavecod;
    }

    function setCapota($capota) {
        $this->capota = $capota;
    }

    function setAbs($abs) {
        $this->abs = $abs;
    }

    function setTetosolar($tetosolar) {
        $this->tetosolar = $tetosolar;
    }

    function setRadiocd($radiocd) {
        $this->radiocd = $radiocd;
    }

    function setDisqueteria($disqueteria) {
        $this->disqueteria = $disqueteria;
    }

    function setPaineldigital($paineldigital) {
        $this->paineldigital = $paineldigital;
    }

    function setCambioautomatico($cambioautomatico) {
        $this->cambioautomatico = $cambioautomatico;
    }

    function setDirecaohidraulica($direcaohidraulica) {
        $this->direcaohidraulica = $direcaohidraulica;
    }

    function setAutofalante($autofalante) {
        $this->autofalante = $autofalante;
    }

    function setAmplificador($amplificador) {
        $this->amplificador = $amplificador;
    }

    function setBancocouro($bancocouro) {
        $this->bancocouro = $bancocouro;
    }

    function setAr($ar) {
        $this->ar = $ar;
    }

    function setAntenainterna($antenainterna) {
        $this->antenainterna = $antenainterna;
    }

    function setConsole($console) {
        $this->console = $console;
    }

    function setTapete($tapete) {
        $this->tapete = $tapete;
    }

    function setTampao($tampao) {
        $this->tampao = $tampao;
    }

    function setAlarme($alarme) {
        $this->alarme = $alarme;
    }

    function setExtintor($extintor) {
        $this->extintor = $extintor;
    }

    function setAirbag($airbag) {
        $this->airbag = $airbag;
    }

    function setTriangulo($triangulo) {
        $this->triangulo = $triangulo;
    }

    function setMacaco($macaco) {
        $this->macaco = $macaco;
    }

    function insere($l) {
        $sql = mysqli_query($l, "INSERT INTO checklistcarro (controlevistoria, codvistoria, retrovisoreletrico, vidroeletrico, travaeletrica, frisos, farolneblina, rodasliga, protetorcacamba, chavecod, capota, abs, tetosolar, radiocd, disqueteria, paineldigital, cambioautomatico, direcaohidraulica, autofalante, amplificador, bancocouro, ar, antenainterna, console, tapete, tampao, alarme, extintor, airbag, triangulo, macaco) 
         VALUES ('$this->controlevistoria', '$this->controlevistoria', '$this->retrovisoreletrico', '$this->vidroeletrico', '$this->travaeletrica', '$this->frisos', '$this->farolneblina', '$this->rodasliga', '$this->protetorcacamba', '$this->chavecod', '$this->capota', '$this->abs', '$this->tetosolar', '$this->radiocd', '$this->disqueteria', '$this->paineldigital', '$this->cambioautomatico', '$this->direcaohidraulica', '$this->autofalante', '$this->amplificador', '$this->bancocouro', '$this->ar', '$this->antenainterna', '$this->console', '$this->tapete', '$this->tampao', '$this->alarme', '$this->extintor', '$this->airbag', '$this->triangulo', '$this->macaco') ") or die(mysqli_error_());
        //echo("<script type='text/javascript'> alert('Dado Enviados com sucesso !!!'); location.href='menu1.php';</script>");
    }

    function delete($cod, $l) {
        $sql = mysqli_query($l, "delete from checklistcarro where cod ='$cod'") or die(mysqli_error_());
        echo("<script type='text/javascript'> alert('Dado Excluidos com sucesso !!!'); location.href='menu1.php';</script>");
    }

    function atualiza($cod, $l) {
        $sql = mysqli_query($l, "update checklistcarro set vistoriador =$this->vistoriador', data='$this->data', local ='$this->local', status='$this->status', controlevistoria='$this->controlevistoria', codassociado='$this->codassociado', codveiculo=$this->codveiculo', pdfrente=$this->pdfrente', pefrente='$this->pefrente', pdtras='$this->pdtras', petras='$this->petras', estepe='$this->estepe', marcapneuf='$this->marcapneuf', marcapneut='$this->marcapneut', marcaestepe='$this->marcaestepe', obs='$this->obs', retrovisoreletrico='$this->retrovisoreletrico', vidroeletrico='$this->vidroeletrico', travaeletrica='$this->travaeletrica', frisos='$this->frisos', farolneblina='$this->farolneblina', rodasliga='$this->rodasliga', protetorcacamba='$this->protetorcacamba', chavecod='$this->chavecod', capota='$this->capota', abs='$this->abs', tetosolar='$this->tetosolar', radiocd='$this->radiocd', disqueteria='$this->disqueteria', paineldigital='$this->paineldigital', cambioautomatico='$this->cambioautomatico', direcaohidraulica='$this->direcaohidraulica', autofalante='$this->autofalante', amplificador='$this->amplificador', bancocouro='$this->bancocouro', ar='$this->ar', antenainterna='$this->antenainterna', console='$this->console', tapete= '$this->tapete', tampao='$this->tampao', alarme='$this->alarme', extintor='$this->extintor', airbag='$this->airbag', triangulo='$this->triangulo', macaco='$this->macaco' where cod ='$cod'") or die(mysqli_error_());
        echo("<script type='text/javascript'> alert('Dados Alterados com sucesso !!!'); location.href='menu1.php';</script>");
    }

    function atualizachecklist($codigo, $l) {
        $sql = mysqli_query($l, "update checklistcarro set codvistoria = '$this->codvistoria', retrovisoreletrico='$this->retrovisoreletrico', vidroeletrico='$this->vidroeletrico', travaeletrica='$this->travaeletrica', frisos='$this->frisos', farolneblina='$this->farolneblina', rodasliga='$this->rodasliga', protetorcacamba='$this->protetorcacamba', chavecod='$this->chavecod', capota='$this->capota', abs='$this->abs', tetosolar='$this->tetosolar', radiocd='$this->radiocd', disqueteria='$this->disqueteria', paineldigital='$this->paineldigital', cambioautomatico='$this->cambioautomatico', direcaohidraulica='$this->direcaohidraulica', autofalante='$this->autofalante', amplificador='$this->amplificador', bancocouro='$this->bancocouro', ar='$this->ar', antenainterna='$this->antenainterna', console='$this->console', tapete= '$this->tapete', tampao='$this->tampao', alarme='$this->alarme', extintor='$this->extintor', airbag='$this->airbag', triangulo='$this->triangulo', macaco='$this->macaco' where controlevistoria ='$codigo'") or die(mysqli_error_());
        //echo("<script type='text/javascript'> alert('Dados Alterados com sucesso !!!'); location.href='javascript:history.back()';</script>");
    }
    
    

    function mostra($cod, $l) {
        $sql = mysqli_query($l, "select * from checklistcarro where cod = '$cod'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->codigo = $row['cod'];
            $this->controlevistoria = $row['controlevistoria'];
            $this->codvistoria = $row['codvistoria'];
            $this->retrovisoreletrico = $row['retrovisoreletrico'];
            $this->vidroeletrico = $row['vidroeletrico'];
            $this->travaeletrica = $row['travaeletrica'];
            $this->frisos = $row['frisos'];
            $this->farolneblina = $row['farolneblina'];
            $this->rodasliga = $row['rodasliga'];
            $this->protetorcacamba = $row['protetorcacamba'];
            $this->chavecod = $row['chavecod'];
            $this->capota = $row['capota'];
            $this->abs = $row['abs'];
            $this->tetosolar = $row['tetosolar'];
            $this->radiocd = $row['radiocd'];
            $this->disqueteria = $row['disqueteria'];
            $this->paineldigital = $row['paineldigital'];
            $this->cambioautomatico = $row['cambioautomatico'];
            $this->direcaohidraulica = $row['direcaohidraulica'];
            $this->autofalante = $row['autofalante'];
            $this->amplificador = $row['amplificador'];
            $this->bancocouro = $row['bancocouro'];
            $this->ar = $row['ar'];
            $this->antenainterna = $row['antenainterna'];
            $this->console = $row['console'];
            $this->tapete = $row['tapete'];
            $this->tampao = $row['tampao'];
            $this->alarme = $row['alarme'];
            $this->extintor = $row['extintor'];
            $this->airbag = $row['airbag'];
            $this->triangulo = $row['triangulo'];
            $this->macaco = $row['macaco'];
        }
    }

    function mostra2($status, $l) {
        $sql = mysqli_query($l, "select * from vistoriacarro where status = '$status'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->tipo[] = $row['tipo'];
            $this->vistoriador[] = $row['vistoriador'];
            $this->data[] = $row['data'];
            $this->local[] = $row['local'];
            $this->controlevistoria[] = $row['controlevistoria'];
            $this->codassociado[] = $row['codassociado'];
            $this->nomeassociado[] = $row['nomeassociado'];
            $this->codassociado[] = $row['codassociado'];
            $this->marca[] = $row['marca'];
            $this->modelo[] = $row['modelo'];
            $this->placa[] = $row['placa'];
            $this->pefrente[] = $row['pefrente'];
            $this->pdtras[] = $row['pdtras'];
            $this->petras[] = $row['petras'];
            $this->estepe[] = $row['estepe'];
            $this->marcapneuf[] = $row['marcapneuf'];
            $this->marcapneut[] = $row['marcapneut'];
            $this->marcaestepe[] = $row['marcaestepe'];
            $this->obs[] = $row['obs'];
            $this->retrovisoreletrico[] = $row['retrovisoreletrico'];
            $this->vidroeletrico[] = $row['vidroeletrico'];
            $this->travaeletrica[] = $row['travaeletrica'];
            $this->frisos[] = $row['frisos'];
            $this->farolneblina[] = $row['farolneblina'];
            $this->rodasliga[] = $row['rodasliga'];
            $this->protetorcacamba[] = $row['protetorcacamba'];
            $this->chavecod[] = $row['chavecod'];
            $this->capota[] = $row['capota'];
            $this->abs[] = $row['abs'];
            $this->tetosolar[] = $row['tetosolar'];
            $this->radiocd[] = $row['radiocd'];
            $this->disqueteria[] = $row['disqueteria'];
            $this->paineldigital[] = $row['paineldigital'];
            $this->cambioautomatico[] = $row['cambioautomatico'];
            $this->direcaohidraulica[] = $row['direcaohidraulica'];
            $this->autofalante[] = $row['autofalante'];
            $this->amplificador[] = $row['amplificador'];
            $this->bancocouro[] = $row['bancocouro'];
            $this->ar[] = $row['ar'];
            $this->antenainterna[] = $row['antenainterna'];
            $this->console[] = $row['tipo'];
            $this->tapete[] = $row['tapete'];
            $this->tampao[] = $row['tampao'];
            $this->alarme[] = $row['alarme'];
            $this->extintor[] = $row['extintor'];
            $this->airbag[] = $row['airbag'];
            $this->triangulo[] = $row['triangulo'];
            $this->macaco[] = $row['macaco'];
            $this->codigo[] = $row['cod'];
            $this->status[] = $row['status'];
        }
    }

    function mostra3($placa, $l) {
        $sql = mysqli_query($l, "select * from vistoriacarro where placa = '$placa' and status = 'ABERTO'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->tipo = $row['tipo'];
            $this->vistoriador = $row['vistoriador'];
            $this->data = $row['data'];
            $this->local = $row['local'];
            $this->controlevistoria = $row['controlevistoria'];
            $this->codassociado = $row['codassociado'];
            $this->nomeassociado = $row['nomeassociado'];
            $this->codassociado = $row['codassociado'];
            $this->marca = $row['marca'];
            $this->modelo = $row['modelo'];
            $this->placa = $row['placa'];
            $this->pefrente = $row['pefrente'];
            $this->pdtras = $row['pdtras'];
            $this->petras = $row['petras'];
            $this->estepe = $row['estepe'];
            $this->marcapneuf = $row['marcapneuf'];
            $this->marcapneut = $row['marcapneut'];
            $this->marcaestepe = $row['marcaestepe'];
            $this->obs = $row['obs'];
            $this->retrovisoreletrico = $row['retrovisoreletrico'];
            $this->vidroeletrico = $row['vidroeletrico'];
            $this->travaeletrica = $row['travaeletrica'];
            $this->frisos = $row['frisos'];
            $this->farolneblina = $row['farolneblina'];
            $this->rodasliga = $row['rodasliga'];
            $this->protetorcacamba = $row['protetorcacamba'];
            $this->chavecod = $row['chavecod'];
            $this->capota = $row['capota'];
            $this->abs = $row['abs'];
            $this->tetosolar = $row['tetosolar'];
            $this->radiocd = $row['radiocd'];
            $this->disqueteria = $row['disqueteria'];
            $this->paineldigital = $row['paineldigital'];
            $this->cambioautomatico = $row['cambioautomatico'];
            $this->direcaohidraulica = $row['direcaohidraulica'];
            $this->autofalante = $row['autofalante'];
            $this->amplificador = $row['amplificador'];
            $this->bancocouro = $row['bancocouro'];
            $this->ar = $row['ar'];
            $this->antenainterna = $row['antenainterna'];
            $this->console = $row['tipo'];
            $this->tapete = $row['tapete'];
            $this->tampao = $row['tampao'];
            $this->alarme = $row['alarme'];
            $this->extintor = $row['extintor'];
            $this->airbag = $row['airbag'];
            $this->triangulo = $row['triangulo'];
            $this->macaco = $row['macaco'];
            $this->codigo = $row['cod'];
            $this->status = $row['status'];
        }
    }

    function mostra4($cod, $l) {
        $sql = mysqli_query($l, "select * from checklistcarro where controlevistoria = '$cod'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->codigo = $row['cod'];
            $this->controlevistoria = $row['controlevistoria'];
            $this->codvistoria = $row['codvistoria'];
            $this->retrovisoreletrico = $row['retrovisoreletrico'];
            $this->vidroeletrico = $row['vidroeletrico'];
            $this->travaeletrica = $row['travaeletrica'];
            $this->frisos = $row['frisos'];
            $this->farolneblina = $row['farolneblina'];
            $this->rodasliga = $row['rodasliga'];
            $this->protetorcacamba = $row['protetorcacamba'];
            $this->chavecod = $row['chavecod'];
            $this->capota = $row['capota'];
            $this->abs = $row['abs'];
            $this->tetosolar = $row['tetosolar'];
            $this->radiocd = $row['radiocd'];
            $this->disqueteria = $row['disqueteria'];
            $this->paineldigital = $row['paineldigital'];
            $this->cambioautomatico = $row['cambioautomatico'];
            $this->direcaohidraulica = $row['direcaohidraulica'];
            $this->autofalante = $row['autofalante'];
            $this->amplificador = $row['amplificador'];
            $this->bancocouro = $row['bancocouro'];
            $this->ar = $row['ar'];
            $this->antenainterna = $row['antenainterna'];
            $this->console = $row['console'];
            $this->tapete = $row['tapete'];
            $this->tampao = $row['tampao'];
            $this->alarme = $row['alarme'];
            $this->extintor = $row['extintor'];
            $this->airbag = $row['airbag'];
            $this->triangulo = $row['triangulo'];
            $this->macaco = $row['macaco'];
        }
    }

}

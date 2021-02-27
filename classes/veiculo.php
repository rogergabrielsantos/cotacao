<?php

class veiculo {

    private $codigo;
    private $tabelafipe;
    private $codfipe;
    private $cota;
    private $plano;
    private $tipo;
    private $portas;
    private $alienado;
    private $marca;
    private $cor;
    private $combustivel;
    private $modelo;
    private $ano;
    private $placa;
    private $renavam;
    private $chassi;
    private $km;
    private $potencia;
    private $cilindrada;
    private $rastreador;
    private $codassociado;
    private $nomeassociado;
    private $codvendedor;
    private $controlevistoria;
    private $tipovistoria;
    private $data;
    
    function getControlevistoria() {
        return $this->controlevistoria;
    }

    function getTipovistoria() {
        return $this->tipovistoria;
    }

    function getData() {
        return $this->data;
    }

        
    
    

    function __construct($codigo, $tabelafipe, $codfipe, $cota, $plano, $tipo, $portas, $alienado, $marca, $cor, $combustivel, $modelo, $ano, $placa, $renavam, $chassi, $km, $potencia, $cilindrada, $rastreador, $codassociado, $nomeassociado, $codvendedor) {
        $this->codigo = $codigo;
        $this->tabelafipe = $tabelafipe;
        $this->codfipe = $codfipe;
        $this->cota = $cota;
        $this->plano = $plano;
        $this->tipo = $tipo;
        $this->portas = $portas;
        $this->alienado = $alienado;
        $this->marca = $marca;
        $this->cor = $cor;
        $this->combustivel = $combustivel;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->placa = $placa;
        $this->renavam = $renavam;
        $this->chassi = $chassi;
        $this->km = $km;
        $this->potencia = $potencia;
        $this->cilindrada = $cilindrada;
        $this->rastreador = $rastreador;
        $this->codassociado = $codassociado;
        $this->nomeassociado = $nomeassociado;
        $this->codvendedor = $codvendedor;
    }

    function getCodvendedor() {
        return $this->codvendedor;
    }

    function setCodvendedor($codvendedor) {
        $this->codvendedor = $codvendedor;
    }

    function setNomeassociado($nomeassociado) {
        $this->nomeassociado = $nomeassociado;
    }

    function getNomeassociado() {
        return $this->nomeassociado;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function getTabelafipe() {
        return $this->tabelafipe;
    }

    function getCodfipe() {
        return $this->codfipe;
    }

    function getCota() {
        return $this->cota;
    }

    function getPlano() {
        return $this->plano;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getPortas() {
        return $this->portas;
    }

    function getAlienado() {
        return $this->alienado;
    }

    function getMarca() {
        return $this->marca;
    }

    function getCor() {
        return $this->cor;
    }

    function getCombustivel() {
        return $this->combustivel;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getAno() {
        return $this->ano;
    }

    function getPlaca() {
        return $this->placa;
    }

    function getRenavam() {
        return $this->renavam;
    }

    function getChassi() {
        return $this->chassi;
    }

    function getKm() {
        return $this->km;
    }

    function getPotencia() {
        return $this->potencia;
    }

    function getCilindrada() {
        return $this->cilindrada;
    }

    function getRastreador() {
        return $this->rastreador;
    }

    function getCodassociado() {
        return $this->codassociado;
    }

    function setTabelafipe($tabelafipe) {
        $this->tabelafipe = $tabelafipe;
    }

    function setCodfipe($codfipe) {
        $this->codfipe = $codfipe;
    }

    function setCota($cota) {
        $this->cota = $cota;
    }

    function setPlano($plano) {
        $this->plano = $plano;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setPortas($portas) {
        $this->portas = $portas;
    }

    function setAlienado($alienado) {
        $this->alienado = $alienado;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

    function setCombustivel($combustivel) {
        $this->combustivel = $combustivel;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }

    function setPlaca($placa) {
        $this->placa = $placa;
    }

    function setRenavam($renavam) {
        $this->renavam = $renavam;
    }

    function setChassi($chassi) {
        $this->chassi = $chassi;
    }

    function setKm($km) {
        $this->km = $km;
    }

    function setPotencia($potencia) {
        $this->potencia = $potencia;
    }

    function setCilindrada($cilindrada) {
        $this->cilindrada = $cilindrada;
    }

    function setRastreador($rastreador) {
        $this->rastreador = $rastreador;
    }

    function setCodassociado($codassociado) {
        $this->codassociado = $codassociado;
    }

    function insere($l) {
        $sql = mysqli_query($l, "INSERT INTO veiculo ( tabelafipe ,  codfipe ,  cota ,  plano ,  tipo ,  portas ,  alienado ,  marca ,  cor ,  combustivel ,  modelo ,  ano ,  placa ,  renavam ,  chassi ,  km ,  potencia ,  cilindrada ,  rastreador ,  codassociado, nomeassociado,codvendedor ) VALUES ('$this->tabelafipe' ,  '$this->codfipe' ,  '$this->cota' ,  '$this->plano' ,  '$this->tipo' , '$this->portas' ,  '$this->alienado' , '$this->marca' , '$this->cor' ,  '$this->combustivel' , '$this->modelo' , '$this->ano' , '$this->placa' ,   '$this->renavam' , '$this->chassi' , '$this->km' , '$this->potencia' , '$this->cilindrada' , '$this->rastreador' , '$this->codassociado','$this->nomeassociado','$this->codvendedor') ") or die(mysqli_error_());
        //echo("<script type='text/javascript'> alert('Dado Enviados com sucesso !!!'); location.href='menu1.php';</script>");
    }

    function insereFiliado($l, $cod, $status) {

        $sql = mysqli_query($l, " update veiculo set filiado= '$status' where cod= '$cod'") or die(mysqli_error_());
    }

    function excluirFiliado($l, $codveiculo) {

        $sql = mysqli_query($l, " update veiculo set filiado= '' where cod= '$codveiculo'") or die(mysqli_error_());
    }

    function delete($cod, $l) {
        $sql = mysqli_query($l, "delete from veiculo where cod ='$cod'") or die(mysqli_error_());
        //echo("<script type='text/javascript'> alert('Dado Excluidos com sucesso !!!'); location.href='menu1.php';</script>");
    }

    function atualiza($cod, $l) {
        $sql = mysqli_query($l, "update veiculo set tabelafipe = '$this->tabelafipe' ,  codfipe = '$this->codfipe' ,  cota= '$this->cota' ,  plano= '$this->plano',  tipo= '$this->tipo' ,  portas= '$this->portas',  alienado= '$this->alienado',  marca= '$this->marca' ,  cor= '$this->cor' ,  combustivel= '$this->combustivel' ,  modelo= '$this->modelo',  ano= '$this->ano',  placa= '$this->placa', renavam= '$this->renavam' , chassi= '$this->chassi',  km= '$this->km', potencia= '$this->potencia' , cilindrada= '$this->cilindrada', rastreador= '$this->rastreador', codassociado='$this->codassociado', nomeassociado= '$this->nomeassociado'   where cod ='$cod'") or die(mysqli_error_());
        //echo("<script type='text/javascript'> alert('Dados Alterados com sucesso !!!'); location.href='menu1.php';</script>");
    }
    
     function desativa($cod, $l) {
        $sql = mysqli_query($l, "update veiculo set filiado= 'Desativado' where cod ='$cod'") or die(mysqli_error_());
        // echo("<script type='text/javascript'> alert('Dados Alterados com sucesso !!!'); location.href='menu1.php';</script>");
    }

    function mostra($cod, $l) {
        $sql = mysqli_query($l, "select * from veiculo where cod = '$cod'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->alienado = $row['alienado'];
            $this->ano = $row['ano'];
            $this->chassi = $row['chassi'];
            $this->cilindrada = $row['cilindrada'];
            $this->codassociado = $row['codassociado'];
            $this->nomeassociado = $row['nomeassociado'];
            $this->codfipe = $row['codfipe'];
            $this->combustivel = $row['combustivel'];
            $this->cor = $row['cor'];
            $this->cota = $row['cota'];
            $this->km = $row['km'];
            $this->marca = $row['marca'];
            $this->modelo = $row['modelo'];
            $this->placa = $row['placa'];
            $this->plano = $row['plano'];
            $this->portas = $row['portas'];
            $this->potencia = $row['potencia'];
            $this->rastreador = $row['rastreador'];
            $this->renavam = $row['renavam'];
            $this->tabelafipe = $row['tabelafipe'];
            $this->tipo = $row['tipo'];
            $this->codigo = $row['cod'];
            $this->codvendedor = $row['codvendedor'];
        }
    }

    function mostra2($marca, $l) {
        $sql = mysqli_query($l, "select * from veiculo where marca LIKE '%" . $marca . "%'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {
            $this->codigo[] = $row['cod'];
            $this->alienado[] = $row['alienado'];
            $this->ano[] = $row['ano'];
            $this->chassi[] = $row['chassi'];
            $this->cilindrada[] = $row['cilindrada'];
            $this->codassociado[] = $row['codassociado'];
            $this->nomeassociado[] = $row['nomeassociado'];
            $this->codfipe[] = $row['codfipe'];
            $this->combustivel[] = $row['combustivel'];
            $this->cor[] = $row['cor'];
            $this->cota[] = $row['cota'];
            $this->km[] = $row['km'];
            $this->marca[] = $row['marca'];
            $this->modelo[] = $row['modelo'];
            $this->placa[] = $row['placa'];
            $this->plano[] = $row['plano'];
            $this->portas[] = $row['portas'];
            $this->potencia[] = $row['potencia'];
            $this->rastreador[] = $row['rastreador'];
            $this->renavam[] = $row['renavam'];
            $this->tabelafipe[] = $row['tabelafipe'];
            $this->tipo[] = $row['tipo'];
        }
    }

    function mostra3($nome, $l) {
        $sql = mysqli_query($l, "select * from veiculo where nomeassociado LIKE '%" . $nome . "%' and filiado =''") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {
            $this->codigo[] = $row['cod'];
            $this->alienado[] = $row['alienado'];
            $this->ano[] = $row['ano'];
            $this->chassi[] = $row['chassi'];
            $this->cilindrada[] = $row['cilindrada'];
            $this->codassociado[] = $row['codassociado'];
            $this->nomeassociado[] = $row['nomeassociado'];
            $this->codfipe[] = $row['codfipe'];
            $this->combustivel[] = $row['combustivel'];
            $this->cor[] = $row['cor'];
            $this->cota[] = $row['cota'];
            $this->km[] = $row['km'];
            $this->marca[] = $row['marca'];
            $this->modelo[] = $row['modelo'];
            $this->placa[] = $row['placa'];
            $this->plano[] = $row['plano'];
            $this->portas[] = $row['portas'];
            $this->potencia[] = $row['potencia'];
            $this->rastreador[] = $row['rastreador'];
            $this->renavam[] = $row['renavam'];
            $this->tabelafipe[] = $row['tabelafipe'];
            $this->tipo[] = $row['tipo'];
        }
    }

    function mostra4($nome, $l) {
        $sql = mysqli_query($l, "select * from veiculo where nomeassociado LIKE '%" . $nome . "%' and filiado ='SIM'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {
            $this->codigo[] = $row['cod'];
            $this->alienado[] = $row['alienado'];
            $this->ano[] = $row['ano'];
            $this->chassi[] = $row['chassi'];
            $this->cilindrada[] = $row['cilindrada'];
            $this->codassociado[] = $row['codassociado'];
            $this->nomeassociado[] = $row['nomeassociado'];
            $this->codfipe[] = $row['codfipe'];
            $this->combustivel[] = $row['combustivel'];
            $this->cor[] = $row['cor'];
            $this->cota[] = $row['cota'];
            $this->km[] = $row['km'];
            $this->marca[] = $row['marca'];
            $this->modelo[] = $row['modelo'];
            $this->placa[] = $row['placa'];
            $this->plano[] = $row['plano'];
            $this->portas[] = $row['portas'];
            $this->potencia[] = $row['potencia'];
            $this->rastreador[] = $row['rastreador'];
            $this->renavam[] = $row['renavam'];
            $this->tabelafipe[] = $row['tabelafipe'];
            $this->tipo[] = $row['tipo'];
        }
    }

    function mostra5($placa, $l) {
        $sql = mysqli_query($l, "select * from veiculo where placa = '$placa'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->alienado = $row['alienado'];
            $this->ano = $row['ano'];
            $this->chassi = $row['chassi'];
            $this->cilindrada = $row['cilindrada'];
            $this->codassociado = $row['codassociado'];
            $this->nomeassociado = $row['nomeassociado'];
            $this->codfipe = $row['codfipe'];
            $this->combustivel = $row['combustivel'];
            $this->cor = $row['cor'];
            $this->cota = $row['cota'];
            $this->km = $row['km'];
            $this->marca = $row['marca'];
            $this->modelo = $row['modelo'];
            $this->placa = $row['placa'];
            $this->plano = $row['plano'];
            $this->portas = $row['portas'];
            $this->potencia = $row['potencia'];
            $this->rastreador = $row['rastreador'];
            $this->renavam = $row['renavam'];
            $this->tabelafipe = $row['tabelafipe'];
            $this->tipo = $row['tipo'];
            $this->codigo = $row['cod'];
        }
    }

    function mostra6($marca, $l, $codvendedor) {
        $sql = mysqli_query($l, "select * from veiculo where marca LIKE '%" . $marca . "%' and codvendedor ='$codvendedor'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {
            $this->codigo[] = $row['cod'];
            $this->alienado[] = $row['alienado'];
            $this->ano[] = $row['ano'];
            $this->chassi[] = $row['chassi'];
            $this->cilindrada[] = $row['cilindrada'];
            $this->codassociado[] = $row['codassociado'];
            $this->nomeassociado[] = $row['nomeassociado'];
            $this->codfipe[] = $row['codfipe'];
            $this->combustivel[] = $row['combustivel'];
            $this->cor[] = $row['cor'];
            $this->cota[] = $row['cota'];
            $this->km[] = $row['km'];
            $this->marca[] = $row['marca'];
            $this->modelo[] = $row['modelo'];
            $this->placa[] = $row['placa'];
            $this->plano[] = $row['plano'];
            $this->portas[] = $row['portas'];
            $this->potencia[] = $row['potencia'];
            $this->rastreador[] = $row['rastreador'];
            $this->renavam[] = $row['renavam'];
            $this->tabelafipe[] = $row['tabelafipe'];
            $this->tipo[] = $row['tipo'];
        }
    }

    function mostra7($nome, $l, $codvendedor) {
        $sql = mysqli_query($l, "select * from veiculo where nomeassociado LIKE '%" . $nome . "%' and filiado ='' and codvendedor ='$codvendedor'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {
            $this->codigo[] = $row['cod'];
            $this->alienado[] = $row['alienado'];
            $this->ano[] = $row['ano'];
            $this->chassi[] = $row['chassi'];
            $this->cilindrada[] = $row['cilindrada'];
            $this->codassociado[] = $row['codassociado'];
            $this->nomeassociado[] = $row['nomeassociado'];
            $this->codfipe[] = $row['codfipe'];
            $this->combustivel[] = $row['combustivel'];
            $this->cor[] = $row['cor'];
            $this->cota[] = $row['cota'];
            $this->km[] = $row['km'];
            $this->marca[] = $row['marca'];
            $this->modelo[] = $row['modelo'];
            $this->placa[] = $row['placa'];
            $this->plano[] = $row['plano'];
            $this->portas[] = $row['portas'];
            $this->potencia[] = $row['potencia'];
            $this->rastreador[] = $row['rastreador'];
            $this->renavam[] = $row['renavam'];
            $this->tabelafipe[] = $row['tabelafipe'];
            $this->tipo[] = $row['tipo'];
        }
    }

    function mostra8($nome, $l, $codvendedor) {
        $sql = mysqli_query($l, "select * from veiculo where nomeassociado LIKE '%" . $nome . "%' and filiado ='SIM' and codvendedor ='$codvendedor'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {
            $this->codigo[] = $row['cod'];
            $this->alienado[] = $row['alienado'];
            $this->ano[] = $row['ano'];
            $this->chassi[] = $row['chassi'];
            $this->cilindrada[] = $row['cilindrada'];
            $this->codassociado[] = $row['codassociado'];
            $this->nomeassociado[] = $row['nomeassociado'];
            $this->codfipe[] = $row['codfipe'];
            $this->combustivel[] = $row['combustivel'];
            $this->cor[] = $row['cor'];
            $this->cota[] = $row['cota'];
            $this->km[] = $row['km'];
            $this->marca[] = $row['marca'];
            $this->modelo[] = $row['modelo'];
            $this->placa[] = $row['placa'];
            $this->plano[] = $row['plano'];
            $this->portas[] = $row['portas'];
            $this->potencia[] = $row['potencia'];
            $this->rastreador[] = $row['rastreador'];
            $this->renavam[] = $row['renavam'];
            $this->tabelafipe[] = $row['tabelafipe'];
            $this->tipo[] = $row['tipo'];
        }
    }

    function mostra9($nome, $l, $codvendedor) {
        $sql = mysqli_query($l, "select * from veiculo INNER JOIN vistoria ON veiculo.placa = vistoria.placa where veiculo.nomeassociado LIKE '%" . $nome . "%' and veiculo.filiado = 'SIM' and vistoria.status = 'VALIDADO' AND veiculo.codvendedor = '$codvendedor'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {
            $this->codigo[] = $row['cod'];
            $this->alienado[] = $row['alienado'];
            $this->ano[] = $row['ano'];
            $this->chassi[] = $row['chassi'];
            $this->cilindrada[] = $row['cilindrada'];
            $this->codassociado[] = $row['codassociado'];
            $this->nomeassociado[] = $row['nomeassociado'];
            $this->codfipe[] = $row['codfipe'];
            $this->combustivel[] = $row['combustivel'];
            $this->cor[] = $row['cor'];
            $this->cota[] = $row['cota'];
            $this->km[] = $row['km'];
            $this->marca[] = $row['marca'];
            $this->modelo[] = $row['modelo'];
            $this->placa[] = $row['placa'];
            $this->plano[] = $row['plano'];
            $this->portas[] = $row['portas'];
            $this->potencia[] = $row['potencia'];
            $this->rastreador[] = $row['rastreador'];
            $this->renavam[] = $row['renavam'];
            $this->tabelafipe[] = $row['tabelafipe'];
            $this->tipo[] = $row['tipo'];
            $this->controlevistoria[] = $row['controlevistoria'];
            $this->data[] = $row['data'];
            $this->tipovistoria[] = $row['tipo'];
        }
    }
    function mostra10($nome, $l) {
        $sql = mysqli_query($l, "select * from veiculo INNER JOIN vistoria ON veiculo.placa = vistoria.placa where veiculo.nomeassociado LIKE '%" . $nome . "%' and veiculo.filiado = 'SIM' and vistoria.status = 'VALIDADO'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {
            $this->codigo[] = $row['cod'];
            $this->alienado[] = $row['alienado'];
            $this->ano[] = $row['ano'];
            $this->chassi[] = $row['chassi'];
            $this->cilindrada[] = $row['cilindrada'];
            $this->codassociado[] = $row['codassociado'];
            $this->nomeassociado[] = $row['nomeassociado'];
            $this->codfipe[] = $row['codfipe'];
            $this->combustivel[] = $row['combustivel'];
            $this->cor[] = $row['cor'];
            $this->cota[] = $row['cota'];
            $this->km[] = $row['km'];
            $this->marca[] = $row['marca'];
            $this->modelo[] = $row['modelo'];
            $this->placa[] = $row['placa'];
            $this->plano[] = $row['plano'];
            $this->portas[] = $row['portas'];
            $this->potencia[] = $row['potencia'];
            $this->rastreador[] = $row['rastreador'];
            $this->renavam[] = $row['renavam'];
            $this->tabelafipe[] = $row['tabelafipe'];
            $this->tipo[] = $row['tipo'];
            $this->controlevistoria[] = $row['controlevistoria'];
            $this->data[] = $row['data'];
            $this->tipovistoria[] = $row['tipo'];
        }
    }
}

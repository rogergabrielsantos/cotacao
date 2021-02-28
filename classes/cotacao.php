<?php

class cotacao {

    private $codigo;
    private $nome;
    private $telefone;
    private $telefone2;
    private $email;
    private $placa;
    private $modelo;
    private $ano;
    private $fipe;
    private $situacao;
    private $data;
    private $codvendedor;
    private $plano;
    private $valor;
    private $carro;
    private $app;
    private $protecao;
    private $vidrosn;
    private $vidrosi;
    private $roubo;
    private $assistencia;

    function __construct($codigo, $nome, $telefone, $telefone2, $email, $placa, $modelo, $ano, $fipe, $situacao, $data, $codvendedor, $plano, $valor, $carro, $app, $protecao, $vidrosn, $vidrosi, $roubo, $assistencia) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->telefone2 = $telefone2;
        $this->email = $email;
        $this->placa = $placa;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->fipe = $fipe;
        $this->situacao = $situacao;
        $this->data = $data;
        $this->codvendedor = $codvendedor;
        $this->plano = $plano;
        $this->valor = $valor;
        $this->carro = $carro;
        $this->app = $app;
        $this->protecao = $protecao;
        $this->vidrosn = $vidrosn;
        $this->vidrosi = $vidrosi;
        $this->roubo = $roubo;
        $this->assistencia = $assistencia;
    }

    function getPlano() {
        return $this->plano;
    }

    function getValor() {
        return $this->valor;
    }

    function getCarro() {
        return $this->carro;
    }

    function getApp() {
        return $this->app;
    }

    function getProtecao() {
        return $this->protecao;
    }

    function getVidrosn() {
        return $this->vidrosn;
    }

    function getVidrosi() {
        return $this->vidrosi;
    }

    function getRoubo() {
        return $this->roubo;
    }

    function getAssistencia() {
        return $this->assistencia;
    }

    function setPlano($plano) {
        $this->plano = $plano;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setCarro($carro) {
        $this->carro = $carro;
    }

    function setApp($app) {
        $this->app = $app;
    }

    function setProtecao($protecao) {
        $this->protecao = $protecao;
    }

    function setVidrosn($vidrosn) {
        $this->vidrosn = $vidrosn;
    }

    function setVidrosi($vidrosi) {
        $this->vidrosi = $vidrosi;
    }

    function setRoubo($roubo) {
        $this->roubo = $roubo;
    }

    function setAssistencia($assistencia) {
        $this->assistencia = $assistencia;
    }

    function getCodvendedor() {
        return $this->codvendedor;
    }

    function setCodvendedor($codvendedor) {
        $this->codvendedor = $codvendedor;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getNome() {
        return $this->nome;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getTelefone2() {
        return $this->telefone2;
    }

    function getEmail() {
        return $this->email;
    }

    function getPlaca() {
        return $this->placa;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getAno() {
        return $this->ano;
    }

    function getFipe() {
        return $this->fipe;
    }

    function getSituacao() {
        return $this->situacao;
    }

    function getData() {
        return $this->data;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setTelefone2($telefone2) {
        $this->telefone2 = $telefone2;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPlaca($placa) {
        $this->placa = $placa;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }

    function setFipe($fipe) {
        $this->fipe = $fipe;
    }

    function setSituacao($situacao) {
        $this->situacao = $situacao;
    }

    function setData($data) {
        $this->data = $data;
    }

    function insere($l) {
        $sql = mysqli_query($l, "INSERT INTO cotacao (nome, telefone, telefone2, email, placa, modelo, ano, fipe, situacao, data,codvendedor,plano,valor,carro,app,protecao,vidrosn,vidrosi,roubo,assistencia) VALUES ('$this->nome', '$this->telefone', '$this->telefone2', '$this->email', '$this->placa', '$this->modelo', '$this->ano', '$this->fipe', '$this->situacao', '$this->data','$this->codvendedor','$this->plano','$this->valor','$this->carro','$this->app','$this->protecao','$this->vidrosn','$this->vidrosi','$this->roubo','$this->assistencia')") or die(mysqli_error_());
        //echo("<script type='text/javascript'> alert('Dado Enviados com sucesso !!!'); location.href='menu1.php';</script>");
    }

    function delete($cod, $l) {
        $sql = mysqli_query($l, "delete from cotacao where cod ='$cod'") or die(mysqli_error_());
        //echo("<script type='text/javascript'> alert('Dado Excluidos com sucesso !!!'); location.href='menu1.php';</script>");
    }

    function atualiza($cod, $l) {
        $sql = mysqli_query($l, "update cotacao set nome = '$this->nome',telefone ='$this->telefone', telefone2='$this->telefone2' , email ='$this->email', placa='$this->placa', modelo='$this->modelo', ano='$this->ano',fipe = '$this->fipe',plano='$this->plano',valor= '$this->valor',carro = '$this->carro',ap p= '$this->app',protecao = '$this->protecao',vrodrosn= '$this->vidrosn',vodrosi ='$this->vidrosi',roubo ='$this->roubo',assistencia='$this->assistencia'  where cod ='$cod'");
        //echo("<script type='text/javascript'> alert('Dados Alterados com sucesso !!!'); location.href='menu1.php';</script>");
    }
    
    function aprova($cod, $l) {
        $sql = mysqli_query($l, "update cotacao set situacao ='Aprovada'  where cod ='$cod'") or die(mysqli_error_());
        //echo("<script type='text/javascript'> alert('Dados Alterados com sucesso !!!'); location.href='menu1.php';</script>");
    }

    function mostra($cod, $l) {
        $sql = mysqli_query($l, "select * from cotacao where cod = '$cod'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

          $this->nome = $row['nome'];
            $this->telefone = $row['telefone'];
            $this->telefone2 = $row['telefone2'];
            $this->email = $row['email'];
            $this->placa = $row['placa'];
            $this->modelo = $row['modelo'];
            $this->ano = $row['ano'];
            $this->fipe = $row['fipe'];
            $this->situacao = $row['situacao'];
            $this->data = $row['data'];
            $this->codvendedor = $row['codvendedor'];
            $this->codigo = $row['cod'];
            $this->plano = $row['plano'];
            $this->valor = $row['valor'];
            $this->carro = $row['carro'];
            $this->app = $row['app'];
            $this->protecao = $row['protecao'];
            $this->vidrosn = $row['vidrosn'];
            $this->vidrosi = $row['vidrosi'];
            $this->roubo = $row['roubo'];
            $this->assistencia = $row['assistencia'];
        }
    }

    function mostra2($nome, $l) {
        $sql = mysqli_query($l, "select * from cotacao where nome LIKE '%" . $nome . "%' situacao <>'Aprovada'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->nome[] = $row['nome'];
            $this->telefone[] = $row['telefone'];
            $this->telefone2[] = $row['telefone2'];
            $this->email[] = $row['email'];
            $this->placa[] = $row['placa'];
            $this->modelo[] = $row['modelo'];
            $this->ano[] = $row['ano'];
            $this->fipe[] = $row['fipe'];
            $this->situacao[] = $row['situacao'];
            $this->data[] = $row['data'];
            $this->codvendedor[] = $row['codvendedor'];
            $this->codigo[] = $row['cod'];
            $this->plano[] = $row['plano'];
            $this->valor[] = $row['valor'];
            $this->carro[] = $row['carro'];
            $this->app[] = $row['app'];
            $this->protecao[] = $row['protecao'];
            $this->vidrosn[] = $row['vidrosn'];
            $this->vidrosi[] = $row['vidrosi'];
            $this->roubo[] = $row['roubo'];
            $this->assistencia[] = $row['assistencia'];
            
        }
    }

    function mostra3($nome, $l, $codvendedor) {
        $sql = mysqli_query($l, "select * from cotacao where nome LIKE '%" . $nome . "%' and codvendedor='$codvendedor' and situacao <>'Aprovada'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

           $this->nome[] = $row['nome'];
            $this->telefone[] = $row['telefone'];
            $this->telefone2[] = $row['telefone2'];
            $this->email[] = $row['email'];
            $this->placa[] = $row['placa'];
            $this->modelo[] = $row['modelo'];
            $this->ano[] = $row['ano'];
            $this->fipe[] = $row['fipe'];
            $this->situacao[] = $row['situacao'];
            $this->data[] = $row['data'];
            $this->codvendedor[] = $row['codvendedor'];
            $this->codigo[] = $row['cod'];
            $this->plano[] = $row['plano'];
            $this->valor[] = $row['valor'];
            $this->carro[] = $row['carro'];
            $this->app[] = $row['app'];
            $this->protecao[] = $row['protecao'];
            $this->vidrosn[] = $row['vidrosn'];
            $this->vidrosi[] = $row['vidrosi'];
            $this->roubo[] = $row['roubo'];
            $this->assistencia[] = $row['assistencia'];
        }
    }
    
    function mostra4($l) {
        $sql = mysqli_query($l, "select * from cotacao where situacao = 'Aprovada'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->nome[] = $row['nome'];
            $this->telefone[] = $row['telefone'];
            $this->telefone2[] = $row['telefone2'];
            $this->email[] = $row['email'];
            $this->placa[] = $row['placa'];
            $this->modelo[] = $row['modelo'];
            $this->ano[] = $row['ano'];
            $this->fipe[] = $row['fipe'];
            $this->situacao[] = $row['situacao'];
            $this->data[] = $row['data'];
            $this->codvendedor[] = $row['codvendedor'];
            $this->codigo[] = $row['cod'];
            $this->plano[] = $row['plano'];
            $this->valor[] = $row['valor'];
            $this->carro[] = $row['carro'];
            $this->app[] = $row['app'];
            $this->protecao[] = $row['protecao'];
            $this->vidrosn[] = $row['vidrosn'];
            $this->vidrosi[] = $row['vidrosi'];
            $this->roubo[] = $row['roubo'];
            $this->assistencia[] = $row['assistencia'];
            
        }
    }

    function mostra5($l, $codvendedor) {
        $sql = mysqli_query($l, "select * from cotacao where codvendedor='$codvendedor' and situacao = 'Aprovada'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

           $this->nome[] = $row['nome'];
            $this->telefone[] = $row['telefone'];
            $this->telefone2[] = $row['telefone2'];
            $this->email[] = $row['email'];
            $this->placa[] = $row['placa'];
            $this->modelo[] = $row['modelo'];
            $this->ano[] = $row['ano'];
            $this->fipe[] = $row['fipe'];
            $this->situacao[] = $row['situacao'];
            $this->data[] = $row['data'];
            $this->codvendedor[] = $row['codvendedor'];
            $this->codigo[] = $row['cod'];
            $this->plano[] = $row['plano'];
            $this->valor[] = $row['valor'];
            $this->carro[] = $row['carro'];
            $this->app[] = $row['app'];
            $this->protecao[] = $row['protecao'];
            $this->vidrosn[] = $row['vidrosn'];
            $this->vidrosi[] = $row['vidrosi'];
            $this->roubo[] = $row['roubo'];
            $this->assistencia[] = $row['assistencia'];
        }
    }

}

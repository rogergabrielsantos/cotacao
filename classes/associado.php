<?php

class associado {

    private $codigo;
    private $nome;
    private $cpf;
    private $nascimento;
    private $identidade;
    private $cnh;
    private $estadocivil;
    private $logradouro;
    private $bairro;
    private $cidade;
    private $numero;
    private $estado;
    private $cep;
    private $telefone;
    private $email;
    private $telefone2;
    private $codvendedor;

    function __construct($codigo, $nome, $cpf, $nascimento, $identidade, $cnh, $estadocivil, $logradouro, $bairro, $cidade, $numero, $estado, $cep, $telefone, $email, $telefone2, $codvendedor) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->nascimento = $nascimento;
        $this->identidade = $identidade;
        $this->cnh = $cnh;
        $this->estadocivil = $estadocivil;
        $this->logradouro = $logradouro;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->numero = $numero;
        $this->estado = $estado;
        $this->cep = $cep;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->telefone2 = $telefone2;
        $this->codvendedor = $codvendedor;
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

    function getCpf() {
        return $this->cpf;
    }

    function getNascimento() {
        return $this->nascimento;
    }

    function getIdentidade() {
        return $this->identidade;
    }

    function getCnh() {
        return $this->cnh;
    }

    function getEstadocivil() {
        return $this->estadocivil;
    }

    function getLogradouro() {
        return $this->logradouro;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getNumero() {
        return $this->numero;
    }

    function getEstado() {
        return $this->estado;
    }

    function getCep() {
        return $this->cep;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefone2() {
        return $this->telefone2;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }

    function setIdentidade($identidade) {
        $this->identidade = $identidade;
    }

    function setCnh($cnh) {
        $this->cnh = $cnh;
    }

    function setEstadocivil($estadocivil) {
        $this->estadocivil = $estadocivil;
    }

    function setLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefone2($telefone2) {
        $this->telefone2 = $telefone2;
    }

    function insere($l) {
        $sql = mysqli_query($l, "INSERT INTO associado (nome, cpf, nascimento, identidade, cnh, estadocivil, logradouro, bairro, cidade, numero, estado, cep, telefone, email, telefone2,codvendedor) VALUES ('$this->nome', '$this->cpf', '$this->nascimento', '$this->identidade', '$this->cnh', '$this->estadocivil', '$this->logradouro', '$this->bairro', '$this->cidade', '$this->numero', '$this->estado', '$this->cep', '$this->telefone', '$this->email', '$this->telefone2', '$this->codvendedor')") or die(mysqli_error_());
        //echo("<script type='text/javascript'> alert('Dado Enviados com sucesso !!!'); location.href='menu1.php';</script>");
    }

    function delete($cod, $l) {
        $sql = mysqli_query($l, "delete from associado where cod ='$cod'") or die(mysqli_error_());
        //echo("<script type='text/javascript'> alert('Dado Excluidos com sucesso !!!'); location.href='menu1.php';</script>");
    }

    function atualiza($cod, $l) {
        $sql = mysqli_query($l, "update associado set nome = '$this->nome',cpf ='$this->cpf', nascimento='$this->nascimento' , identidade ='$this->identidade', cnh='$this->cnh', estadocivil='$this->estadocivil', logradouro='$this->logradouro', bairro='$this->bairro', cidade ='$this->cidade', numero ='$this->numero', estado ='$this->estado', cep ='$this->cep', telefone ='$this->telefone', email ='$this->email', telefone2 ='$this->telefone2' where cod ='$cod'");
        //echo("<script type='text/javascript'> alert('Dados Alterados com sucesso !!!'); location.href='menu1.php';</script>");
    }
    

    function mostra($cod, $l) {
        $sql = mysqli_query($l, "select * from associado where cod = '$cod'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->nome = $row['nome'];
            $this->cpf = $row['cpf'];
            $this->nascimento = $row['nascimento'];
            $this->identidade = $row['identidade'];
            $this->cnh = $row['cnh'];
            $this->estadocivil = $row['estadocivil'];
            $this->logradouro = $row['logradouro'];
            $this->bairro = $row['bairro'];
            $this->cidade = $row['cidade'];
            $this->numero = $row['numero'];
            $this->estado = $row['estado'];
            $this->cep = $row['cep'];
            $this->telefone = $row['telefone'];
            $this->email = $row['email'];
            $this->telefone2 = $row['telefone2'];
            $this->codvendedor = $row['codvendedor'];
        }
    }

    function mostra2($nome, $l) {
        $sql = mysqli_query($l, "select * from associado where nome LIKE '%" . $nome . "%'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->nome[] = $row['nome'];
            $this->cpf[] = $row['cpf'];
            $this->nascimento[] = $row['nascimento'];
            $this->identidade[] = $row['identidade'];
            $this->cnh[] = $row['cnh'];
            $this->estadocivil[] = $row['estadocivil'];
            $this->logradouro[] = $row['logradouro'];
            $this->bairro[] = $row['bairro'];
            $this->cidade[] = $row['cidade'];
            $this->numero[] = $row['numero'];
            $this->estado[] = $row['estado'];
            $this->cep[] = $row['cep'];
            $this->telefone[] = $row['telefone'];
            $this->email[] = $row['email'];
            $this->telefone2[] = $row['telefone2'];
            $this->codigo[] = $row['cod'];
        }
    }

    function mostra3($nome, $l,$codvendedor) {
        $sql = mysqli_query($l, "select * from associado where nome LIKE '%" . $nome . "%' and codvendedor='$codvendedor'") or die(mysqli_error_());
        while ($row = mysqli_fetch_array($sql)) {

            $this->nome[] = $row['nome'];
            $this->cpf[] = $row['cpf'];
            $this->nascimento[] = $row['nascimento'];
            $this->identidade[] = $row['identidade'];
            $this->cnh[] = $row['cnh'];
            $this->estadocivil[] = $row['estadocivil'];
            $this->logradouro[] = $row['logradouro'];
            $this->bairro[] = $row['bairro'];
            $this->cidade[] = $row['cidade'];
            $this->numero[] = $row['numero'];
            $this->estado[] = $row['estado'];
            $this->cep[] = $row['cep'];
            $this->telefone[] = $row['telefone'];
            $this->email[] = $row['email'];
            $this->telefone2[] = $row['telefone2'];
            $this->codigo[] = $row['cod'];
            $this->codvendedor[] = $row['codvendedor'];
        
            
        }
    }

}

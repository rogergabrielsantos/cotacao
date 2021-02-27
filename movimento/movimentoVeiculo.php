<?php
session_start();
include 'procedimentos.php';
require_once '../classes/veiculo.php';


$codigo = isset($_POST['codigo']) ? $_POST['codigo'] : "";
$alienado = $_POST['alienado'];
$ano = $_POST['ano'];
$chassi = $_POST['chassi'];
$cilindrada = $_POST['cilindrada'];
$codassociado = $_POST['codassociado'];
$nomeassociado = $_POST['nomeassociado'];
$codfipe = $_POST['codfipe'];
$combustivel = $_POST['combustivel'];
$cor = $_POST['cor'];
$cota = $_POST['cota'];
$km = $_POST['km'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$placa = $_POST['placa'];
$plano = $_POST['plano'];
$portas = $_POST['portas'];
$potencia = $_POST['potencia'];
$rastreador = $_POST['rastreador'];
$renavam = $_POST['renavam'];
$tabelafipe = $_POST['tabelafipe'];
$tipo = $_POST['tipo'];
$codvendedor = $_SESSION['perfil']==  "2" ? $_SESSION['codvendedor']:"administrador";

$A = new veiculo($codigo, $tabelafipe, $codfipe, $cota, $plano, $tipo, $portas, $alienado, $marca, $cor, $combustivel, $modelo, $ano, $placa, $renavam, $chassi, $km, $potencia, $cilindrada, $rastreador, $codassociado, $nomeassociado,$codvendedor);


switch (get_post_action('salvar', 'deletar', 'alterar','enviar')) {

    case 'salvar':

        $A->insere($link);
        $_SESSION['msg'] = "<div class='alert alert-success'>Veiculo cadastrado com sucesso!</div>";
        echo("<script type='text/javascript'> location.href='../cadastroVeiculo1.php';</script>");
        break;
    case 'deletar':
        $A->delete($codigo, $link);
        $_SESSION['msg'] = "<div class='alert alert-success'>Veiculo Excluido  com sucesso!</div>";
        echo("<script type='text/javascript'> location.href='../consultaVeiculo.php';</script>");

        break;

    case 'alterar':

        $A->atualiza($codigo, $link);
        $_SESSION['msg'] = "<div class='alert alert-success'>Veiculo alterado com sucesso!</div>";
        echo("<script type='text/javascript'> location.href='../consultaVeiculo.php';</script>");

        break;
    case 'enviar':

        $A->atualiza($codigo, $link);
        $_SESSION['msg'] = "<div class='alert alert-success'>Dados enviados com sucesso!</div>";
        echo("<script type='text/javascript'> location.href='../vistoria/dadosVeiculo.php';</script>");

        break;
}




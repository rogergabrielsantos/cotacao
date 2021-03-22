<?php

session_start();
require_once 'procedimentos.php';
require_once '../classes/filiacao.php';
require_once '../classes/veiculo.php';
require_once '../classes/checklistcarro.php';
require_once '../classes/checklistmoto.php';
require_once '../classes/vistoria.php';

$app = isset($_POST['app']) ? $_POST['app'] : "";
$carroreserva = isset($_POST['carroreserva']) ? $_POST['carroreserva'] : "";
$cidade = $_POST['cidade'];
$codassociado = $_POST['associado'];
$codveiculo = $_POST['veiculo'];
$codvendedor = $_POST['vendedor'];
$data = $_POST['data'];
$diavencimento = $_POST['diavencimento'];
$planotopplus = isset($_POST['planotopplus']) ? $_POST['planotopplus'] : "";
$protecao = $_POST['protecao'];
$taxarastreador = $_POST['taxarastreador'];
$terceiros = isset($_POST['terceiros']) ? $_POST['terceiros'] : "";
$valoradesao = $_POST['valoradesao'];
$valormesalidade = $_POST['valormesalidade'];
$vidrosimportado = isset($_POST['vidrosimportado']) ? $_POST['vidrosimportado'] : "";
$vidrosnacional = isset($_POST['vidrosnacional']) ? $_POST['vidrosnacional'] : "";
$nomeassociado = $_POST['nomeassociado'];
$codigo = isset($_POST['codigo']) ? $_POST['codigo'] : "";
$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : "";
$status = "pendente";


$A = new filiacao("", $data, $codvendedor, $cidade, $codassociado, $codveiculo, $valoradesao, $taxarastreador, $valormesalidade, $protecao, $diavencimento, $carroreserva, $app, $terceiros, $vidrosnacional, $vidrosimportado, $planotopplus, $nomeassociado, $status);


$B = new veiculo("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
//$placa = $B->getPlaca();

switch (get_post_action('salvar', 'deletar', 'aprovar', 'alterar', 'desativar')) {

    case 'salvar':
        $A->insere($link);
        $B->insereFiliado($link, $codveiculo, $status);
        $_SESSION['msg'] = "<div class='alert alert-success'>filiação cadastrada com sucesso!</div>";
        echo("<script type='text/javascript'> location.href='../buscaFiliar.php';</script>");
        break;
    case 'deletar':
        $B->excluirFiliado($link, $codveiculo);
        $A->delete($codigo, $link);
        $_SESSION['msg'] = "<div class='alert alert-success'>Filiação Excluida com sucesso!</div>";
        echo("<script type='text/javascript'> location.href='../bucarfiliar2.php';</script>");
        break;

    case 'alterar':
        $A->alterar($link, $codigo);
        $_SESSION['msg'] = "<div class='alert alert-success'>filiação alterada com sucesso!</div>";
        echo("<script type='text/javascript'> location.href='../filiacaopend.php';</script>");
        break;

    case 'desativar':
        $A->desativa($codigo, $link);
        $B->desativa($codveiculo, $link);
        $_SESSION['msg'] = "<div class='alert alert-success'>Filiação Desativada com Sucesso!</div>";
        echo("<script type='text/javascript'> location.href='../bucarfiliar2.php';</script>");
        break;



    case 'aprovar':
        $status = "aprovado";
        $A->atualiza($codigo, $link, $status);
        $B->insereFiliado($link, $codveiculo, "SIM");
        /*
          $B->mostra($codveiculo, $link);
          $placa = $B->getPlaca();
          $marca = $B->getMarca();
          $modelo = $B->getModelo();
          $tipoveiculo = $B->getTipo();
          $controlevistoria = $placa . rand();
          $A = new vistoria("", "FILIACAO", "", "", "ABERTO", $controlevistoria, $codassociado, $nomeassociado, $codveiculo, $modelo, $marca, $placa, $tipoveiculo, "");
          $A->insere($link);

          if ($tipoveiculo == "Moto") {
          $B = new checklistmoto("", $controlevistoria, "", "", "", "", "", "", "", "", "");
          $B->insere($link);
          } else {
          $C = new checklistcarro("", $controlevistoria, "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
          $C->insere($link);


          }

         */

        $_SESSION['msg'] = "<div class='alert alert-success'>filiação cadastrada com sucesso!</div>";
        echo("<script type='text/javascript'> location.href='../filiacaopend.php';</script>");
        break;
}




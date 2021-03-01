<?php
session_start();
require_once 'procedimentos.php';
require_once '../classes/cotacao.php';
require_once '../classes/associado.php';

$codigo = isset($_POST['codigo']) ? $_POST['codigo'] : "";
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$telefone2 = $_POST['telefone2'];
$email = $_POST['email'];
$placa = $_POST['placa'];
$modelo = $_POST['modelo'];
$ano = $_POST['ano'];
$fipe = $_POST['fipe'];
$data = $_POST['data'];
$situacao = "Aberto";
$codvendedor = $_SESSION['perfil']==  "2" ? $_SESSION['codvendedor']:"administrador";
$plano = isset($_POST['plano']) ? $_POST['plano'] : "";
$valor = isset($_POST['valor']) ? $_POST['valor'] : "";;
$carro = isset($_POST['carro']) ? $_POST['carro'] : "";
$app = isset($_POST['app']) ? $_POST['app'] : "";
$protecao = isset($_POST['protecao']) ? $_POST['protecao'] : "";
$vidrosn = isset($_POST['vidrosn']) ? $_POST['vidrosn'] : "";
$vidrosi = isset($_POST['vidrosi']) ? $_POST['vidrosi'] : "";
$roubo = isset($_POST['roubo']) ? $_POST['roubo'] : "";
$assistencia = isset($_POST['assistencia']) ? $_POST['assistencia'] : "";






$A = new cotacao($codigo, $nome, $telefone, $telefone2, $email, $placa, $modelo, $ano, $fipe, $situacao, $data, $codvendedor, $plano, $valor, $carro, $app, $protecao, $vidrosn, $vidrosi, $roubo, $assistencia);

switch (get_post_action('salvar', 'deletar', 'alterar','confirmar','aprovar')) {

    case 'salvar':

        $A->insere($link);
        $_SESSION['msg'] = "<div class='alert alert-success'>Cotação cadastrada com sucesso!</div>";
       //echo("<script type='text/javascript'> location.href='../cadastroCotacao.php';</script>");
        break;
    case 'deletar':
        $A->delete($codigo, $link);
        $_SESSION['msg'] = "<div class='alert alert-success'>Cotação Excluída com sucesso!</div>";
        echo("<script type='text/javascript'> location.href='../consultaCotacao.php';</script>");
        break;

    case 'alterar':

        $A->atualiza($codigo, $link);
       
        $_SESSION['msg'] = "<div class='alert alert-success'>Cotação alterado com sucesso!</div>";
       echo("<script type='text/javascript'> location.href='../consultaCotacao.php';</script>");
        break;
    
    case 'confirmar':

        $A->atualiza($codigo, $link);
        $_SESSION['msg'] = "<div class='alert alert-success'>Dados enviados com sucesso!</div>";
        echo("<script type='text/javascript'> location.href='../vistoria/dadosAssociado.php';</script>");
        break;
    
     case 'aprovar':
         
        $A->aprova($codigo, $link);
        $B = new associado("", $nome, "", "", "", "", "", "", "", "", "", "", "", $telefone, $email, $telefone2, $codvendedor);
        $B->insere($link);
        $C = new veiculo("", $tabelafipe,"", $odigo, $plano, "", "","", "","", "", $modelo, $ano, $placa, "","","","","","","", $nome, $codvendedor);
        $C->insere($link);
        $D = new filiacao("", $data, $codvendedor, "", "","", $valor, "", "", "","", $carro, $app, $protecao, $vidrosn, $vidrosi, $plano, $nome, "Aberto");
      
         
        echo("<script type='text/javascript'> location.href='../cotacao/consultaAssociado.php';</script>");
        break;
}





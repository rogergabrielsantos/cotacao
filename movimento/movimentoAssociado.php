<?php
session_start();
require_once 'procedimentos.php';
require_once '../classes/associado.php';


$codigo = isset($_POST['codigo']) ? $_POST['codigo'] : "";
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$nascimento = $_POST['nascimento'];
$identidade = $_POST['identidade'];
$cnh = $_POST['cnh'];
$estadocivil = $_POST['estadocivil'];
$logradouro = $_POST['logradouro'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$numero = $_POST['numero'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$telefone2 = $_POST['telefone2'];
$codvendedor = $_SESSION['perfil']==  "2" ? $_SESSION['codvendedor']:"administrador";






$A = new associado($codigo, $nome, $cpf, $nascimento, $identidade, $cnh, $estadocivil, $logradouro, $bairro, $cidade, $numero, $estado, $cep, $telefone, $email, $telefone2,$codvendedor);


switch (get_post_action('salvar', 'deletar', 'alterar','confirmar')) {

    case 'salvar':

        $A->insere($link);
        $_SESSION['msg'] = "<div class='alert alert-success'>Associado cadastrado com sucesso!</div>";
        echo("<script type='text/javascript'> location.href='../cadastroAssociado.php';</script>");
        break;
    case 'deletar':
        $A->delete($codigo, $link);
        $_SESSION['msg'] = "<div class='alert alert-success'>Associado Excluído com sucesso!</div>";
        echo("<script type='text/javascript'> location.href='../consultaAssociado.php';</script>");
        break;

    case 'alterar':

        $A->atualiza($codigo, $link);
        
        $_SESSION['msg'] = "<div class='alert alert-success'>Associado alterado com sucesso!</div>";
        echo("<script type='text/javascript'> location.href='../consultaAssociado.php';</script>");
        break;
    
    case 'confirmar':

        $A->atualiza($codigo, $link);
        $_SESSION['msg'] = "<div class='alert alert-success'>Dados enviados com sucesso!</div>";
        echo("<script type='text/javascript'> location.href='../vistoria/dadosAssociado.php';</script>");
        break;
}





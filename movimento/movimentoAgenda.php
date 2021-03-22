<?php
session_start();
include 'procedimentos.php';
require_once '../classes/agendaclasse.php';
require_once '../classes/vistoria.php';

$cod = isset($_GET['cod']) ? $_GET['cod'] : "";
$codigo = isset($_POST['codigo']) ? $_POST['codigo'] : "";


$data = isset($_POST['data1']) ? $_POST['data1'] : "";
$vistoriador = isset($_POST['vistoriador1']) ? $_POST['vistoriador1'] : "";
$horario = isset($_POST['horario']) ? $_POST['horario'] : "";

$B = new vistoria("","", "","","","","","","","","","","");
$B->mostra1($codigo, $link);

$A = new agendaclasse("", $data, $horario, $B->getCodassociado(), $B->getLocal(), $B->getFiliacao(), "agendada", $codigo, $vistoriador, $B->getCodveiculo());

if($cod!=""){
    $A->mostra2($link, $cod); 
    
     
     $codigo = $A->getCodvistoria();
     
     $B->status($link, "pendente", $codigo);
    $A->delete($link, $cod);
     
     
       $_SESSION['msg'] = "<div class='alert alert-success'>Agendamento Escluido com sucesso!</div>";
    echo("<script type='text/javascript'> location.href='../agenda.php';</script>");
     
    
}


switch (get_post_action('agendar', 'deletar', 'alterar','enviar')) {

    case 'agendar':

        $A->insere($link);
        $B->status($link, "agendada",$codigo);
        $_SESSION['msg'] = "<div class='alert alert-success'>Vistoria Agendada com sucesso!</div>";
       echo("<script type='text/javascript'> location.href='../agenda.php';</script>");
        break;
    case 'deletar':
        $A->delete($codigo, $link);
        $_SESSION['msg'] = "<div class='alert alert-success'>Veiculo Excluido  com sucesso!</div>";
        //echo("<script type='text/javascript'> location.href='../consultaVeiculo.php';</script>");

        break;

  
}




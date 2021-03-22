<?php
session_start();
include 'movimento/procedimentos.php';
require_once 'classes/vistoria.php';
require_once 'classes/checklistcarro.php';
require_once 'classes/checklistmoto.php';
require_once ('header.php');

if (isset($_POST['cod'])) {
    $codigo = $_POST['cod'];
    $_SESSION['codvistoria'] = $_POST['cod'];
   
      
} else {

    $codigo = $_SESSION['codvistoria'];
    $controle = $_SESSION['controle'];
}

$B = new vistoria("","","" ,"", "","","","", "", "", "", "", "","","");
$B->mostra($codigo, $link);
$controle = $B->getControlevistoria();
$tipoveiculo =$B->getTipoveiculo();
$status = $B->getStatus();
$_SESSION['tipoveiculo']= $tipoveiculo; 
$_SESSION['controle'] =  $controle;


if($tipoveiculo=="Moto"){
     require_once ('checklistmotoview.php');
}else{
  
    require_once ('checklistcarroview.php');
}
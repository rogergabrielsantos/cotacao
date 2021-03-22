<?php

session_start();
include '../movimento/procedimentos.php';
require_once '../classes/vistoria.php';
require_once '../classes/danoClasse.php';
require_once '../classes/vistoria.php';
require_once '../classes/assinaturaClasse.php';

$assinatura = $_POST['imagem'];
$codigo = $_SESSION['codvistoria'];
$possui = isset($_POST['possui'])? "sim" : "";

$A = new vistoria("", "", "", "", "", "", "", "", "", "", "", "", "", "");
$A->mostra1($codigo, $link);
$codassociado = $A->getCodassociado();
$codfiliacao = $A->getFiliacao();



$B = new assinaturaClasse("", $codigo, $codassociado, $codfiliacao, $assinatura);

if ($possui == "sim") {
     $B->altera($codigo, $link);
    $_SESSION['msg'] = "<div class='alert alert-success'>Assinatura Alterada com sucesso!</div>";
} else {

    $B->insere($link);
    $_SESSION['msg'] = "<div class='alert alert-success'>Assinatura cadastrada com sucesso!</div>";
}
echo("<script type='text/javascript'> location.href='/cotacao/vistoria/assinatura.php';</script>");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


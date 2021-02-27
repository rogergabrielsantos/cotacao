<?php

session_start();
include 'movimento/procedimentos.php';
include ('pdf/mpdf.php');
require_once 'classes/associado.php';
require_once 'classes/filiacao.php';
require_once 'classes/veiculo.php';
require_once 'classes/vistoria.php';
require_once 'classes/vendedor.php';
require_once 'classes/pneuClasse.php';
require_once 'classes/danoClasse.php';
require_once 'classes/checklistcarro.php';
require_once 'classes/checklistmoto.php';


$placa = $_GET['codi'];
$A = new filiacao("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
$A->mostra6($link, $placa);

$nome = $A->getNomeassociado();
$datafilicao = $A->getData();
$cidade = $A->getCidade();
$codvendedor = $A->getCodvendedor();
$codassociado = $A->getCodassociado();
$valoradesao = $A->getValoradesao();
$taxarastreador = $A->getTaxarastreador();
$valormesalidade = $A->getValormesalidade();
$diavencimento = $A->getDiavencimento();
$carroreserva = $A->getCarroreserva();
$app = $A->getApp();
$vidrosnacional = $A->getVidrosnacional();
$vidrosimportado = $A->getVidrosimportado();
$terceiros = $A->getTerceiros();
$planotopplus = $A->getPlanotopplus();


$B = new associado("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
$B->mostra($codassociado, $link);
$logradouro = $B->getLogradouro();
$numero = $B->getNumero();
$bairro = $B->getBairro();
$cidadea = $B->getCidade();
$uf = $B->getEstado();
$cep = $B->getCep();
$email = $B->getEmail();
$telefone = $B->getTelefone();
$telefone2 = $B->getTelefone2();
$cpf = $B->getCpf();
$estadocivil = $B->getEstadocivil();
$identidade = $B->getIdentidade();
$cnh = $B->getCnh();
$nascimento = $B->getNascimento();
$estadoa = $B->getEstado();

$C = new veiculo("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
$C->mostra5($placa, $link);
$tabelafipe = $C->getTabelafipe();
$codfipe = $C->getCodfipe();
$cota = $C->getCota();
$plano = $C->getPlano();
$tipoveiculo = $C->getTipo();
$marca = $C->getMarca();
$modelo = $C->getModelo();
$anof = $C->getAno();
$portas = $C->getPortas();
$cor = $C->getCor();
$alienado = $C->getAlienado();
$combustivel = $C->getCombustivel();
$renavam = $C->getRenavam();
$chassi = $C->getChassi();
$km = $C->getKm();
$potencia = $C->getPotencia();
$cilindrada = $C->getCilindrada();
$rastreador = $C->getRastreador();

$AP = $A->getApp() == "on" ? "checked ='checked'" : "";
$T = $A->getTerceiros() == "on" ? "checked ='checked'" : "";
$VN = $A->getVidrosnacional() == "on" ? "checked ='checked'" : "";
$VI = $A->getVidrosimportado() == "on" ? "checked ='checked'" : "";
$P = $A->getPlanotopplus() == "on" ? "checked ='checked'" : "";
$CR = $A->getCarroreserva() == "on" ? "checked ='checked'" : "";






$D = new vistoria("", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
$D->mostra4($placa, $link);
$tipovistoria = $D->getTipo();
$vistoriador = $D->getVitoriador();
$localvistoria = $D->getLocal();
$controlevistoria = $D->getControlevistoria();
$tipoveiculo = $D->getTipoveiculo();
$datav = $D->getData();
$E = new vendedor($codigo, "", "", "", "", "", "","");
$E->mostra($codvendedor, $link);
$nomevendedor = $E->getNome();
$codvistoria = $D->getCodigo();

//$rua = $A->getLogradouro();
//$bairro = $A->getBairro();
//$numero = $A->getNumero();
//$cep = $A->getCep();
//$estado = $A->getEstado();
//$local = $A->getCidade();
$dia = date('d');
$mes = date('M');
$ano = date('Y');
$teste = "1";
if ($tipoveiculo == "Moto") {
    require_once 'pagina2.php';
} else {
    require_once 'pagina1.php';
}

$arquivo = "Contrato.pdf";

$mpdf = new mPDF();
$mpdf->WriteHTML($pagina);

$mpdf->Output('documentos/contrato-' . $placa . '.pdf', 'F');
$caminho = "http://localhost/novo/contrato.php?codi=gkd2320";
$caminho2 = "http://localhost/novo/manual.php";
$caminho3 = "http://localhost/novo/regulamento.php";

//Variáveis que recebem os dados digitados no formulário pelo id atribuído nos input




$to = "$nome <$email>";

$empresa = "Sicar";
$email2 = "email@sicar.org.br";
$assunto = "teste  de EMAIL";
$mensagem = "Bem-vindo Sr(a) $nome!\n";
$mensagem .= "Agracemos pela sua Filiação,  Segue abaixo os links de sua filiação:\n";
$mensagem .= "Regulamento: http://vistoria.rgscomunicacao.com/regulamento.php\n";
$mensagem .= "Manual: http://vistoria.rgscomunicacao.com/manual.php\n";
$mensagem .= "Filiação: http://vistoria.rgscomunicacao.com/contrato.php?codi=$placa\n";
$mensagem .= "Atenciosamente $empresa\n";

if (mail($to,$assunto, $mensagem,"From: $empresa")) {
    echo " Email Enviado com Sucesso!$email";
}else{
     echo " email NÃO enviado!";
};
?>

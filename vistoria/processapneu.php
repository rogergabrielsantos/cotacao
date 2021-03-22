<?php
session_start();
include_once('../movimento/procedimentos.php');
require_once '../classes/pneuClasse.php';
include 'wideimage/WideImage.php';

$placa = $_SESSION['usuario'];
$codigo = $_SESSION['codvistoria'];
$controle = $_SESSION['controle'];

//Receber os dados do formulário
$tmp_name = $_FILES['arquivo']['tmp_name'];
$extensao = ".jpg";
$nome = md5(time()) . $extensao;
$tipo = $_POST['tipo'];
$marca = $_POST['marca'];
$estado = $_POST['estado'];
$obs = $_POST['obs'];

//carrega no wideuamge
$image = WideImage::load($tmp_name);

// Salva a imagem em um arquivo com 50% de qualidade
$image->saveToFile('upload/'. $nome,50);

//Salvar no BD
 $A = new pneuClasse("", $tipo, $codigo, $placa, $controle, $estado, $nome, $obs, $marca);
	
	
   $sql = mysqli_query($link, "SELECT * FROM pneus WHERE codvistoria ='$codigo' and tipo = '$tipo'") or die(mysqli_error());

      $row = mysqli_num_rows($sql);
        if ($row == 1) {
            while ($row = mysqli_fetch_array($sql)) {
                $cod = $row['cod'];
            }
            
            $A->atualiza($cod, $link);
			$_SESSION['msg'] = "<div class='alert alert-success'>Pneu cadastradado com sucesso!</div>";
           
        } else {
            $A->insere($link);
			$_SESSION['msg'] = "<div class='alert alert-success'>Pneu cadastradado com sucesso!</div>";
        }




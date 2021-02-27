<?php

require_once 'procedimentos.php';
require_once '../classes/documentosClasse.php';


$placa = $_SESSION['usuario'];
$codigo = $_SESSION['codvistoria'];
$controle = $_SESSION['codvistoria'];


$documento = $_POST['documento'];
$obs = $_POST['obs'];
$diretorio = "upload/";
//$extensao = strtolower(substr($_FILES['arquivo']['name'],-4));
$extensao = ".jpg";
$nome = md5(time()) . $extensao;










switch (get_post_action('salvar', 'deletar', 'alterar')) {

    case 'salvar':
       
	   
	   $altura = "277";
	$largura = "208";
	
	
	
	switch($_FILES['arquivo']['type']):
		case 'image/jpeg';
		case 'image/pjpeg';
			$imagem_temporaria = imagecreatefromjpeg($_FILES['arquivo']['tmp_name']);
			
			$largura_original = imagesx($imagem_temporaria);
			$altura_original = imagesy($imagem_temporaria);
			
			if($largura_original>$altura_original){
				$altura = "208";
				$largura = "277";
				
			}
			
			$nova_largura = $largura ? $largura : floor (($largura_original / $altura_original) * $altura);
			
			$nova_altura = $altura ? $altura : floor (($altura_original / $largura_original) * $largura);
			
			$imagem_redimensionada = imagecreatetruecolor($nova_largura, $nova_altura);
			imagecopyresampled($imagem_redimensionada, $imagem_temporaria, 0, 0, 0, 0, $nova_largura, $nova_altura, $largura_original, $altura_original);
			imagepng($imagem_redimensionada, 'upload/' . $nome);
			
			//move_uploaded_file($imagem_redimensionada, $diretorio . $nome);
			
		
			
			
		break;
		
		//Caso a imagem seja extensão PNG cai nesse CASE
		case 'image/png':
		case 'image/x-png';
			$imagem_temporaria = imagecreatefrompng($_FILES['arquivo']['tmp_name']);
			
			$largura_original = imagesx($imagem_temporaria);
			$altura_original = imagesy($imagem_temporaria);
			if($largura_original>$altura_original){
				$altura = "208";
				$largura = "277";
			}
			
			$nova_largura = $largura ? $largura : floor(( $largura_original / $altura_original ) * $altura);

			/* Configura a nova altura */
			$nova_altura = $altura ? $altura : floor(( $altura_original / $largura_original ) * $largura);
			
			/* Retorna a nova imagem criada */
			$imagem_redimensionada = imagecreatetruecolor($nova_largura, $nova_altura);
			
			/* Copia a nova imagem da imagem antiga com o tamanho correto */
			//imagealphablending($imagem_redimensionada, false);
			//imagesavealpha($imagem_redimensionada, true);

			imagecopyresampled($imagem_redimensionada, $imagem_temporaria, 0, 0, 0, 0, $nova_largura, $nova_altura, $largura_original, $altura_original);
			
			//função imagejpeg que envia para o browser a imagem armazenada no parâmetro passado
			imagepng($imagem_redimensionada, 'upload/' . $nome);
			
			
			
			
		break;
	endswitch;
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
       
        $A = new documentosClasse("", $codigo, $placa, $controle, $documento, $obs, $nome);

        $sql = mysqli_query($link, "SELECT * FROM documentos WHERE codvistoria ='$codigo' and documento = '$documento'") or die(mysqli_error());
        $row = mysqli_num_rows($sql);
        if ($row == 1) {
            while ($row = mysqli_fetch_array($sql)) {
                $cod = $row['cod'];
            }
            $A->atualiza($cod, $link);
        } else {
            $A->insere($link);
        }

        break;
    case 'deletar':
        $A->delete($codigo, $link);

        break;

    case 'alterar':

        $A->atualiza($codigo, $link);

        break;
}



    
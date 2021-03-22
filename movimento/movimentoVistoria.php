<?php

session_start();
require_once 'procedimentos.php';
require_once '../classes/vistoriacCarro.php';
require_once '../classes/vistoria.php';
require_once '../classes/checklistcarro.php';
require_once '../classes/checklistmoto.php';



switch (get_post_action('solicitar', 'deletar', 'enviar', 'enviarmoto', 'aprovar')) {

    case 'solicitar':

        $codassociado = $_POST['associado'];
        $codveiculo = $_POST['veiculo'];
        $codvendedor = $_POST['vendedor'];
        $placa = $_POST['placa'];
        $nomeassociado = $_POST['nomeassociado'];
        $tipovistoria = $_POST['tipovistoria'];
        $tipo = $_POST['tipo'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $controlevistoria = $placa . rand();

        $A = new vistoria("", $tipovistoria, "", "", "ABERTO", $controlevistoria, $codassociado, $nomeassociado, $codveiculo, $modelo, $marca, $placa, $tipo, "",$codvendedor);
        $A->insere($link);

        if ($tipo == "Moto") {
            $B = new checklistmoto("", $controlevistoria, "", "", "", "", "", "", "", "", "");
            $B->insere($link);
        } else {
            $C = new checklistcarro("", $controlevistoria, "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
            $C->insere($link);
        }

        $_SESSION['msg'] = "<div class='alert alert-success'>Vistoria Solicitada com sucesso!</div>";
        echo("<script type='text/javascript'> location.href='../solicitaVistoria.php';</script>");


        break;
    case 'deletar':
        $codigo = $_POST['codigo'];
        $A = new vistoria("", "", "", "", "", "", "", "", "", "", "", "", "", "");
        $A->deletetodos($codigo, $link);
        
        
         $_SESSION['msg'] = "<div class='alert alert-success'>Vistoria Excluida com sucesso!</div>";
        echo("<script type='text/javascript'> location.href='../consultaVistoria.php';</script>");

        break;
    case 'aprovar':
        $codigo = $_POST['codigo'];
        $A = new vistoria("", "", "", "", "", "", "", "", "", "", "", "", "", "","");
        $A->aprova($codigo, $link);
         $_SESSION['msg'] = "<div class='alert alert-success'>Vistoria Atualizada com sucesso!</div>";
        echo("<script type='text/javascript'> location.href='../consultaVistoria.php';</script>");


        break;

    case 'enviar':

        $vistoriador = $_POST['vistoriador'];
        $data = $_POST['data'];
        $local = $_POST['local'];
        $codigo = $_POST['codigo'];
        $placa = $_POST['placa'];
        $controle = $_POST['controle'];

        $retrovisoreletrico = isset($_POST['retrovisoreletrico']) ? $_POST['retrovisoreletrico'] : "";
        $vidroeletrico = isset($_POST['vidroeletrico']) ? $_POST['vidroeletrico'] : "";
        $travaeletrica = isset($_POST['travaeletrica']) ? $_POST['travaeletrica'] : "";
        $frisos = isset($_POST['frisos']) ? $_POST['frisos'] : "";
        $farolneblina = isset($_POST['farolneblina']) ? $_POST['farolneblina'] : "";
        $rodasliga = isset($_POST['rodasliga']) ? $_POST['rodasliga'] : "";
        $protetorcacamba = isset($_POST['protetorcacamba']) ? $_POST['protetorcacamba'] : "";
        $chavecod = isset($_POST['chavecod']) ? $_POST['chavecod'] : "";
        $capota = isset($_POST['capota']) ? $_POST['capota'] : "";
        $abs = isset($_POST['abs']) ? $_POST['abs'] : "";
        $tetosolar = isset($_POST['tetosolar']) ? $_POST['tetosolar'] : "";
        $radiocd = isset($_POST['radiocd']) ? $_POST['radiocd'] : "";
        $disqueteria = isset($_POST['disqueteria']) ? $_POST['disqueteria'] : "";
        $paineldigital = isset($_POST['paineldigital']) ? $_POST['paineldigital'] : "";
        $cambioautomatico = isset($_POST['cambioautomatico']) ? $_POST['cambioautomatico'] : "";
        $direcaohidraulica = isset($_POST['direcaohidraulica']) ? $_POST['direcaohidraulica'] : "";
        $autofalante = isset($_POST['autofalante']) ? $_POST['autofalante'] : "";
        $amplificador = isset($_POST['amplificador']) ? $_POST['amplificador'] : "";
        $bancocouro = isset($_POST['bancocouro']) ? $_POST['bancocouro'] : "";
        $ar = isset($_POST['ar']) ? $_POST['ar'] : "";
        $antenainterna = isset($_POST['antenainterna']) ? $_POST['antenainterna'] : "";
        $console = isset($_POST['console']) ? $_POST['console'] : "";
        $tapete = isset($_POST['tapete']) ? $_POST['tapete'] : "";
        $tampao = isset($_POST['tampao']) ? $_POST['tampao'] : "";
        $alarme = isset($_POST['alarme']) ? $_POST['alarme'] : "";
        $extintor = isset($_POST['extintor']) ? $_POST['extintor'] : "";
        $airbag = isset($_POST['airbag']) ? $_POST['airbag'] : "";
        $triangulo = isset($_POST['triangulo']) ? $_POST['triangulo'] : "";
        $macaco = isset($_POST['macaco']) ? $_POST['macaco'] : "";

       
        $A = new checklistcarro("", "", $codigo, $retrovisoreletrico, $vidroeletrico, $travaeletrica, $frisos, $farolneblina, $rodasliga, $protetorcacamba, $chavecod, $capota, $abs, $tetosolar, $radiocd, $disqueteria, $paineldigital, $cambioautomatico, $direcaohidraulica, $autofalante, $amplificador, $bancocouro, $ar, $antenainterna, $console, $tapete, $tampao, $alarme, $extintor, $airbag, $triangulo, $macaco);
        
        $A->atualizachecklist($controle, $link);
        
       


        $C = new vistoria("", "", $vistoriador, $data, "REALIZADO", "", "", "", "", "", "", "", "", $local,"");
        $C->atualiza2($codigo, $link);
        $_SESSION['msg'] = "<div class='alert alert-success'>Vistoria Atualizada com sucesso!</div>";
       echo("<script type='text/javascript'> location.href='../vistoria/checklist.php';</script>");

        break;

    case 'enviarmoto':

        $vistoriador = $_POST['vistoriador'];
        $data = $_POST['data'];
        $local = $_POST['local'];
        $codigo = $_POST['codigo'];
        $placa = $_POST['placa'];
        $controle = (string)$_POST['controle'];
        $freiodiscod = isset($_POST['freiodiscod']) ? $_POST['freiodiscod'] : "";
        $freiodiscot = isset($_POST['freiodiscoe']) ? $_POST['freiodiscoe'] : "";
        $rodaliga = isset($_POST['rodaliga']) ? $_POST['rodaliga'] : "";
        $carenagem = isset($_POST['carenagem']) ? $_POST['carenagem'] : "";
        $alarme = isset($_POST['alarme']) ? $_POST['alarme'] : "";
        $partida = isset($_POST['partida']) ? $_POST['partida'] : "";
        $chave = isset($_POST['chave']) ? $_POST['chave'] : "";
        $bloqueador = isset($_POST['bloqueador']) ? $_POST['bloqueador'] : "";

        $A = new checklistmoto("", "", $codigo, $freiodiscod, $freiodiscot, $rodaliga, $carenagem, $alarme, $partida, $chave, $bloqueador);
       
        $A->atualizachecklist($controle, $link);
 


        $C = new vistoria("", "", $vistoriador, $data, "REALIZADO", "", "", "", "", "", "", "", "", $local,"");
        $C->atualiza2($codigo, $link);
        $_SESSION['msg'] = "<div class='alert alert-success'>Vistoria Atualizada com sucesso!</div>";
        echo("<script type='text/javascript'> location.href='../vistoria/checklist.php';</script>");

        break;
}




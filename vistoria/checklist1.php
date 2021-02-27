<?php
require_once '../classes/vistoria.php';
require_once '../classes/checklistcarro.php';
require_once '../classes/checklistmoto.php';

$placa = $_SESSION['usuario'];
$codigo = $_SESSION['codvistoria'];
$controle = $_SESSION['controle'];
$tipo = $_SESSION['tipo'];

$B = new vistoria("","","" ,"", "","","","", "", "", "", "", "","","");
$B->mostra($codigo, $link);

 
$A = new checklistcarro("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
$A->mostra4($controle, $link);


$check1 = $A->getRetrovisoreletrico() == "on" ? "checked ='checked'" : "";
$check2 = $A->getVidroeletrico() == "on" ? "checked ='checked'" : "";
$check3 = $A->getTravaeletrica() == "on" ? "checked ='checked'" : "";
$check4 = $A->getFrisos() == "on" ? "checked ='checked'" : "";
$check5 = $A->getFarolneblina() == "on" ? "checked ='checked'" : "";
$check6 = $A->getRodasliga() == "on" ? "checked ='checked'" : "";
$check7 = $A->getProtetorcacamba() == "on" ? "checked ='checked'" : "";
$check8 = $A->getChavecod() == "on" ? "checked ='checked'" : "";
$check9 = $A->getCapota() == "on" ? "checked ='checked'" : "";
$check10 = $A->getAbs() == "on" ? "checked ='checked'" : "";
$check11 = $A->getTetosolar() == "on" ? "checked ='checked'" : "";
$check12 = $A->getRadiocd() == "on" ? "checked ='checked'" : "";
$check13 = $A->getDisqueteria() == "on" ? "checked ='checked'" : "";
$check14 = $A->getPaineldigital() == "on" ? "checked ='checked'" : "";
$check15 = $A->getCambioautomatico() == "on" ? "checked ='checked'" : "";
$check16 = $A->getDirecaohidraulica() == "on" ? "checked ='checked'" : "";
$check17 = $A->getAutofalante() == "on" ? "checked ='checked'" : "";
$check18 = $A->getAmplificador() == "on" ? "checked ='checked'" : "";
$check19 = $A->getBancocouro() == "on" ? "checked ='checked'" : "";
$check20 = $A->getAr() == "on" ? "checked ='checked'" : "";
$check21 = $A->getAntenainterna() == "on" ? "checked ='checked'" : "";
$check22 = $A->getConsole() == "on" ? "checked ='checked'" : "";
$check23 = $A->getTapete() == "on" ? "checked ='checked'" : "";
$check24 = $A->getTampao() == "on" ? "checked ='checked'" : "";
$check25 = $A->getAlarme() == "on" ? "checked ='checked'" : "";
$check26 = $A->getExtintor() == "on" ? "checked ='checked'" : "";
$check27 = $A->getAirbag() == "on" ? "checked ='checked'" : "";
$check28 = $A->getTriangulo() == "on" ? "checked ='checked'" : "";
$check29 = $A->getMacaco() == "on" ? "checked ='checked'" : "";  
    




?>



<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel = "stylesheet" type="text/css" href = "../css/estilo.css" >
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <!-- Font Awesome -->

        <title> Vistoria</title>
    </head>
    <body>

        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">

            <!-- Logo -->
            <a href="vistoria.php" class="navbar-brand">Digital Vistorias</a>

            <!-- Menu Hamburguer -->
            <button class="navbar-toggler" data-toggle="collapse" 
                    data-target="#navegacao2">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- navegacao -->
            <div class="collapse navbar-collapse" id="navegacao2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="dadosAssociado.php" class="nav-link">Associado</a>
                    </li>
                    <li class="nav-item">
                        <a href="dadosVeiculo.php" class="nav-link">Veiculo</a>
                    </li>

                    <li class="nav-item">
                        <a href="checklist.php" class="nav-link ">Checklist</a>
                    </li>
                    <li class="nav-item">
                        <a href="danosAvarias.php" class="nav-link ">Danos/Avarias</a>
                    </li>
                    <li class="nav-item">
                        <a href="documentos.php" class="nav-link ">Documentos</a>
                    </li>
                    <li class="nav-item ">
                        <a href="logout2.php" class="nav-link">Sair</a>

                    </li>


                </ul>
            </div>

        </nav>
        <div class="container">
            <?php
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>
            <h4 class="text-center text-dark pt-2">Checklist</h3>
            <form action="../movimento/movimentoVistoria.php" method="POST">
                    <label for="logradouro">Dados Vistoria</label>
                    <div class="input-group">
                        
                        <input class="form-control" name="vistoriador" type="text"  value ="<?php echo $B->getVitoriador(); ?>" placeholder="Vistoriador">
                        <input class="form-control" name="data" type="date" value ="<?php echo $B->getData(); ?>" placeholder="Data">
                    </div> 
                    <label for="logradouro">Local/ Placa</label>
                    <div class="input-group">
                        <input class="form-control" name="local" type="text" value ="<?php echo $B->getLocal(); ?>"placeholder="Digite a Cidade">
                        <input class="form-control" name="placa" type="text" value ="<?php echo $B->getPlaca(); ?>">
                    </div> 

                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check1; ?>  name="retrovisoreletrico" id="retrovisoreletrico">
                        <label class="custom-control-label" for="retrovisoreletrico">Retrovisor Eletrico</label>
                    </div>


                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check2; ?> name="vidroeletrico" id="vidroeletrico">
                        <label class="custom-control-label" for="vidroeletrico">Vidro Elétrico</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check3; ?> name="travaeletrica" id="travaeletrica">
                        <label class="custom-control-label" for="travaeletrica">Trava Elétrica</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check4; ?> name="frisos" id="frisos">
                        <label class="custom-control-label" for="frisos">Frisos Laterais</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check5; ?> name="farolneblina" id="farolneblina">
                        <label class="custom-control-label" for="farolneblina">Farol de Neblimna</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check6; ?> name="rodasliga" id="rodasliga">
                        <label class="custom-control-label" for="rodasliga">Rodas Liga/Especial</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check7; ?> name="protetorcacamba" id="protetorcacamba">
                        <label class="custom-control-label" for="protetorcacamba">Protetor de Caçamba</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check8; ?> name="chavecod" id="chavecod">
                        <label class="custom-control-label" for="chavecod">Chave Codificada</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check9; ?> name="capota" id="capota">
                        <label class="custom-control-label" for="capota">Capota</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check10; ?> name="abs" id="abs">
                        <label class="custom-control-label" for="abs">ABS</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check11; ?> name="tetosolar" id="tetosolar">
                        <label class="custom-control-label" for="tetosolar">Teto Solar</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check12; ?> name="radiocd" id="radiocd">
                        <label class="custom-control-label" for="radiocd">Rádio CD Player</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check13; ?> name="disqueteria" id="disqueteria">
                        <label class="custom-control-label" for="disqueteria">Disqueteria</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check14; ?> name="paineldigital" id="paineldigital">
                        <label class="custom-control-label" for="paineldigital">Painel Digital</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check15; ?> name="cambioautomatico" id="cambioautomatico">
                        <label class="custom-control-label" for="cambioautomatico">Cambio Automático</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check16; ?> name="direcaohidraulica" id="direcaohidraulica">
                        <label class="custom-control-label" for="direcaohidraulica">Direção Hidráulica</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check17; ?> name="autofalante" id="autofalante">
                        <label class="custom-control-label" for="autofalante">Auto Falantes</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check18; ?> name="amplificador" id="amplificador">
                        <label class="custom-control-label" for="amplificador">Amplificador</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check19; ?> name="bancocouro" id="bancocouro">
                        <label class="custom-control-label" for="bancocouro">Banco de Couro</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check20; ?> name="ar" id="ar">
                        <label class="custom-control-label" for="ar">Ar Condicionado</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check21; ?> name="antenainterna" id="antenainterna">
                        <label class="custom-control-label" for="antenainterna">Antena Interna</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check22; ?> name="console" id="console">
                        <label class="custom-control-label" for="console">Console</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check23; ?> name="tapete" id="tapete">
                        <label class="custom-control-label" for="tapete">Tapete</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check24; ?> name="tampao" id="tampao">
                        <label class="custom-control-label" for="tampao">Tampão Trazeiro</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input"<?php echo $check25; ?> name="alarme" id="alarme">
                        <label class="custom-control-label" for="alarme">Alarme</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check26; ?> name="extintor" id="extintor">
                        <label class="custom-control-label" for="extintor">Extintor</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check27; ?> name="airbag" id="airbag">
                        <label class="custom-control-label" for="airbag">Air Bag</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check28; ?> name="triangulo" id="triangulo">
                        <label class="custom-control-label" for="triangulo">Triângulo</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check29; ?> name="macaco" id="macaco">
                        <label class="custom-control-label" for="macaco">Macaco</label>
                    </div>
                    <input  type="hidden" name="codigo" value ="<?php echo $codigo; ?>">
                    <input  type="hidden" name="controle" value ="<?php echo $controle; ?>">
                    <input  class="btn btn-primary" type="submit" name="enviar" value="Enviar">
                </form>

        </div>



        <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
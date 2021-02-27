<?php
require_once '../classes/vistoria.php';
require_once '../classes/checklistcarro.php';
require_once '../classes/checklistmoto.php';

$placa = $_SESSION['usuario'];
$codigo = $_SESSION['codvistoria'];
$controle = $_SESSION['controle'];
$tipo = $_SESSION['tipo'];

$B = new vistoria("","","" ,"", "","","","", "", "", "", "", "","","    ");
$B->mostra($codigo, $link);

 
$A = new checklistmoto("","","","","","","","","","","","");
$A->mostra2($controle, $link);


$check1 = $A->getFreiodiscod() == "on" ? "checked ='checked'" : "";
$check2 = $A->getFreiodiscot() == "on" ? "checked ='checked'" : "";
$check3 = $A->getRodaliga() == "on" ? "checked ='checked'" : "";
$check4 = $A->getCarenagem() == "on" ? "checked ='checked'" : "";
$check5 = $A->getAlarme() == "on" ? "checked ='checked'" : "";
$check6 = $A->getPartida() == "on" ? "checked ='checked'" : "";
$check7 = $A->getChave() == "on" ? "checked ='checked'" : "";
$check8 = $A->getBloqueador() == "on" ? "checked ='checked'" : "";





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
                        <input type="checkbox" class="custom-control-input" <?php echo $check1; ?>  name="freiodiscod" id="freiodiscod">
                        <label class="custom-control-label" for="freiodiscod">Freio a Disco Dianteiro</label>
                    </div>


                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check2; ?> name="freiodiscoe" id="freiodiscoe">
                        <label class="custom-control-label" for="freiodiscoe">Freio a Disco Traseiro</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check3; ?> name="rodaliga" id="rodaliga">
                        <label class="custom-control-label" for="rodaliga">Rodas Liga /Especial</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check4; ?> name="carenagem" id="carenagem">
                        <label class="custom-control-label" for="carenagem">Carenagem Esportiva</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check5; ?> name="alarme" id="alarme">
                        <label class="custom-control-label" for="alarme">Alarme de Presença</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check6; ?> name="partida" id="partida">
                        <label class="custom-control-label" for="partida">Partida Elétrica</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check7; ?> name="chave" id="chave">
                        <label class="custom-control-label" for="chave">Chave Codificada</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check8; ?> name="bloqueador" id="bloqueador">
                        <label class="custom-control-label" for="bloqueador">Bloqueador</label>
                    </div>
                    
                    <input  type="hidden" name="codigo" value ="<?php echo $codigo; ?>">
                    <input  type="hidden" name="controle" value ="<?php echo $controle; ?>">
                    <input  class="btn btn-primary" type="submit" name="enviarmoto" value="Enviar">
                </form>

        </div>



        <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
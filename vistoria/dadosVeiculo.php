<?php
session_start();
include '../movimento/procedimentos.php';
require_once '../classes/veiculo.php';
require_once '../classes/vistoria.php';
require_once '../classes/associado.php';

$placa = $_SESSION['usuario'];

$A = new veiculo("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "","");



$A->mostra5($placa, $link);
?>

<!DOCTYPE php>
<php lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel = "stylesheet" type="text/css" href = "../css/estilo.css" >
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
        <!-- Font Awesome -->
        <script src="../js/funcoes.js"></script>

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
            <h4 class="text-center text-dark pt-2">Consultar Veiculo</h3>

                <!-- caixas de texto -->
                <form action="../movimento/movimentoVeiculo.php" method="Post">


                    <br>
                    <label for="logradouro">Tabel FIPE/Cod FIPE/Cota/Plano</label>  
                    <div class="input-group">
                        <input class="form-control" id="tabelafipe" name="tabelafipe" type="text" value ="<?php echo $A->getTabelafipe(); ?>"  placeholder="Tabela FIPE" readonly>
                        <input class="form-control" id="codfipe" name="codfipe" type="text" value ="<?php echo $A->getCodfipe(); ?>" placeholder="Cód FIPE" readonly>
                        <input class="form-control" type="text" id="cota" name="cota" value ="<?php echo $A->getCota(); ?>" placeholder="N da Cota" readonly>
                        <input class="form-control" type="text" id="plano" name="plano" value ="<?php echo $A->getPlano(); ?>" placeholder="Plano" readonly>
                    </div> 
                    <br>
                    <label for="logradouro">Tipo/Portas/Alienado</label>  
                    <div class="input-group">
                        <select class="form-control" value ="<?php echo $A->getTipo(); ?>" name="tipo" id="tipo" readonly>
                            <option><?php echo $A->getTipo(); ?></option>
                            <option>Carro</option>
                            <option>Moto</option>
                            <option>Van</option>
                            <option>Especial</option>
                            <option>taxi</option>
                            <option>App</option>
                            <option>Utilitário</option>
                        </select>


                        <select class="form-control" name="portas" id="portas" readonly>
                            <option><?php echo $A->getPortas(); ?></option>
                            <option>2</option>
                            <option>4</option>
                        </select>
                        <select class="form-control" name="alienado" id="alienado" readonly>
                            <option><?php echo $A->getAlienado(); ?></option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>

                    </div>
                    <br>
                    <label for="logradouro">Marca/Cor//combustível</label>  
                    <div class="input-group">
                        <input class="form-control" type="text" value ="<?php echo $A->getMarca(); ?>" id="marca" name="marca" placeholder="Marca" readonly>
                        <input class="form-control" type="text" name="cor" id="cor" value ="<?php echo $A->getCor(); ?>" placeholder="Cor" readonly>
                        <input class="form-control" type="text" name="combustivel" id="combustivel" value ="<?php echo $A->getCombustivel(); ?>" placeholder="Combustível" readonly>

                    </div> 
                    <br>
                    <label for="logradouro">Modelo/Ano/Placa</label>  
                    <div class="input-group">
                        <input class="form-control" type="text" name="modelo" id="modelo" value ="<?php echo $A->getModelo(); ?>" placeholder="Modelo" readonly>
                        <input class="form-control" type="text" name="ano" id="ano" value ="<?php echo $A->getAno(); ?>" placeholder="Ano Fab" readonly>
                        <input class="form-control" type="text" name="placa" id="placa" value ="<?php echo $A->getPlaca(); ?>" placeholder="Placa" readonly>

                    </div> 
                    <br>
                    <label for="logradouro">Renavam/Chassi/KM</label>  
                    <div class="input-group">
                        <input class="form-control" type="text" name="renavam" id="renavam" value ="<?php echo $A->getRenavam(); ?>" placeholder="Renavam" readonly>
                        <input class="form-control" type="text" name="chassi" id="chassi" value ="<?php echo $A->getChassi(); ?>" placeholder="Chassi" readonly>
                        <input class="form-control" type="text" name="km" id="km" value ="<?php echo $A->getKm(); ?>" placeholder="KM" readonly>
                    </div> 
                    <br>
                    <label for="logradouro">Potência/Cilindrada/rastreador</label>  
                    <div class="input-group">
                        <input class="form-control" type="text" name="potencia" id="potencia" value ="<?php echo $A->getPotencia(); ?>" placeholder="Potência" readonly>
                        <input class="form-control" type="text" name="cilindrada" id="cilindrada" value ="<?php echo $A->getCilindrada(); ?>" placeholder="Cinlindrada" readonly>



                        <select class="form-control" readonly name="rastreador" id="rastreador"  >
                            <option><?php echo $A->getRastreador(); ?></option>
                            <option>sim</option>
                            <option>Não</option>
                        </select>
                    </div> 
                    <br>

                    <br><br>
                    <input type ="hidden" id="codigo" value ="<?php echo $A->getCodigo(); ?>" name="codigo"/>
                    <input name="codassociado" id="codassociado" type="hidden" value ="<?php echo $A->getCodassociado(); ?>" >
                    <input name="nomeassociado" id="nomeassociado" type="hidden" value ="<?php echo $A->getNomeassociado(); ?>">


                    <button  class="btn btn-primary" type="button" onclick="alterarVeiculo()">Alterar</button>

                    <input  class="btn btn-primary" type="submit" name="enviar" value="Confirmar dados">


                </form>

        </div>



        <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
    </body>
</php>
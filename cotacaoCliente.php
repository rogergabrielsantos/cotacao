<?php
session_start();
include 'movimento/procedimentos.php';
require_once 'classes/cotacao.php';
include 'classes/vendedor.php';




$codigo = $_GET['cod'];
$A = new cotacao("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
$A->mostra($codigo, $link);


$nome = $A->getNome();
$data = $A->getData();
$telefone = $A->getTelefone();
$email = $A->getEmail();
$telefone2 = $A->getTelefone2();
$modelo = $A->getModelo();
$placa = $A->getPlaca();
$ano = $A->getAno();
$fipe = $A->getFipe();
$plano = $A->getPlano();
$valor = $A->getValor();
$estado1 = "";
$estado2 = "";
$estado3 = "";
$estado4 = "";
$estado5 = "";
$codvendedor = $A->getCodvendedor();
$B = new vendedor("", "", "", "", "", "", "", "");
$B->mostra($codvendedor, $link);
$nomevendedor = $B->getNome();


$C = $A->getCarro() == "on" ? "checked ='checked'" : "";
$AP = $A->getApp() == "on" ? "checked ='checked'" : "";
$P = $A->getProtecao() == "on" ? "checked ='checked'" : "";
$VN = $A->getVidrosn() == "on" ? "checked ='checked'" : "";
$VI = $A->getVidrosi() == "on" ? "checked ='checked'" : "";
$R = $A->getRoubo() == "on" ? "checked ='checked'" : "";
$AS = $A->getAssistencia() == "on" ? "checked ='checked'" : "";
?>


<!DOCTYPE php>
<php lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel = "stylesheet" type="text/css" href = "css/estilo.css" >
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!-- Font Awesome -->
        <script src="js/funcoes.js"></script>
        <title>Login Vistoria</title>
    </head>
    <body>


        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">

            <!-- Logo -->
            <a href="" class="navbar-brand">Digital Vistorias</a>

            <!-- Menu Hamburguer -->
            <button class="navbar-toggler" data-toggle="collapse" 
                    data-target="#navegacao2">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- navegacao -->
            <div class="collapse navbar-collapse" id="navegacao2">
                <ul class="navbar-nav ml-auto">
                                     <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" 
                           data-toggle="dropdown">Cotação</a>

                        
                    </li>
                    <li class="nav-item ">
                        <a href="logout.php" class="nav-link">Sair</a>

                    </li>


                </ul>
            </div>

        </nav>
        <div class="container">
<h4 class="text-center text-dark pt-2">Cotação Clinte </h3>
  <!-- caixas de texto -->
   <form action="movimento/movimentoCotacao.php" method="POST">
            <label for="email">Nome/Data</label>
            <div class="input-group">
                <input class="form-control" type="text"  name="nome" value ="<?php echo $nome; ?>">
                <input class="form-control" name="data" type="date" value ="<?php echo $data; ?>" >

            </div>
            <label for="email">Telefone 1/Telefone 2/Email</label>
            <div class="input-group">
                <input class="form-control" type="text" name="telefone" onkeypress="$(this).mask('(00) 0000-00009')"  value ="<?php echo $telefone; ?>">
                <input class="form-control" type="text" name="telefone2" onkeypress="$(this).mask('(00) 0000-00009')"  value ="<?php echo $telefone2; ?>">
                <input class="form-control" type="email" name="email" value ="<?php echo $email; ?>">
            </div> 
            <label for="logradouro">Modelo/Ano/Placa</label>
            <div class="input-group">
                <input class="form-control" name="modelo" type="text" value ="<?php echo $modelo; ?>">
                <input class="form-control" name="ano" type="text" value ="<?php echo $ano; ?>">
                <input class="form-control" type="text" name="placa"  value ="<?php echo $placa; ?>" >

            </div> 

            <br>
            <label for="logradouro">Tabela FIPE/Plano</label>
            <div class="input-group">
                <input class="form-control" type="text" name="fipe" value ="<?php echo $placa; ?>">
           
                    
                <select class="form-control" name="plano" id="tipo">
                    <option>Plano Básico</option>
                    <option>Plano Plus</option>
                    <option>Plano Top</option>

                </select>
            </div>
            <br>
            <label for="logradouro">Opcionais</label>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" <?php echo $C; ?>class="custom-control-input"   name="carro"  id="carro">
                <label class="custom-control-label" for="carro">Carro Reserva 7 dias</label>
            </div>


            <div class="custom-control custom-checkbox">
                <input type="checkbox" <?php echo $AP; ?> class="custom-control-input" name="app" id="app">
                <label class="custom-control-label" for="app">APP</label>
            </div>


            <div class="custom-control custom-checkbox">
                <input type="checkbox" <?php echo $P; ?> class="custom-control-input" name="protecao" id="protecao">
                <label class="custom-control-label" for="protecao">Proteção Contra Terceiros(somente casco)</label>
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" <?php echo $VN; ?> class="custom-control-input" name="vidrosn" id="vidrosn">
                <label class="custom-control-label" for="vidrosn">Proteção de Vidros Nacional</label>
            </div>


            <div class="custom-control custom-checkbox">
                <input type="checkbox" <?php echo $P; ?> class="custom-control-input" name="vidrosi" id="vidrosi">
                <label class="custom-control-label" for="vidrosi">Proteção de Vidros Importado</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" <?php echo $R; ?> class="custom-control-input" name="roubo" id="roubo">
                <label class="custom-control-label" for="roubo">Roubo/Furto/Incêndio/colisão</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" <?php echo $AS; ?> class="custom-control-input" name="assistencia" id="assistencia">
                <label class="custom-control-label" for="assitencia">Assistência 24 horas</label>
            </div>
            <br>
            <label for="logradouro">Valor da Cotação</label>
            <div class="input-group">
                <input class="form-control" type="text" name="fipe" placeholder="Dgite o valor da cotação">
            </div> 
            <br>

            <input class="form-control" type="hidden" value ="<?php echo $codigo; ?>" name="codigo">
            
            <div class="custom-control custom-checkbox">
                <input type="checkbox"  class="custom-control-input" name="aceite" id="aceite">
                <label class="custom-control-label" for="assitencia">Aceito a Proposta Acima</label>
            </div>
            <br>
            
         <input  class="btn btn-primary" type="submit" name="aprovar" value="Aprovar Cotaçõa">
            



        </form>

</div>>
<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
</body>
</php>
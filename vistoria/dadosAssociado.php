<?php
session_start();
include '../movimento/procedimentos.php';
require_once '../classes/vendedor.php';
require_once '../classes/vistoria.php';
require_once '../classes/associado.php';


$placa = $_SESSION['usuario'];
$controlevistoria = $_SESSION['controle'];
$codigo = $_SESSION['codvistoria'];

$A = new vistoria("","","","","","","","","","","","","","","","");
$A->mostra($codigo, $link);

$codassociado = $A->getCodassociado();

$B = new associado("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "","");
$B->mostra($codassociado, $link);
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head><meta charset="gb18030">
        <!-- Meta tags Obrigatórias -->

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel = "stylesheet" type="text/css" href = "../css/estilo.css" >
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
                        <a href="" class="nav-link">Associado</a>
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
            <h4 class="text-center text-dark pt-2">Dados Associado</h3>
                <form action="../movimento/movimentoAssociado.php" method="Post" >
                    <input type ="hidden" name="codigo"  value ="<?php echo $codassociado; ?>"/>

                    <div class="form-group">
                        <label for="logradouro">Nome:</label>
                        <input class="form-control" type="text"  name="nome" id="nome" value ="<?php echo $B->getNome(); ?>" readonly>
                    </div>
                    <label for="logradouro">CPF E IDENTIDADE:</label>
                    <div class="input-group">
                        <input class="form-control" name="cpf" type="text" id="cpf" value ="<?php echo $B->getCpf(); ?>" readonly>
                        <input class="form-control" type="text" id="identidade" value ="<?php echo $B->getIdentidade(); ?>" name="identidade"  readonly>

                    </div> 
                    <label for="logradouro">CNH E NASCIMENTO:</label>
                    <div class="input-group">

                        <input class="form-control" type="text" name="cnh" id="cnh" value ="<?php echo $B->getCnh(); ?>" readonly>
                        <input class="form-control" name="nascimento"  id="nascimento" type="date" value ="<?php echo $B->getNascimento(); ?>"  readonly>

                    </div> 
                    <label for="logradouro">Estado Civil:</label>

                    <div class="input-group">

                        <input class="form-control" type="text" name="estadocivil" id="estadocivil" value ="<?php echo $B->getEstadocivil(); ?>" readonly>

                    </div>


                    <label for="logradouro">Logradouro e Numero</label>      
                    <div class="input-group">
                        <input class="form-control" type="text" id="logradouro" value ="<?php echo $B->getLogradouro(); ?>" name="logradouro"   readonly>
                        <input class="form-control" type="text" id="numero" name="numero" value ="<?php echo $B->getNumero(); ?>"  readonly>
                    </div>
                    <label for="logradouro">Bairro e Cidade</label>      
                    <div class="input-group">
                        <input class="form-control" type="text" id="bairro" value ="<?php echo $B->getBairro(); ?>" name="bairro" placeholder="Bairro" readonly>
                        <input class="form-control" type="text" id="cidade" name="cidade" value ="<?php echo $B->getCidade(); ?>" placeholder="Cidade" readonly>
                    </div>
                    <label for="logradouro">Estado e Cep</label>      
                    <div class="input-group">
                        <input class="form-control" type="text" id="estado" value ="<?php echo $B->getEstado(); ?>" name="estado" placeholder="Estado" readonly>
                        <input class="form-control" type="text" id="cep" name="cep" value ="<?php echo $B->getCep(); ?>" placeholder="Cep" readonly>
                    </div>


                    <label for="email">Contatos</label>
                    <div class="input-group">
                        <input class="form-control" type="text" name="telefone" id="telefone"  value ="<?php echo $B->getTelefone(); ?>" placeholder="Telefone" readonly>
                        <input class="form-control" type="text" name="telefone2" id="telefone"  value ="<?php echo $B->getTelefone2(); ?>" placeholder="Telefone" readonly>
                        <input class="form-control" type="email" name="email" id="email" value ="<?php echo $B->getEmail(); ?>" placeholder="Email" readonly>
                    </div> 





                    <br>



                    <button  class="btn btn-primary" type="button" onclick="alterarAssociado()">Alterar</button>

                    <input  class="btn btn-primary" type="submit" name="confirmar" value="Confimar Dados">



                </form>
        </div>



        <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


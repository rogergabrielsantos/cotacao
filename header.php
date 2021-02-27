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
            <a href="menu.php" class="navbar-brand">Digital Vistorias</a>

            <!-- Menu Hamburguer -->
            <button class="navbar-toggler" data-toggle="collapse" 
                    data-target="#navegacao2">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- navegacao -->
            <div class="collapse navbar-collapse" id="navegacao2">
                <ul class="navbar-nav ml-auto">
                    <?php
                    if ($_SESSION['perfil'] == 1) {
                        ?>

                        <li class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" 
                               data-toggle="dropdown">Parceiros/Consultores</a>

                            <div class="dropdown-menu">
                                <a href="cadastroVendedor.php" class="dropdown-item">Cadastrar</a>
                                <a href="consultaVendedor2.php" class="dropdown-item">Consultar/alterar</a>
                                <a href="consultausuarios.php" class="dropdown-item">Usuarios</a>
                            </div>

                        </li>
                        <?php
                    }
                    ?>
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" 
                           data-toggle="dropdown">Cotações</a>

                        <div class="dropdown-menu">
                            <a href="cadastroCotacao.php" class="dropdown-item">Cadastrar</a>
                            <a href="consultaCotacao.php" class="dropdown-item">Consultar/alterar</a>
                            <a href="" class="dropdown-item">ficha</a>
                        </div>

                    </li>
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" 
                           data-toggle="dropdown">Associados</a>

                        <div class="dropdown-menu">
                            <a href="cadastroAssociado.php" class="dropdown-item">Cadastrar</a>
                            <a href="consultaAssociado.php" class="dropdown-item">Consultar/alterar</a>
                            <a href="" class="dropdown-item">ficha</a>
                        </div>

                    </li>
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" 
                           data-toggle="dropdown">Veículos</a>

                        <div class="dropdown-menu">
                            <a href="cadastroVeiculo1.php" class="dropdown-item">Cadastrar</a>
                            <a href="consultaVeiculo.php" class="dropdown-item">Consultar/alterar</a>
                            <a href="" class="dropdown-item">ficha</a>
                        </div>

                    </li>
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" 
                           data-toggle="dropdown">Filiação</a>

                        <div class="dropdown-menu">
                            <a href="buscaFiliar.php" class="dropdown-item">Fazer Filiação</a>
                            <a href="bucarfiliar2.php" class="dropdown-item">Consultar Filiação</a>
                            <a href="filiacaopend.php" class="dropdown-item">Pendencias</a>
                        </div>

                    </li>

                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" 
                           data-toggle="dropdown">Vistorias</a>

                        <div class="dropdown-menu">
                            <a href="solicitaVistoria.php" class="dropdown-item">Solicitar Vistoria</a>
                            <a href="consultaVistoria.php" class="dropdown-item">Consultar Vistorias</a>
                            <a href="" class="dropdown-item">Validar Vistorias</a>
                        </div>

                    </li>
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" 
                           data-toggle="dropdown">Relatórios</a>

                        <div class="dropdown-menu">
                            <a href="emitefiliacao.php" class="dropdown-item">Emitir Filiação</a>
                            <a href="regulamento.php" target="_blank" class="dropdown-item">Regulamento</a>
                            <a href="manual.php" class="dropdown-item" target="_blank">Manual</a>
                            <a href="/relatorios/manual.php" class="dropdown-item">Boleto</a>
                        </div>

                    </li>

                    <li class="nav-item ">
                        <a href="logout.php" class="nav-link">Sair</a>

                    </li>


                </ul>
            </div>

        </nav>


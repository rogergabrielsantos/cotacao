<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel = "stylesheet" type="text/css" href = "css/estilo.css" >
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <!-- Font Awesome -->

        <title>Login Vistoria</title>
    </head>
    <body>
        <div class="container">

            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-5 col-12 ">
                    <div class="box-parent-login">
                        <div class="well bg-white box-login"> <?php
                            if (isset($_SESSION['msg'])) {
                                echo $_SESSION['msg'];
                                unset($_SESSION['msg']);
                            }
                            ?>

                            <h3 class="text-center text-dark pt-5">Tela de Login</h3>
                            <form role="form" action="autenticacao.php" method="Post">
                                <fieldset>

                                    <div class="form-group ls-login-user">
                                        <label for="userLogin">Usuário</label>
                                        <input class="form-control ls-login-bg-user input-lg" id="userLogin" type="text" aria-label="Usuário" name="usuario" placeholder="Digite seu usuário" required>
                                    </div>

                                    <div class="form-group ls-login-password">
                                        <label for="userPassword">Senha</label>
                                        <input class="form-control ls-login-bg-password input-lg" id="userPassword" type="password" name="senha" aria-label="Senha" placeholder="Digite sua senha" required>
                                    </div>

                                    <a href="esquecisenha.php" class="ls-login-forgot">Esqueci minha senha</a>

                                    <input type="submit" value="Entrar" class="btn btn-primary btn-lg btn-block">


                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
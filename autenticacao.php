<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>login</title>

        <script type="text/javascript">
            function login() {
                setTimeout("window.location='menu.php'");

            }

        </script>

    </head>
    <body>

        <?php
        include 'movimento/conexao.php';
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        //teste sql injection
        if (strlen($usuario) > 13 OR strlen($senha) > 6) {
            echo ("<script type='text/javascript'> location.href='index.php';</script>");
            $_SESSION['msg'] = "<div class='alert alert-success'>Usuário ou senha incorretos !!!</div>";
        } else {



            $sql = mysqli_query($link, "SELECT * FROM usuarios WHERE usuario ='$usuario' and senha = '$senha' and status= 'Ativo'") or die(mysqli_error());

            $row = mysqli_num_rows($sql);

            if ($row == 1) {
                while ($row = mysqli_fetch_array($sql)) {
                    $perfil = $row['perfil'];
                    $nome = $row['nome'];
                    $cpf = $row['cpf'];
                    $acesso = $row['primeiroacesso'];
                    $cod = $row['cod'];
                }
                $_SESSION['usuario'] = $usuario;
                $_SESSION['senha'] = $senha;
                $_SESSION['perfil'] = $perfil;
                $_SESSION['nome'] = $nome;
                $_SESSION['cpf'] = $cpf;


                //testa se é primeiro acesso
                if ($acesso == "sim") {
                    echo ("<script type='text/javascript'> location.href='mudarsenha.php?cod="
                    . $cod . "';</script>");
                } else {
                    //teste se é um vendedor e busca o codigo do vendedor pelo CPF
                    if ($perfil == "2") {
                        $sql = mysqli_query($link, "SELECT * FROM vendedor WHERE cpf ='$cpf'") or die(mysqli_error());
                        $row = mysqli_num_rows($sql);
                        while ($row = mysqli_fetch_array($sql)) {
                        
                        $_SESSION['codvendedor'] = $row['cod'];
                         }
                        
                         }
                    echo "<script>login()</script>";
                }
            } else {

                echo ("<script type='text/javascript'> location.href='index.php';</script>");
                $_SESSION['msg'] = "<div class='alert alert-success'>Usuário ou senha incorretos!!!</div>";
            }
        }
        ?>

    </body>
</html>
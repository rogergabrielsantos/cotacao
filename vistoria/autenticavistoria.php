<?php
session_start();
?>
<<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>login</title>

        <script type="text/javascript">
            function login() {
                setTimeout("window.location='vistoria.php'");

            }

        </script>

    </head>
    <body>



        <?php
        include '../movimento/conexao.php';

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];



        $sql = mysqli_query($link, "SELECT * FROM vistoria WHERE placa ='$usuario' and controlevistoria = '$senha'") or die(mysqli_error());

        $row = mysqli_num_rows($sql);

        if ($row == 1) {
            while ($row = mysqli_fetch_array($sql)) {
                $perfil = "3";
                $_SESSION['codvistoria'] = $row['cod'];
                $_SESSION['controle'] = $row['controlevistoria'];
                $_SESSION['tipo'] = $row['tipoveiculo'];
            }
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            $_SESSION['perfil'] = $perfil;


            echo "<script>login()</script>";
        } else {

            echo ("<script type='text/javascript'>location.href='logoin.php';</script>");
            $_SESSION['msg'] = "<div class='alert alert-success'>Usuário ou senha incorretos !!!</div>";
        }
        ?>

    </body>
</html>
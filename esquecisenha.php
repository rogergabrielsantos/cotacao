<?php
include 'movimento/conexao.php';
require_once 'classes/usuarios.php';
require_once 'classes/vendedor.php';
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : "";
if ($cpf != "") {
    $A = new usuarios("", "", "", "", "", "", "", "");
    $A->mostra2($link, $cpf);
    $senha = $A->getSenha();
    $B = new vendedor("", "", "", "", "", "", "", "");
    $B->mostra1($cpf, $link);
    $email = $B->getEmail();

    if ($email) {
        $mensagem = "Sua sesnha de acesso é: $senha";
        if (mail($email, "Recuperação de Senha", $mensagem, "From: SICAR VISTORIAS")) {
           echo("<script type='text/javascript'> alert('CPF NÃO ENCONTRADO!!!'); location.href='index.php';</script>");
        } else {
            echo " email NÃO enviado!";
        };
        
    } else {
        echo("<script type='text/javascript'> alert('CPF NÃO ENCONTRADO!!!'); location.href='esquecisenha.php';</script>");
    }
}
?>
<!DOCTYPE php>
<php lang = "pt-br">
    <head>
        <!--Meta tags Obrigatórias -->
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel = "stylesheet" type = "text/css" href = "css/estilo.css" >
        <!--Bootstrap CSS -->
        <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity = "sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin = "anonymous">
        <link rel = "stylesheet" href = "https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity = "sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin = "anonymous">

        <!--Font Awesome -->
        <script src = "js/funcoes.js"></script>
        <title>Login Vistoria</title>
    </head>
    <body>


        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">

            <!-- Logo -->
            <a href="index.php" class="navbar-brand">Digital Vistorias</a>

            <!-- Menu Hamburguer -->
            <button class="navbar-toggler" data-toggle="collapse" 
                    data-target="#navegacao2">
                <span class="navbar-toggler-icon"></span>
            </button>

        </nav>



        <div class="container">
            <h4 class="text-center text-dark pt-2">Recuperação de senha de Usuários</h3>
            <form action="esquecisenha.php" method= "POST">
                    <div class="input-group">
                        <input class="form-control" type="text" name="cpf"  placeholder="Digite seu CPF" >
                        <div class="input-group-append">

                            <input  class="btn btn-primary" type="submit" value="Pesquisar">
                        </div>
                    </div>
                </form>

        </div>



    </body>
</php>

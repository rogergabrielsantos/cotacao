<?php
session_start();
include 'movimento/procedimentos.php';
require_once 'classes/usuarios.php';

require_once ('header.php');
$cod = $_GET['cod'];
$A = new usuarios("", "", "", "", "", "", "");
$A->mostra1($link, $cod);
?>


<div class="container">
    <h4 class="text-center text-dark pt-2">Alteração de senha de Usuários</h3>

        <table class="table table-striped">
            <tr>
                <td>Nome</td><td>Usuario</td><td>Nova Senha</td><td></td><td colspan="3">Ação</td>
            </tr>
            <?php
            echo ' 
                       <form action="movimento/movimentousuarios.php" method= "POST">
                        <tr>
                        <td><input class = "form-control" type = "text" name = "nome" value = "' . $A->getNome() . '" readonly> </td><td><input class = "form-control" type = "text" name = "usuario" value = "' . $A->getUsuario() . '" readonly></td><td><input class = "form-control" type = "text" name = "senha"  required></td>'
            . '<td></td>
               <td></td><td><input  name="mudar" type=image src="imagens/salvar.png"></td>
                        </tr>
                        <input  type=hidden name="codigo" value="' . $A->getCodigo() . '">
                        <input  type=hidden name="cpf" value="' . $A->getCpf() . '">
                         <input  type=hidden name="perfil" value="' . $A->getPerfil() . '">
                        
                        '
            ;
            ?>

            <input  type=hidden name="acesso" value="nao">
            </form>
        </table>


</div>

</div>



<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</php>
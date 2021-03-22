<?php
session_start();
include 'movimento/procedimentos.php';
require_once 'classes/usuarios.php';
$A = new usuarios("", "", "", "", "","","","");
$A->mostra($link);
require_once ('header.php');
?>


<div class="container">
    <h4 class="text-center text-dark pt-2">Consultar Usuários</h3>
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <?php
        ?>
        <table class="table table-striped">
            <tr>
                <td>Nome</td><td>Usuario</td><td>Senha</td><td>Status</td><td>Perfil</td><td colspan="3">Ação</td>
            </tr>
            <?php
            for ($i = 0; $i < count($A->getCodigo()); $i++) {

                echo ' 
                         <form action="movimento/movimentousuarios.php" method= "POST">
                        <tr>
                        <td><input class = "form-control" type = "text" name = "nome" value = "' . $A->getNome()[$i] . '" readonly></td><td><input class = "form-control" type = "text" name = "usuario" value = "' . $A->getUsuario()[$i] . '" readonly></td><td><input class = "form-control" type = "password" name = "senha" value = "' . $A->getSenha()[$i] . '" readonly></td><td><input class = "form-control" type = "text" name = "status" value = "' . $A->getStatus()[$i] . '" readonly></td>'
                . '<td> <select class="form-control" name="perfil" id="diaV" readonly>
                            <option>' . $A->getPerfil()[$i] . '</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            </select></td>
                                    <td> 
                                    <input  type=image name="deletar" src="imagens/lixo.png"></td><td></td>
                        </tr>
                        <input  type=hidden name="codigo" value="' . $A->getCodigo()[$i] . '">
                        </form>
                        
                        '
                ;
            }
            ?>
            <tr><td colspan="6">Novo Usuário</td></tr>
            <tr>
            <form action="movimento/movimentousuarios.php" method= "POST">
                <td><input class = "form-control" type = "text" name = "nome" placeholder="Nome"> </td><td><input class = "form-control" type = "text" name = "usuario" placeholder="Usuário" ></td><td><input class = "form-control" type = "text" name = "senha" placeholder="Senha"> </td>
                <td> <select class="form-control" name="perfil" id="diaV">
                        <option>Perfil</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select></td>
                <td colspan="2"><input  type=image name="salvar" src="imagens/enviar.png"></td>

                </tr>
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
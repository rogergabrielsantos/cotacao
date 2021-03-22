<?php
session_start();
include 'movimento/procedimentos.php';
require_once 'classes/associado.php';
require_once ('header.php');


 if(isset($_POST['associado'])) {
    $associado = $_POST['associado'];
    $A = new associado("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
    if ($_SESSION['perfil'] == "2") {
        $A->mostra3($associado, $link, $_SESSION['codvendedor']);
    } else {
        $A->mostra2($associado, $link);
    }

    $controle = $A->getCodigo();
}
?>
<div class="container">
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <h4 class="text-center text-dark pt-2">Cadastro de Veiculo</h3>
        <form action="cadastroVeiculo1.php" method="Post">

            <div class="input-group">
                <input class="form-control" type="text" name="associado"  placeholder="Digite nome do associado" >
                <div class="input-group-append">

                    <input  class="btn btn-primary" type="submit" value="Pesquisar">
                </div>
            </div>
        </form>
        <form action="cadastroVeiculo.php" method="Post">
            <br>
            <table class="table table-striped">
                <tr><td>Código</td><td>Associado</td><td>CPF</td><td></td></tr>
                <?php
                if (isset($_POST['associado'])) {
                    for ($i = 0; $i < count($A->getCodigo()); $i++) {

                        echo '  
                           
                            <tr>
                            <td>' . $A->getCodigo()[$i] . '</td>
                                <td>' . $A->getNome()[$i] . '</td>
                                    <td>' . $A->getCpf()[$i] . '</td>
                                  
                                  
                                    <td width="30"><input  onclick="codigo(' . $A->getCodigo()[$i] . ')" type="image" src="imagens/cadcarro.png" value="Consulta"></td>
                            </tr>
                           
                            '
                        ;
                    }
                }
                ?>
                <table>
                    <input  class="btn btn-primary" type="hidden" name="cod" id="codaux">
                    </form>

                    </div>



                    <!-- JavaScript (Opcional) -->
                    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
                    </body>
                    </php>
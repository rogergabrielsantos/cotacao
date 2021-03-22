<?php
session_start();
include 'movimento/procedimentos.php';
require_once 'classes/veiculo.php';
require_once 'classes/vistoria.php';
require_once ('header.php');


if (isset($_POST['status'])) {
    $status = $_POST['status'];
    $A = new vistoria("", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
    
    if ($_SESSION['perfil'] == "2") {
        $A->mostra3($status, $link, $_SESSION['codvendedor']);
    } else {
        $A->mostra2($status, $link);
    }
    
    $controle = $A->getControlevistoria();
}
?>

<div class="container">
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>

    <h4 class="text-center text-dark pt-2">Consultar Vistorias</h3>
        <form action="consultaVistoria.php" method="Post">

            <div class="input-group">
                <select class="form-control" name="status" id="protecao">
                    <option></option>
                    <option value="ABERTO">Em Aberto</option>
                    <option value="REALIZADO" >Realizada</option>
                    <option value="VALIDADO">Validada</option>
                </select>
                <div class="input-group-append">

                    <input  class="btn btn-primary" type="submit" value="Pesquisar">
                </div>
            </div>

            <br>

        </form>

        <form action="consultaVistoria2.php" method="Post">

            <?php
            if (isset($_POST['status'])) {
                if ($controle) {
                    ?>
                    <table class="table table-striped">
                        <tr>
                            <td>Associado</td><td>marca</td><td>placa</td><td>Data</td><td>Tipo</td><td>Controle</td><td></td>
                        </tr>
                        <?php
                        for ($i = 0; $i < count($A->getCodigo()); $i++) {

                            echo ' 
      
                                <tr>
                                <td>' . $A->getNomeassociado()[$i] . '</td><td>' . $A->getMarca()[$i] . '</td><td>' . $A->getPlaca()[$i] . '</td><td>' . $A->getData()[$i] . '</td><td>' . $A->getTipo()[$i] . '</td><td>' . $A->getControlevistoria()[$i] . '</td>'
                            . '<td> <input  onclick="codigo(' . $A->getCodigo()[$i] . ')" type="image" src="imagens/conscarro.png" value="Consulta">
                                    </td>
                                </tr>
 
                                '
                            ;
                        }
                        ?>

                    </table>
                    <?php
                }
            }
            ?>
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
<?php
session_start();
include 'movimento/procedimentos.php';
require_once 'classes/veiculo.php';
require_once ('header.php');


if (isset($_POST['marca'])) {
    $marca = $_POST['marca'];
    $A = new veiculo("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "","");
    
    
    if ($_SESSION['perfil'] == "2") {
        $A->mostra6($marca, $link, $_SESSION['codvendedor']);
    } else {
        $A->mostra2($marca, $link);
    }


}
    

?>
<div class="container">
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <h4 class="text-center text-dark pt-2">Consultar Veiculo</h3>
        <form action="consultaVeiculo.php" method="Post">

            <div class="input-group">
                <input class="form-control" type="text" name="marca"  placeholder="Digite a marca do veiculo" >
                <div class="input-group-append">

                    <input  class="btn btn-primary" type="submit" value="Pesquisar">
                </div>
            </div>
        </form>
        <form action="consultaVeiculo2.php" method="Post">
            <br>
            <table class="table table-striped">
                <?php
                if (isset($_POST['marca'])) {
                    for ($i = 0; $i < count($A->getCodigo()); $i++) {

                        echo '    
                     <tr>
                                <td>' . $A->getMarca()[$i] . '</td>
                                <td>' . $A->getModelo()[$i] . '</td>
                                <td>' . $A->getNomeassociado()[$i] . ' </td>
                              
                                <td width="30"><input  onclick="codigo(' . $A->getCodigo()[$i] . ')" type="image" src="imagens/conscarro.png" value="Consulta"></td>
                        
                            </tr>'
                        ;
                    }
                }
                ?>
            </table>    
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
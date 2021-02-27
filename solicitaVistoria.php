<?php
session_start();
include 'movimento/procedimentos.php';
require_once 'classes/veiculo.php';
require_once ('header.php');
$controle ="";

if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
    $A = new veiculo("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "","");
    
    if ($_SESSION['perfil'] == "2") {
        $A->mostra8($nome,$link, $_SESSION['codvendedor']);
       
    } else {
        $A->mostra4($nome,$link);
    }
$controle = isset($A->getNomeassociado()[0])?$A->getNomeassociado()[0]:"";    
  
 
}
  

?>
<div class="container">
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <h4 class="text-center text-dark pt-2">Solicitar Vistoria</h3>
        <form action="solicitaVistoria.php" method="Post">

            <div class="input-group">
                <input class="form-control" type="text" name="nome"  placeholder="Digite o nome do filiado" >
                <div class="input-group-append">

                    <input  class="btn btn-primary" type="submit" value="Pesquisar">
                </div>
            </div>

            <br>

        </form>




        <form action="solicitaVistoria2.php" method="Post">


            <?php
            if ($controle) {
                for ($i = 0; $i < count($A->getCodigo()); $i++) {

                    echo ' 
      
                                <div class="row border border-primary ">
                                <div class="card col-5"  style="padding: 0px;">
   
                                <div class="card-body">
                                <h6 class="card-title">' . $A->getNomeassociado()[$i] . '</h6>
                                <p class="card-title">' . $A->getCodigo()[$i] . '</p>
                                </div>
   
                                </div>
                                <div class="card col-7 text-right">
    
                                <div class="card-body">
                                <h6 class="card-title">' . $A->getMarca()[$i] . '---' . $A->getModelo()[$i] . '---' . $A->getPlaca()[$i] . '</h6>
                                <p class="card-title">           
                                  <input  onclick="codigo(' . $A->getCodigo()[$i] . ')" type="image" src="imagens/solicitar.png" value="Consulta">
                                </div>
                                </div>
  
                                </div>
                                '
                    ;
                }
            }
            ?>

            <input  class="btn btn-primary" type="hidden" name="codv" id="codaux">
        </form>

</div>



<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
</body>
</php>
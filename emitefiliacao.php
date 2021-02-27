<?php
session_start();
include 'movimento/procedimentos.php';
require_once 'classes/veiculo.php';
require_once ('header.php');
$controle = 0;

if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
    $A = new veiculo("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");

    if ($_SESSION['perfil'] == "2") {
        $A->mostra9($nome,$link, $_SESSION['codvendedor']);
    } else {
        $A->mostra10($nome,$link);
    }
  
  $controle = isset($A->getCodigo()[0]) ? $A->getCodigo() : "";  
  
  }
?>
<div class="container">
    <h4 class="text-center text-dark pt-2">Emitir Filiação</h3>
    <form action="emitefiliacao.php" method="Post">

            <div class="input-group">
                <input class="form-control" type="text" name="nome"  placeholder="Digite o nome do filiado" >
                <div class="input-group-append">

                    <input  class="btn btn-primary" type="submit" value="Pesquisar">
                </div>
            </div>

            <br>


        </form>

        <form action="consultaFiliacao.php" method="Post">

            <?php
            if  ($controle > 0) {
                for ($i = 0; $i < count($A->getCodigo()); $i++) {

                    echo ' 
      
                            <div class="row border border-primary ">
                                <div class="card col-3"  style="padding: 0px;">
                                    <div class="card-body">
                                    <h6 class="card-title">Associado</h6>
                                        <h6 class="card-title">' . $A->getNomeassociado()[$i] . '</h6>
                                        <p class="card-title">' . $A->getCodassociado()[$i] . '</p>
                                    </div>
                                 </div>
                                <div class="card col-3 ">
                                    <div class="card-body">
                                        <h6 class="card-title">Veiculo</h6>
                                        <h6 class="card-title">' . $A->getMarca()[$i] . '---' . $A->getModelo()[$i] . '</h6>
                                        <p class="card-title">' . $A->getPlaca()[$i] . '</p>  
                                      
                                    </div>
                                </div>
                                <div class="card col-3"  style="padding: 0px;">
                                    <div class="card-body">
                                    <h6 class="card-title">Vistoria</h6>
                                        <h6 class="card-title">Tipo: ' . $A->getTipovistoria()[$i] . '</h6>
                                        <p class="card-title">Data: ' . $A->getData()[$i] . '</p>
                                    </div>
                                 </div>
                                 <div class="card col-3 text-right"   style="padding: 0px;">
                                    <div class="card-body">
                                     <a href="gerarpdf.php?codi=' . $A->getPlaca()[$i] . '" target="_blank"><img src="imagens/formulario.png"></a>
                                <hr>
                                     <a href="boleto/boleto_bradesco.php?codi=' . $A->getPlaca()[$i] . '" target="_blank"><img src="imagens/boleto.png"></a>
                                 <hr>
                                 <a href="geraremail.php?codi=' . $A->getPlaca()[$i] . '" target="_blank"><img src="imagens/email.png"></a>
                                                                                             
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
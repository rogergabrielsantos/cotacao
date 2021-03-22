<?php
session_start();
include 'movimento/procedimentos.php';
require_once 'classes/filiacao.php';
$A = new filiacao("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");

if ($_SESSION['perfil'] == "2") {
        $A->mostra5($link, $_SESSION['codvendedor']);
    } else {
       $A->mostra4($link);
    }

$controle = isset($A->getNomeassociado()[0])?"ok":""; 
require_once ('header.php');
?>
<div class="container">
<?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
         <h4 class="text-center text-dark pt-2">Filiações Pendentes</h3>
        <div class="container"><form action="consultaFiliacao2.php" method="Post">

                <?php
                if ($controle) {
                    for ($i = 0; $i < count($A->getCodigo()); $i++) {

                        echo ' 
      
                                <div class="row border border-primary ">
                                <div class="card col-5"  style="padding: 0px;">
   
                                <div class="card-body">
                                <h6 class="card-title">' . $A->getNomeassociado()[$i] . '</h6>
                                <p class="card-title">' . $A->getCodassociado()[$i] . '</p>
                                </div>
   
                                </div>
                                <div class="card col-7 text-right">
    
                            <div class="card-body">
                            <h6 class="card-title">' . $A->getCodveiculo()[$i] . '---' . $A->getModelo()[$i] . '---' . $A->getPlaca()[$i] . '</h6>
                            <p class="card-title">           
                            
                             <input  onclick="codigo(' . $A->getCodigo()[$i] . ')" type="image" src="imagens/conscarro.png" value="Consulta">
                        
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


</div>
        <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</php>

<?php
session_start();
include 'movimento/procedimentos.php';
require_once 'classes/cotacao.php';
require_once ('header.php');



    $A = new cotacao("","","","","","","","","","","","","","","","","","","","", "");
    
    if ($_SESSION['perfil'] == "2") {
        $A->mostra5($link, $_SESSION['codvendedor']);
        
        
    } else {
        $A->mostra4($associado, $link);
    }
    
    $controle = $A->getNome()==  "" ? "":"sim";


?>

<div class="container">
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <h4 class="text-center text-dark pt-2">Consultar Cotações Aprovadas </h3>
  
    <form action="consultaCotacao2.php" method="Post">
            <br>
            <table class="table table-striped">
                <?php
               
                    if ($controle) {
                        for ($i = 0; $i < count($A->getCodigo()); $i++) {

                            echo '  
                            
                            <tr>
                                <td>' . $A->getNome()[$i] . '</td>
                                    <td>' . $A->getTelefone()[$i] . '</td>
                                    <td>' . $A->getPlaca()[$i] . '</td>
                                    <td>' . $A->getSituacao()[$i] . '</td>
                                      
                                  
                              <td width="30"><input  onclick="codigo(' . $A->getCodigo()[$i] . ')" type="image" src="imagens/buscar.png" value="Consulta"></td>
                        
                            </tr>
                           
                            '
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
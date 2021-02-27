<?php
session_start();
include 'movimento/procedimentos.php';
require_once 'classes/documentosClasse.php';
require_once ('header.php');

$codigo = $_SESSION['codvistoria'];
$A = new documentosClasse("", "", "", "", "", "", "");
$A->mostra2($codigo, $link);
?>
<div class="container">
    <br>
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="consultaVistoria2.php">Checklist</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="pneus2.php">Pneus</a>
                </li>
                <?php
                if ($_SESSION['tipoveiculo'] !="Moto") {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="danosFrente.php">Visão Frente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="danoTraseira.php">Visão Traseira</a>
                    </li>
                    <?php	
				}
			?>
                <li class="nav-item">
                    <a class="nav-link" href="danoLadoA.php">Visão Lateral A</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="danoLadoB.php">Visão Lateral B</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="documentos2.php">Documentos</a>
                </li>
            </ul>
        </div>
        <div class="card-body">

            <div class="Jumbotron text-center">
                <div class="container">
                     <!--
                    <form action="movimento/movimentodocumentos.php" method="Post" enctype="multipart/form-data">
                        <br>

                        <h5> Docmentos</H5>
                        <div class="input-group">
                            <select class="form-control" name="documento" id="documento">
                                <option>CNH</option>
                                <option>Seguro Obrigatorio</option>
                                <option>Licença</option>
                                <option>Outro</option>

                            </select>
                            <input class="form-control" name="obs" type="text" placeholder="Observação">
                        </div>

                        <div class="input-group">
                            <div class="form-group">
                                <label for="arquivo">Foto</label>
                                <input class="form-control-file" type="file" name="arquivo" id="arquivo">
                            </div>

                        </div>
                        <br><br>
                        <input  class="btn btn-primary" type="submit" name="salvar" value="Salvar">
                    </form>
                 -->
                </div>




            </div>   


        </div>            <br>

        <br><br>

        <?php
        if (isset($A->getDocumento()[0])) {
            ?>
            <table class="table table-striped">

                <?php
                for ($i = 0; $i < count($A->getCodigo()); $i++) {

                    echo ' 
      
   <tr>
   <td>' . $A->getDocumento()[$i] . '</td><td>' . $A->getObs()[$i] . '</td><td><img   width="100"  src="vistoria/upload/' . $A->getFoto()[$i] . '"></td>
   </tr>
 
'
                    ;
                }
                ?>

            </table>
            <?php
        }
        ?>



    </div>


</div>
</div>
<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

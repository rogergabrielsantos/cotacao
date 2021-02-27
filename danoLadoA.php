<?php
session_start();
include 'movimento/procedimentos.php';
require_once 'classes/vendedor.php';
require_once 'classes/danoClasse.php';
require_once ('header.php');

$codigo = $_SESSION['codvistoria'];
if ($_SESSION['tipoveiculo'] != "Moto") {
    $dano = "L";
} else {
    $dano = "MA";
}
$A = new danoClasse("", "", "", "", "", "", "", "");

$A->mostra3($codigo, $dano, $link);
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
                if ($_SESSION['tipoveiculo'] != "Moto") {
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
                    <a class="nav-link active" href="danoLadoA.php">Visão Lateral A</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="danoLadoB.php">Visão Lateral B</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="documentos2.php">Documentos</a>
                </li>
            </ul>
        </div>
        <div class="card-body">

            <div class="Jumbotron text-center">
                <?php
                if ($_SESSION['tipoveiculo'] != "Moto") {
                    ?>
                    <img width=50%   src="imagens/ladoA.png">
                    <?php
                } else {
                    ?>
                    <img width=50%   src="imagens/motoa.png">
                    <?php
                }
                ?>
                <div class="container">
                    <br>
                </div>

            </div>
            <br>

            <?php
            if (isset($A->getCodigo()[0])) {
                ?>
                <table class="table table-striped">

                    <?php
                    for ($i = 0; $i < count($A->getCodigo()); $i++) {

                        echo ' 
      
   <tr>
   <td>' . $A->getDano()[$i] . '</td><td>' . $A->getEstado()[$i] . '</td><td>' . $A->getObs()[$i] . '</td><td><img   width="100"  src="vistoria/upload/' . $A->getFoto()[$i] . '"></td>
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
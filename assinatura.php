<?php
session_start();
include 'movimento/procedimentos.php';
require_once 'classes/vendedor.php';
require_once 'classes/assinaturaclasse.php';
require_once 'classes/vistoria.php';
require_once ('header.php');

$codvistoria = $_SESSION['codvistoria'];
$A = new assinaturaClasse("", "", "", "", "");
$A->mostra($codvistoria, $link);

$B = new vistoria("", "", "", "", "", "", "", "", "", "", "", "", "");
$B->mostra1($codvistoria, $link);
?>

<div class="container">
    <br>
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="consultaVistoria2.php">Vídeo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="chaves.php">Chaves</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="danosFrente.php">Visão Frente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="danoTraseira.php">Visão Traseira</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="danoLadoA.php">Visão Lateral A</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="danoLadoB.php">Visão Lateral B</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="documentos2.php">Documentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="assinatura.php">Assinatura</a>
                </li>
            </ul>
        </div>

        <div class="card-body">

            <table class="table table-striped">
                <thead>
                    <tr><th>Tipo de Filiação</th><th>Data</th><th>Local</th><th>Vistoriador</th> </tr>
                </thead>
                <tbody>
                    <tr><td><?php echo $B->getTipo(); ?></td><td> <?php echo $B->getData(); ?></td><td> <?php echo $B->getLocal(); ?></td><td> <?php echo $B->getVistoriador(); ?></td></tr>
                    <tr><td></td><td></td><td></td><td></td> </tr>
                </tbody>
            </table>

            <h3>Assinatura Cadastrada</h3>
            <?php
            if ($A->getAssinatura()) {
                ?>
                <img src = "<?php echo $A->getAssinatura(); ?>" width = 600 height = 367 />
                <br>
                <input class="form-control" type="hidden" name="possui" value="sim">
                <?php
            }
            ?>


        </div>



        <?php
        if ($B->getStatus() == "confirmada") {
            ?>

            <form action="movimento/movimentoVistoria.php" method="Post">
                <input class="form-control" name="codigo" type="hidden" value="<?php echo $codvistoria; ?>">   

                <br>
                <div class="row">
                    <div class="marcador col-3">
                    </div>

                    <div class="marcador col-6">
                        <input  class="btn btn-primary btn-block" type="submit" name="aprovar" value="Validar Vistoria">
                    </div>
                    <div class="marcador col-3">
                    </div>
                </div>

            </form>
            <?php
        }
        ?>
    </div>

</div>





<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
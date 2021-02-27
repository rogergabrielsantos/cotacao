<?php
$A = new checklistmoto("", "", "", "", "", "", "", "", "", "", "", "");
$A->mostra2($controle, $link);


$check1 = $A->getFreiodiscod() == "on" ? "checked ='checked'" : "";
$check2 = $A->getFreiodiscot() == "on" ? "checked ='checked'" : "";
$check3 = $A->getRodaliga() == "on" ? "checked ='checked'" : "";
$check4 = $A->getCarenagem() == "on" ? "checked ='checked'" : "";
$check5 = $A->getAlarme() == "on" ? "checked ='checked'" : "";
$check6 = $A->getPartida() == "on" ? "checked ='checked'" : "";
$check7 = $A->getChave() == "on" ? "checked ='checked'" : "";
$check8 = $A->getBloqueador() == "on" ? "checked ='checked'" : "";
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="">Checklist</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pneus2.php">Pneus</a>
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
            </ul>
        </div>
        <div class="card-body">

            <h4 class="text-center text-dark pt-2">Checklist</h3>
                <form action="movimento/movimentoVistoria.php" method="POST">
                    <label for="logradouro">Dados Vistoria</label>
                    <div class="input-group">

                        <input class="form-control" name="vistoriador" type="text"  value ="<?php echo $B->getVitoriador(); ?>" placeholder="Vistoriador">
                        <input class="form-control" name="data" type="date" value ="<?php echo $B->getData(); ?>" placeholder="Data">
                    </div> 
                    <label for="logradouro">Local/ Placa</label>
                    <div class="input-group">
                        <input class="form-control" name="local" type="text" value ="<?php echo $B->getLocal(); ?>"placeholder="Digite a Cidade">
                        <input class="form-control" name="placa" type="text" value ="<?php echo $B->getPlaca(); ?>">
                    </div> 

                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check1; ?>  name="freiodiscod" id="freiodiscod">
                        <label class="custom-control-label" for="freiodiscod">Freio a Disco Dianteiro</label>
                    </div>


                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check2; ?> name="freiodiscoe" id="freiodiscoe">
                        <label class="custom-control-label" for="freiodiscoe">Freio a Disco Traseiro</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check3; ?> name="rodaliga" id="rodaliga">
                        <label class="custom-control-label" for="rodaliga">Rodas Liga /Especial</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check4; ?> name="carenagem" id="carenagem">
                        <label class="custom-control-label" for="carenagem">Carenagem Esportiva</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check5; ?> name="alarme" id="alarme">
                        <label class="custom-control-label" for="alarme">Alarme de Presença</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check6; ?> name="partida" id="partida">
                        <label class="custom-control-label" for="partida">Partida Elétrica</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check7; ?> name="chave" id="chave">
                        <label class="custom-control-label" for="chave">Chave Codificada</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" <?php echo $check8; ?> name="bloqueador" id="bloqueador">
                        <label class="custom-control-label" for="bloqueador">Bloqueador</label>
                    </div>

                    <input  type="hidden" name="codigo" value ="<?php echo $codigo; ?>">
                    <input  type="hidden" name="controle" value ="<?php echo $controle; ?>">
                    <?php
                    if ($status == "REALIZADO") {
                    ?>
                    <input  class="btn btn-primary" type="submit" name="aprovar" value="Aprovar">
                    <?php
                    }
                    ?>

                    <input  class="btn btn-primary" type="submit" name="deletar" value="Excluir">
                </form>

        </div>



        <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        </body>
        </html>
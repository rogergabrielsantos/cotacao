<?php
session_start();
include 'movimento/procedimentos.php';
require_once 'classes/filiacao.php';
require_once 'classes/veiculo.php';
require_once ('header.php');
$codv = $_POST['codv'];


$A = new filiacao("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
$A->mostra($codv, $link);


$AP = $A->getApp() == "on" ? "checked ='checked'" : "";
$T = $A->getTerceiros() == "on" ? "checked ='checked'" : "";
$VN = $A->getVidrosnacional() == "on" ? "checked ='checked'" : "";
$VI = $A->getVidrosimportado() == "on" ? "checked ='checked'" : "";
$P = $A->getPlanotopplus() == "on" ? "checked ='checked'" : "";
$CR = $A->getCarroreserva() == "on" ? "checked ='checked'" : "";
?>
<div class="container">
    <h4 class="text-center text-dark pt-2">Filiação</h3>
        <form action="movimento/movimentoFiliacao.php" method="POST">
            <label for="logradouro">Data/Vendedor/Cidade</label>    
            <div class="input-group">
                <input class="form-control" value ="<?php echo $A->getData(); ?>" type="date" name="data" placeholder="Data">
                <input class="form-control" value ="<?php echo $A->getVendedor(); ?>" type="text" name="vendedor" readonly>
                <input class="form-control" type="text" value ="<?php echo $A->getCidade(); ?>" name="cidade" placeholder="Cidade">

            </div>
            <br>
            <label for="logradouro">Cod Associado/Nome Associado/codigo Veículo</label>    
            <div class="input-group">
                <input class="form-control" value ="<?php echo $A->getCodassociado(); ?>"  name="associado" type="text" placeholder="Associado" readonly>
                <input class="form-control" value ="<?php echo $A->getNomeassociado(); ?>"  name="nomeassociado" type="text" placeholder="Associado" readonly>
                <input class="form-control" value ="<?php echo $A->getCodveiculo(); ?>" name="veiculo" type="text" placeholder="Veículo" readonly>

            </div>

            <br>
            <label for="logradouro">Valor Asesão/Taxa de Rastreador/Valor Mensalidade</label>    
            <div class="input-group">
                <input class="form-control" type="text" value ="<?php echo $A->getValoradesao(); ?>" name="valoradesao" onkeypress="$(this).mask('R$ #####0.00', {reverse: true});" placeholder="Valor da Adesão">
                <input class="form-control" type="text" value ="<?php echo $A->getTaxarastreador(); ?>" name="taxarastreador" onkeypress="$(this).mask('R$ #####0.00', {reverse: true});" placeholder="Taxa Rastreador">
                <input class="form-control" type="text" value ="<?php echo $A->getValormesalidade(); ?>" name="valormesalidade" onkeypress="$(this).mask('R$ #####0.00', {reverse: true});" placeholder="Valor mensalidade">

            </div> 
            <br>
            <label for="logradouro">Proteção/Dia de Vencimento</label>    
            <div class="input-group">
                <input class="form-control" type="text" value ="<?php echo $A->getProtecao(); ?>" name="protecao" id="protecao">
                <input class="form-control" type="text" value ="<?php echo $A->getDiavencimento(); ?>" name="diavencimento" id="diaV">
            </div>

            <br>


            <div class="custom-control custom-checkbox">
                <input type="checkbox" <?php echo $CR; ?> class="custom-control-input"   name="carroreserva"  id="carroReserva">
                <label class="custom-control-label" for="carroReserva">Carro Reserva 7 dias</label>
            </div>


            <div class="custom-control custom-checkbox">
                <input type="checkbox"  <?php echo $AP; ?> class="custom-control-input" name="app" id="app">
                <label class="custom-control-label" for="app">APP</label>
            </div>


            <div class="custom-control custom-checkbox">
                <input type="checkbox" type ="checkbox" <?php echo $T; ?> class="custom-control-input" name="terceiros" id="terceiros">
                <label class="custom-control-label" for="terceiros">Proteção Contra Terceiros(somente casco)</label>
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" type ="checkbox" <?php echo $VN; ?> class="custom-control-input" name="vidrosnacional" id="vidrosN">
                <label class="custom-control-label" for="vidrosN">Proteção de Vidros Nacional</label>
            </div>


            <div class="custom-control custom-checkbox">
                <input type="checkbox" type ="checkbox" <?php echo $VI; ?> class="custom-control-input" name="vidrosimportado" id="vidrosI">
                <label class="custom-control-label" for="vidrosI">Proteção de Vidros Importado</label>
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" type ="checkbox" <?php echo $P; ?> class="custom-control-input" name="planotopplus" id="planoTP">
                <label class="custom-control-label" for="planoTP">Plano Top Plus</label>
            </div>
            <br><br>
            <input class="form-control" type="hidden" value ="<?php echo $codv; ?>" name="codigo">
            <input  class="btn btn-primary" type="submit" name="deletar" value="Excluir">
            <input  class="btn btn-primary" type="submit" name="alterar" value="Alterar">
             <input  class="btn btn-primary" type="submit" name="salvar" value="Salvar e Enviar">
             
         <?php
            if ($_SESSION['perfil'] == 1) {
                ?>    
            <input  class="btn btn-primary" type="submit" name="aprovar" value="aprovar">
        <?php
            }
            ?>
        </form>

</div>



<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script></body>
</html>
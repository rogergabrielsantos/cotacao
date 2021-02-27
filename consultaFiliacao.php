<?php
session_start();
include 'movimento/procedimentos.php';
require_once 'classes/filiacao.php';
require_once 'classes/veiculo.php';
require_once 'classes/vendedor.php';
require_once ('header.php');
$codv = $_POST['codv'];


$B = new veiculo("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
$B->mostra($codv, $link);
$coda = $B->getCodassociado();
$nome = $B->getNomeassociado();
$codvendedor = $B->getCodvendedor();

$A = new filiacao("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
$A->mostra3($codv, $link);

$C = new vendedor("", "", "", "", "", "", "", "");
$C->mostra($codvendedor, $link);
$nomevendedor = $C->getNome();




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

                <input class="form-control" value ="<?php echo $nomevendedor; ?>" type="text" name="vendedor">
                <input class="form-control" type="text" value ="<?php echo $A->getCidade(); ?>" name="cidade" placeholder="Cidade">

            </div>
            <br>
            <label for="logradouro">Cod Associado/Nome Associado/codigo Veículo</label>    
            <div class="input-group">
                <input class="form-control" value ="<?php echo $coda; ?>"  name="associado" type="text" placeholder="Associado">
                <input class="form-control" value ="<?php echo $nome; ?>"  name="nomeassociado" type="text" placeholder="Associado">
                <input class="form-control" value ="<?php echo $codv; ?>" name="veiculo" type="text" placeholder="Veículo">

            </div>

            <br>
            <label for="logradouro">Valor Asesão/Taxa de Rastreador/Valor Mensalidade</label>    
            <div class="input-group">
                <input class="form-control" type="text" value ="<?php echo $A->getValoradesao(); ?>" name="valoradesao" placeholder="Valor da Adesão">
                <input class="form-control" type="text" value ="<?php echo $A->getTaxarastreador(); ?>" name="taxarastreador" placeholder="Taxa Rastreador">
                <input class="form-control" type="text" value ="<?php echo $A->getValormesalidade(); ?>" name="valormesalidade" placeholder="Valor mensalidade">

            </div> 
            <br>
            <label for="logradouro">Proteção/Dia de Vencimento</label>    
            <div class="input-group">
                <input class="form-control" type="text" value ="<?php echo $A->getProtecao(); ?>" name="protecao" id="protecao">
                <input class="form-control" type="text" value ="<?php echo $A->getDiavencimento(); ?>" name="diavencimento" id="diaV">
            </div>

            <br>
            <div class="row">
                <div class="marcador col-6">
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
                    <input class="form-control" type="hidden" value ="<?php echo $A->getCodigo(); ?>" name="codigo">
                    <input  class="btn btn-primary" type="submit" name="deletar" value="Excluir">
                    <input  class="btn btn-primary" type="submit" name="desativar" value="Desativar">
                 
                </div>
                </form>
                <div class="marcador col-3">
                    <div class="card">
                        <a href="gerarpdf2.php?codi=<?php echo $A->getCodigo(); ?>" target="_blank"><img src="imagens/formulario.png"></a>
                    </div>

                </div>
                <div class="marcador col-3">
                    <div class="card">
                        <a href="gerarpdf.php?cod=<?php echo $coda; ?>" target="_blank"><img src="imagens/boleto.png"></a>

                    </div>
                </div>
            </div>
</div>

            <!-- JavaScript (Opcional) -->
            <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   </body>
</html>
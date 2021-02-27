<?php
session_start();
include 'movimento/procedimentos.php';
require_once 'classes/vendedor.php';
require_once 'classes/veiculo.php';
require_once ('header.php');
$codv = $_POST['codv'];

$B = new veiculo("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
$B->mostra($codv, $link);
$tipo = $B->getTipo();
$coda = $B->getCodassociado();
$nome = $B->getNomeassociado();
$nomevendedor = $_SESSION['nome'];
$codvendedor = isset($_SESSION['codvendedor']) ? $_SESSION['codvendedor'] : 0;
?>

<div class="container">
    <h4 class="text-center text-dark pt-2">Filiação</h3>
        <form action="movimento/movimentoFiliacao.php" method="POST">
            <label for="logradouro">Data/Vendedor/Cidade</label>  
            <div class="input-group">
                <input class="form-control" type="date" name="data" placeholder="Data">
                <?php
                if ($_SESSION['perfil'] == 1) {
                    ?>
                    <select name= "vendedor" class="form-control" style="width: 400px;">
                        <option value=''>Parceiro/Consultores</option>
                        <?php
                        $sql = mysqli_query($link, "select * from vendedor");
                        while ($row = mysqli_fetch_array($sql)) {
                            $codigo = $row['cod'];
                            $N = $row['nome'];
                            echo "<option value='$codigo'>$N</option>";
                        }
                        ?>
                    </select>
                    <?php
                } else {
                    ?>
                    <input class="form-control" value ="<?php echo $nomevendedor; ?>"  readonly type="text">
                     <input type="hidden" value="<?php echo $codvendedor; ?>" name="vendedor">
                    <?php
                }
                ?>

                <input class="form-control" type="text" name="cidade" placeholder="Cidade">

            </div>
            <br>
            <label for="logradouro">Cod Associado/Nome Associado/Cod Veiculo</label>  
            <div class="input-group">
                <input class="form-control" value ="<?php echo $coda; ?>"  readonly name="associado" type="text" placeholder="Associado">
                <input class="form-control" value ="<?php echo $nome; ?>" readonly name="nomeassociado" type="text" placeholder="Associado">
                <input class="form-control" value ="<?php echo $codv; ?>" readonly name="veiculo" type="text" placeholder="Veículo">

            </div>

            <br>
            <div class="input-group">
                <input class="form-control" type="text" name="valoradesao" onkeypress="$(this).mask('R$ #####0.00', {reverse: true});" placeholder="Valor da Adesão">
                <input class="form-control" type="text" name="taxarastreador" onkeypress="$(this).mask('R$ #####0.00', {reverse: true});" placeholder="Taxa Rastreador">
                <input class="form-control" type="text" name="valormesalidade" onkeypress="$(this).mask('R$ #####0.00', {reverse: true});" placeholder="Valor mensalidade">

            </div> 
            <br>
            <div class="input-group">
                <select class="form-control" name="protecao" id="protecao">
                    <option>Proteção Veicular</option>
                    <option>Roubo/Furto/Incêndio/Colisão</option>
                    <option>Assitência 24 horas</option>
                </select>


                <select class="form-control" name="diavencimento" id="diaV">
                    <option>Dia de Vencimento</option>
                    <option>05</option>
                    <option>10</option>
                    <option>15</option>
                    <option>20</option>
                    <option>25</option>
                </select>


            </div>

            <br>


            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input"   name="carroreserva"  id="carroReserva">
                <label class="custom-control-label" for="carroReserva">Carro Reserva 7 dias</label>
            </div>


            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="app" id="app">
                <label class="custom-control-label" for="app">APP</label>
            </div>


            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="terceiros" id="terceiros">
                <label class="custom-control-label" for="terceiros">Proteção Contra Terceiros(somente casco)</label>
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="vidrosnacional" id="vidrosN">
                <label class="custom-control-label" for="vidrosN">Proteção de Vidros Nacional</label>
            </div>


            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="vidrosimportado" id="vidrosI">
                <label class="custom-control-label" for="vidrosI">Proteção de Vidros Importado</label>
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="planotopplus" id="planoTP">
                <label class="custom-control-label" for="planoTP">Plano Top Plus</label>
            </div>
            <br><br>
            <input type="hidden" value="<?php echo $tipo; ?>" name="tipo">
           
           
                <input  class="btn btn-primary" type="submit" name="salvar" value="Salvar">
                



        </form>

</div>



<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
</body>
</html>
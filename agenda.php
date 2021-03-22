<?php
session_start();
include 'movimento/procedimentos.php';
require_once 'classes/associado.php';
require_once 'classes/vistoria.php';
require_once 'classes/agendaclasse.php';

require_once ('header.php');

if (isset($_POST['data'])) {

    $data = $_POST['data'] == "" ? "" : $_POST['data'];
    $vistoriador = $_POST['vistoriador'] == "" ? "" : $_POST['vitoriador'];
    $B = new agendaclasse("", "", "", "", "", "", "", "", "", "");
    $B->mostra1($vistoriador, $link, $data);
   
    $row = $B->mostra1($vistoriador, $link, $data);
    for ($j = 8; $j < 19; $j++) {
        $associado[$j] = "";
        $modelo[$j] = "";
        $placa[$j] = "";
        $vitoria[$j] = "";
        $cod[$j] = "";
        $aux[$j] = "";
    }
   
    for ($i = 0; $i < count($B->getHorario()); $i++) {

        for ($j = 8; $j < 19; $j++) {


            if ($row > 0) {
                $hora = (int) $B->getHorario()[$i];
           
               
                if ($hora == $j) {
                    
                    $associado[$j] = $B->getAssociado()[$i];
                    $modelo[$j] = $B->getModelo()[$i];
                    $placa[$j] = $B->getPlaca()[$i];
                    $vitoria[$j] = $B->getCodvistoria()[$i];
                    $cod[$j] = $B->getCod()[$i];
                    $aux[$j] = "Excluir";
                }
            }
        }
    }
}
?>

<div class="container">
    <h4 class="text-center text-dark pt-2">Agenda de Vistorias</h3>
        <form action="agenda.php" method="Post">

            <div class="input-group">
                <input class="form-control" type="date"  name="data" required>
                <input class="form-control" type="test"  name="vistoriador" placeholder="Vistoriador" >
                <div class="input-group-append">
                    <input  class="btn btn-primary" type="submit" value="Pesquisar">
                </div>
            </div>
        </form>
<?php
if (isset($_POST['data'])) {
    ?>
            <form action="movimento/movimentoAgenda.php" method="Post">
                <input  type="hidden" value="<?php echo $data; ?>" name="data1">
                <input  type="hidden" value="<?php echo $vistoriador; ?>" name="vistoriador1">
                <div class="input-group">
                    <select name= "codigo" class="form-control" style="width: 400px;">
                        <option value=''>Asscociado</option>
    <?php
    $sql = mysqli_query($link, "select codigo, nomeassociado, modelo, vistoria.placa as placav  from vistoria JOIN veiculo ON vistoria.codveiculo = veiculo.cod and vistoria.status = 'pendente'");
    while ($row = mysqli_fetch_array($sql)) {
        $codigo = $row['codigo'];
        $N = $row['nomeassociado'];
        $M = $row['modelo'];
        $P = $row['placav'];
        echo "<option value='$codigo'>$codigo - $N-$M-$P</option>";
    }
    ?>
                    </select>
                    <select name= "horario" class="form-control">
                        <option value='8:00'>8:00</option>
                        <option value='9:00'>9:00</option>
                        <option value='10:00'>10:00</option>
                        <option value='11:00'>11:00</option>
                        <option value='12:00'>12:00</option>
                        <option value='13:00'>13:00</option> 
                        <option value='14:00'>14:00</option>
                        <option value='15:00'>15:00</option>
                        <option value='16:00'>16:00</option>
                        <option value='17:00'>17:00</option>
                        <option value='18:00'>18:00</option>
                    </select>
                    <div class="input-group-append">
                        <input  class="btn btn-primary" type="submit" name="agendar" value="Agendar">
                    </div>
                </div>  
            </form>
            <br>
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">

                    <tr><th>Horário</th><th>Associado</th><th>Veiculo</th><th>placa</th><th></th></tr>
                </thead>
                <tr><td>8:00</td><td><?php echo $associado[8]; ?></td><td><?php echo $modelo[8]; ?></td><td><?php echo $placa[8]; ?></td><td><a href="movimento/movimentoAgenda.php?cod=<?php echo $cod[8]; ?>"><?php echo $aux[8]; ?></a></td></tr>
                <tr><td>9:00</td><td><?php echo $associado[9]; ?></td><td><?php echo $modelo[9]; ?></td><td><?php echo $placa[9]; ?></td><td><a href="movimento/movimentoAgenda.php?cod=<?php echo $cod[9]; ?>"><?php echo $aux[9]; ?></a></td></tr>
                <tr><td>10:00</td><td><?php echo $associado[10]; ?></td><td><?php echo $modelo[10]; ?></td><td><?php echo $placa[10]; ?></td><td><a href="movimento/movimentoAgenda.php?cod=<?php echo $cod[10]; ?>"><?php echo $aux[10]; ?></a></td></tr>
                <tr><td>11:00</td><td><?php echo $associado[11]; ?></td><td><?php echo $modelo[11]; ?></td><td><?php echo $placa[11]; ?></td><td><a href="movimento/movimentoAgenda.php?cod=<?php echo $cod[11]; ?>"><?php echo $aux[11]; ?></a></td></tr>
                <tr><td>12:00</td><td><?php echo $associado[12]; ?></td><td><?php echo $modelo[12]; ?></td><td><?php echo $placa[12]; ?></td><td><a href="movimento/movimentoAgenda.php?cod=<?php echo $cod[12]; ?>"><?php echo $aux[12]; ?></a></td></tr>
                <tr><td>13:00</td><td><?php echo $associado[13]; ?></td><td><?php echo $modelo[13]; ?></td><td><?php echo $placa[13]; ?></td><td><a href="movimento/movimentoAgenda.php?cod=<?php echo $cod[13]; ?>"><?php echo $aux[13]; ?></a></td></tr>
                <tr><td>14:00</td><td><?php echo $associado[14]; ?></td><td><?php echo $modelo[14]; ?></td><td><?php echo $placa[14]; ?></td><td><a href="movimento/movimentoAgenda.php?cod=<?php echo $cod[14]; ?>"><?php echo $aux[14]; ?></a></td></tr>
                <tr><td>15:00</td><td><?php echo $associado[15]; ?></td><td><?php echo $modelo[15]; ?></td><td><?php echo $placa[15]; ?></td><td><a href="movimento/movimentoAgenda.php?cod=<?php echo $cod[15]; ?>"><?php echo $aux[15]; ?></a></td></tr>
                <tr><td>16:00</td><td><?php echo $associado[16]; ?></td><td><?php echo $modelo[16]; ?></td><td><?php echo $placa[16]; ?></td><td><a href="movimento/movimentoAgenda.php?cod=<?php echo $cod[16]; ?>"><?php echo $aux[16]; ?></a></td></tr>
                <tr><td>17:00</td><td><?php echo $associado[17]; ?></td><td><?php echo $modelo[17]; ?></td><td><?php echo $placa[17]; ?></td><td><a href="movimento/movimentoAgenda.php?cod=<?php echo $cod[17]; ?>"><?php echo $aux[17]; ?></a></td></tr>
                <tr><td>18:00</td><td><?php echo $associado[18]; ?></td><td><?php echo $modelo[18]; ?></td><td><?php echo $placa[18]; ?></td><td><a href="movimento/movimentoAgenda.php?cod=<?php echo $cod[18]; ?>"><?php echo $aux[18]; ?></a></td></tr>
            </table>    

    <?php
}
?>

</div>
<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
</body>
</php>
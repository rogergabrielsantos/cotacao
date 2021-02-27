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
$placa = $B->getPlaca();
$marca = $B->getMarca();
$modelo = $B->getModelo();
$codvendedor = $_SESSION['perfil'] == "2" ? $_SESSION['codvendedor'] : "";
?>
<div class="container">
    <h4 class="text-center text-dark pt-2">Solicitação Vistoria</h3>
        <form action="movimento/movimentoVistoria.php" method="POST">
            <label for="logradouro">Tipo de Vistoria</label>
            <div class="input-group">
                <select class="form-control" name="tipovistoria" id="protecao">
                    <option>Filiação</option>
                    <option>Revisoria</option>
                    <option>Substituição de Placa</option>
                </select>
                <input class="form-control" value ="<?php echo $_SESSION['nome']; ?>"   type="text" placeholder="Associado" readonly>


            </div>
            <br>
            <label for="logradouro">Código/ Nome Associado</label>
            <div class="input-group">
                <input class="form-control" value ="<?php echo $coda; ?>"  name="associado" type="text" placeholder="Associado" readonly>
                <input class="form-control" value ="<?php echo $nome; ?>"  name="nomeassociado" type="text" placeholder="Associado" readonly>
            </div>
            <label for="logradouro">Código do Veiculo/ Placa/ Marca</label>
            <div class="input-group">  
                <input class="form-control" value ="<?php echo $codv; ?>" name="veiculo" type="text" placeholder="Veículo" readonly>
                <input class="form-control" value ="<?php echo $placa; ?>" name="placa" type="text" readonly>
                <input class="form-control" value ="<?php echo $marca; ?>" name="marca" type="text" readonly >
                <input class="form-control" value ="<?php echo $modelo; ?>" name="modelo" type="text" readonly >

            </div>

            <br>
            <input type="hidden" value="<?php echo $codvendedor; ?>" name="vendedor">
            <input type="hidden" value="<?php echo $tipo; ?>" name="tipo">

            <input  class="btn btn-primary" type="submit" name="solicitar" value="Solicitar">
        </form>
</div>



<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
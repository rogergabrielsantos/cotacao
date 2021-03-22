<?php
session_start();
include 'movimento/procedimentos.php';
require_once 'classes/associado.php';
require_once ('header.php');

$codigo = $_POST['cod'];
$A = new associado("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
$A->mostra($codigo, $link);
$nome = $A->getNome();
?>

<div class="container">
    <h4 class="text-center text-dark pt-2">Cadastrar Veiculo</h3>
        <form action="movimento/movimentoVeiculo.php" method="Post">


            <br>
            <div class="input-group">
                <input class="form-control" name="tabelafipe" type="text" placeholder="Tabela FIPE" onkeypress="$(this).mask('R$ ###.##0,00', {reverse: true});">
                <input class="form-control" name="codfipe" type="text" placeholder="Cód FIPE">
                <input class="form-control" type="text" name="cota" placeholder="N da Cota">
                <input class="form-control" type="text" name="plano" placeholder="Plano">
            </div> 
            <br>
            <div class="input-group">
                <select class="form-control" name="tipo" id="tipo">
                    <option>Tipo</option>
                    <option>Carro</option>
                    <option>Moto</option>
                    <option>Van</option>
                    <option>Especial</option>
                    <option>taxi</option>
                    <option>App</option>
                    <option>Utilitário</option>
                </select>


                <select class="form-control" name="portas" id="portas">
                    <option>Portas</option>
                    <option>2</option>
                    <option>4</option>
                </select>
                <select class="form-control" name="alienado" id="alienado">
                    <option>Alienado</option>
                    <option>Sim</option>
                    <option>Não</option>
                </select>

            </div>
            <br>
            <div class="input-group">
                <input class="form-control" type="text" name="marca" placeholder="Marca">
                <input class="form-control" type="text" name="cor" placeholder="Cor">
                <select class="form-control" name="combustivel" id="combustivel">
                    <option>Combustível</option>
                    <option>Gasolina</option>
                    <option>Alcool</option>
                    <option>Flex</option>
                    <option>Diesel</option>
                </select>
            </div> 
            <br>
            <div class="input-group">
                <input class="form-control" type="text" name="modelo" placeholder="Modelo">
                <input class="form-control" type="text" name="ano" placeholder="Ano Fab">
                <input class="form-control" type="text" name="placa" placeholder="Placa">

            </div> 
            <br>
            <div class="input-group">
                <input class="form-control" type="text" name="renavam" placeholder="Renavam">
                <input class="form-control" type="text" name="chassi" placeholder="Chassi">
                <input class="form-control" type="text" name="km" placeholder="KM">
            </div> 
            <br>
            <div class="input-group">
                <input class="form-control" type="text" name="potencia" placeholder="Potência">
                <input class="form-control" type="text" name="cilindrada" placeholder="Cinlindrada">
                <select class="form-control" name="rastreador" id="rastreador">Rastreador
                    <option>Rastreador</option>
                    <option>sim</option>
                    <option>Não</option>
                </select>
            </div> 
            <br>
            <label for="logradouro">Cod Associado/Nome Associado</label>  
            <div class="input-group">
                <input class="form-control" value ="<?php echo $codigo; ?>" name="codassociado" type="text" placeholder="Codigo" readonly>

                <input class="form-control" value ="<?php echo $nome; ?>" name="nomeassociado" type="text" placeholder="Proprietario" readonly>
            </div> 
            <br><br>

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
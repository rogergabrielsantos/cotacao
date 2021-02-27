<?php
session_start();
include 'movimento/procedimentos.php';
require_once 'classes/veiculo.php';
require_once ('header.php');
include 'classes/vendedor.php';


$codigo = $_POST['cod'];
$A = new veiculo("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");

$A->mostra($codigo, $link);
$codvendedor = $A->getCodvendedor();
$B = new vendedor("", "", "", "", "", "", "", "");
$B->mostra($codvendedor, $link);
$nomevendedor = $B->getNome();
?>
<div class="container">
    <h4 class="text-center text-dark pt-2">Consultar Veiculo</h3>

        <!-- caixas de texto -->
        <form action="movimento/movimentoVeiculo.php" method="Post">


            <br>
            <label for="logradouro">Tabel FIPE/Cod FIPE/Cota/Plano</label>  
            <div class="input-group">
                <input class="form-control" id="tabelafipe" name="tabelafipe" type="text" value ="<?php echo $A->getTabelafipe(); ?>"  placeholder="Tabela FIPE" readonly>
                <input class="form-control" id="codfipe" name="codfipe" type="text" value ="<?php echo $A->getCodfipe(); ?>" placeholder="Cód FIPE" readonly>
                <input class="form-control" type="text" id="cota" name="cota" value ="<?php echo $A->getCota(); ?>" placeholder="N da Cota" readonly>
                <input class="form-control" type="text" id="plano" name="plano" value ="<?php echo $A->getPlano(); ?>" placeholder="Plano" readonly>
            </div> 
            <br>
            <label for="logradouro">Tipo/Portas/Alienado</label>  
            <div class="input-group">
                <select class="form-control" value ="<?php echo $A->getTipo(); ?>" name="tipo" id="tipo" readonly>
                    <option><?php echo $A->getTipo(); ?></option>
                    <option>Carro</option>
                    <option>Moto</option>
                    <option>Van</option>
                    <option>Especial</option>
                    <option>taxi</option>
                    <option>App</option>
                    <option>Utilitário</option>
                </select>


                <select class="form-control" name="portas" id="portas" readonly>
                    <option><?php echo $A->getPortas(); ?></option>
                    <option>2</option>
                    <option>4</option>
                </select>
                <select class="form-control" name="alienado" id="alienado" readonly>
                    <option><?php echo $A->getAlienado(); ?></option>
                    <option>Sim</option>
                    <option>Não</option>
                </select>

            </div>
            <br>
            <label for="logradouro">Marca/Cor//combustível</label>  
            <div class="input-group">
                <input class="form-control" type="text" value ="<?php echo $A->getMarca(); ?>" id="marca" name="marca" placeholder="Marca" readonly>
                <input class="form-control" type="text" name="cor" id="cor" value ="<?php echo $A->getCor(); ?>" placeholder="Cor" readonly>
                <input class="form-control" type="text" name="combustivel" id="combustivel" value ="<?php echo $A->getCombustivel(); ?>" placeholder="Combustível" readonly>

            </div> 
            <br>
            <label for="logradouro">Modelo/Ano/Placa</label>  
            <div class="input-group">
                <input class="form-control" type="text" name="modelo" id="modelo" value ="<?php echo $A->getModelo(); ?>" placeholder="Modelo" readonly>
                <input class="form-control" type="text" name="ano" id="ano" value ="<?php echo $A->getAno(); ?>" placeholder="Ano Fab" readonly>
                <input class="form-control" type="text" name="placa" id="placa" value ="<?php echo $A->getPlaca(); ?>" placeholder="Placa" readonly>

            </div> 
            <br>
            <label for="logradouro">Renavam/Chassi/KM</label>  
            <div class="input-group">
                <input class="form-control" type="text" name="renavam" id="renavam" value ="<?php echo $A->getRenavam(); ?>" placeholder="Renavam" readonly>
                <input class="form-control" type="text" name="chassi" id="chassi" value ="<?php echo $A->getChassi(); ?>" placeholder="Chassi" readonly>
                <input class="form-control" type="text" name="km" id="km" value ="<?php echo $A->getKm(); ?>" placeholder="KM" readonly>
            </div> 
            <br>
            <label for="logradouro">Potência/Cilindrada/rastreador</label>  
            <div class="input-group">
                <input class="form-control" type="text" name="potencia" id="potencia" value ="<?php echo $A->getPotencia(); ?>" placeholder="Potência" readonly>
                <input class="form-control" type="text" name="cilindrada" id="cilindrada" value ="<?php echo $A->getCilindrada(); ?>" placeholder="Cinlindrada" readonly>



                <select class="form-control" readonly name="rastreador" id="rastreador"  >
                    <option><?php echo $A->getRastreador(); ?></option>
                    <option>sim</option>
                    <option>Não</option>
                </select>
            </div> 
            <br>
            <label for="logradouro">Cod Associado/Nome Associado/Vendedor</label>  
            <div class="input-group">
                <input class="form-control" name="codassociado" id="codassociado" type="text" value ="<?php echo $A->getCodassociado(); ?>" placeholder="Proprietario" readonly>
                <input class="form-control" name="nomeassociado" id="nomeassociado" type="text" value ="<?php echo $A->getNomeassociado(); ?>" placeholder="Proprietario" readonly>
                <input class="form-control" name="nomeassociado" id="nomeassociado" type="text" value ="<?php echo $nomevendedor; ?>" placeholder="Proprietario" readonly>

            </div> 
            <br><br>
            <input type ="hidden" id="codigo" value ="<?php echo $A->getCodigo(); ?>" name="codigo"/>


            <button  class="btn btn-primary" type="button" onclick="alterarVeiculo()">Alterar</button>
            <input  class="btn btn-primary" type="submit" name="deletar" value="Deletar">
            <input  class="btn btn-primary" type="submit" name="alterar" value="Salvar">


        </form>

</div>



<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
</body>
</php>
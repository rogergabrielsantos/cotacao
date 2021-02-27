<?php
session_start();
include 'movimento/procedimentos.php';
require_once 'classes/associado.php';
require_once ('header.php');
include 'classes/vendedor.php';




$codigo = $_POST['cod'];
$A = new associado("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
$A->mostra($codigo, $link);


$nome = $A->getNome();
$cpf = $A->getCpf();
$nascimento = $A->getNascimento();
$identidade = $A->getIdentidade();
$cnh = $A->getCnh();
$estadocivil = $A->getEstadocivil();
$logradouro = $A->getLogradouro();
$cidade = $A->getCidade();
$numero = $A->getNumero();
$estado = $A->getEstado();
$bairro = $A->getBairro();
$codvendedor = $A->getCodvendedor();
$cep = $A->getCep();
$telefone = $A->getTelefone();
$email = $A->getEmail();
$telefone2 = $A->getTelefone2();
$estado1 = "";
$estado2 = "";
$estado3 = "";
$estado4 = "";
$estado5 = "";
$B = new vendedor("", "", "", "", "", "", "", "");
$B->mostra($codvendedor, $link);
$nomevendedor = $B->getNome();

if ($estadocivil == "solteiro") {
    $estado1 = "checked ='checked'";
}
if ($estadocivil == "casado") {
    $estado2 = "checked ='checked'";
}
if ($estadocivil == "divorciado") {
    $estado3 = "checked ='checked'";
}
if ($estadocivil == "viuvo") {
    $estado4 = "checked ='checked'";
}
if ($estadocivil == "outro") {
    $estado5 = "checked ='checked'";
}
?>

<div class="container">
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <h4 class="text-center text-dark pt-2">Consultar Associado</h3>

        <!-- caixas de texto -->
        <form action="movimento/movimentoAssociado.php" method="Post" >
            <input type ="hidden" name="codigo"  value ="<?php echo $codigo; ?>"/>
            <label for="logradouro">Nome/Razão Social</label>  
            <div class="form-group">
                <input class="form-control" type="text"  name="nome" id="nome" value ="<?php echo $nome; ?>" placeholder="Digite o nome ou razão social" readonly>
            </div>
            <label for="logradouro">CPF/Data de Nascimento</label>
            <div class="input-group">
                <input class="form-control" name="cpf" type="text" id="cpf" value ="<?php echo $cpf; ?>" placeholder="CPF/CNPJ" readonly>
                <input class="form-control" name="nascimento"  id="nascimento" type="date" value ="<?php echo $nascimento; ?>" placeholder="Nascimento" readonly>
            </div> 
            <label for="logradouro">Identidade/CNH</label>
            <div class="input-group">
                <input class="form-control" type="text" id="identidade" value ="<?php echo $identidade; ?>" name="identidade" placeholder="Identidade" readonly>
                <input class="form-control" type="text" name="cnh" id="cnh" value ="<?php echo $cnh; ?>" placeholder="CNH" readonly>
            </div> 
            <br>
            <label for="logradouro">Estado Civil:</label>   
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" <?php echo $estado1; ?> name="estadocivil" id="solteiro" value="solteiro" readonly>
                <label class="form-check-label" for="solteiro">Solteiro</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" <?php echo $estado2; ?> name="estadocivil" id="casado" value="casado" readonly>
                <label class="form-check-label" for="casado">casado</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" <?php echo $estado3; ?> name="estadocivil" id="viuvo" value="viuvo" readonly>
                <label class="form-check-label" for="viuvo">Viuvo</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" <?php echo $estado4; ?> name="estadocivil" id="divorciado" value="divorciado" readonly>
                <label class="form-check-label" for="divorciado">Divorciado</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" <?php echo $estado5; ?> name="estadocivil" id="outro" value="outro" readonly>
                <label class="form-check-label" for="outro">Outro</label>
            </div>
            <br><br>
            <label for="logradouro">Logradouro/Número</label>  
            <div class="input-group">
                <input class="form-control" type="text" id="logradouro" value ="<?php echo $logradouro; ?>" name="logradouro"  placeholder="logradouro" readonly>
                <input class="form-control" type="text" id="numero" name="numero" value ="<?php echo $numero; ?>" placeholder="Número" readonly>
            </div>
            <label for="logradouro">Bairro/Cidade</label>  
            <div class="input-group">
                <input class="form-control" type="text" id="bairro" value ="<?php echo $bairro; ?>" name="bairro" placeholder="Bairro" readonly>
                <input class="form-control" type="text" id="cidade" name="cidade" value ="<?php echo $cidade; ?>" placeholder="Cidade" readonly>
            </div>
            <label for="logradouro">Estado/Cep/Vendedor</label>  
            <div class="input-group">
                <input class="form-control" type="text" id="estado" value ="<?php echo $estado; ?>" name="estado" placeholder="Estado" readonly>
                <input class="form-control" type="text" id="cep" name="cep" value ="<?php echo $cep; ?>" placeholder="Cep" readonly>
                <input class="form-control" type="text" id="nomevendedor" name="nomevendedor" value ="<?php echo $nomevendedor; ?>" readonly>

            </div>


            <label for="email">Contatos: Telefone/Telefone/Email</label>
            <div class="input-group">
                <input class="form-control" type="text" name="telefone" id="telefone"  value ="<?php echo $telefone; ?>" placeholder="Telefone" readonly>
                <input class="form-control" type="text" name="telefone2" id="telefone2" value ="<?php echo $telefone2; ?>" placeholder="Telefone" readonly>
                <input class="form-control" type="email" name="email" id="email" value ="<?php echo $email; ?>" placeholder="Email" readonly>
            </div> 





            <br>



            <button  class="btn btn-primary" type="button" onclick="alterarAssociado()">Alterar</button>
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
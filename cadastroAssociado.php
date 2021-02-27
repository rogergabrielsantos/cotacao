<?php
session_start();
require_once ('header.php');
?>

<div class="container">
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>

    <h4 class="text-center text-dark pt-2">Cadastrar Associado</h3>
        <form action="movimento/movimentoAssociado.php" method="Post">

            <!-- caixas de texto -->
            <div class="form-group">
                <input class="form-control" type="text"  name="nome" placeholder="Digite o nome ou razão social">
            </div>
            <label for="logradouro">Documentos</label>
            <div class="input-group">
                <input class="form-control" name="cpf" type="text" placeholder="CPF/CNPJ(somente números)">
                <input class="form-control" name="nascimento" type="date" placeholder="Nascimento">
            </div> 

            <div class="input-group">
                <input class="form-control" type="text" name="identidade" placeholder="Identidade">
                <input class="form-control" type="text" name="cnh" placeholder="CNH">
            </div> 
            <br>
            <label for="logradouro">Estado Civil:</label>  
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="estadocivil" id="solteiro" value="solteiro">
                <label class="form-check-label" for="solteiro">Solteiro</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="estadocivil" id="casado" value="casado">
                <label class="form-check-label" for="casado">casado</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="estadocivil" id="viuvo" value="viuvo">
                <label class="form-check-label" for="viuvo">Viuvo</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="estadocivil" id="divorciado" value="divorciado">
                <label class="form-check-label" for="divorciado">Divorciado</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="estadocivil" id="outro" value="outro">
                <label class="form-check-label" for="outro">Outro</label>
            </div>
            <br><br>
            <label for="logradouro">Dados Correspondência</label>      
            <div class="input-group">
                <input class="form-control" type="text" id="logradouro" name="logradouro"  placeholder="logradouro">
                <input class="form-control" type="text" id="numero" name="numero" placeholder="Número">
            </div>

            <div class="input-group">
                <input class="form-control" type="text" id="bairro" name="bairro" placeholder="Bairro">
                <input class="form-control" type="text" id="cidade" name="cidade" placeholder="Cidade">
            </div>
            <div class="input-group">
                <input class="form-control" type="text" id="estado" name="estado" placeholder="Estado">
                <input class="form-control" type="text" id="cep" name="cep" onkeypress="$(this).mask('00.000-000')" placeholder="Cep">
            </div>


            <label for="email">Contatos</label>
            <div class="input-group">
                <input class="form-control" type="text" name="telefone" onkeypress="$(this).mask('(00) 0000-00009')"  placeholder="Telefone">
                <input class="form-control" type="text" name="telefone2" onkeypress="$(this).mask('(00) 0000-00009')"  placeholder="Telefone">
                <input class="form-control" type="email" name="email" placeholder="Email">
            </div> 




            <br> 

            <br>
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
</php>
<?php
session_start();
include 'movimento/procedimentos.php';
require_once ('header.php');
?>
<div class="container">
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <h4 class="text-center text-dark pt-2">Cadastrar Parceiro/Consultor</h3>
        <form action="movimento/movimentoVendedor.php" method="Post">

            <!-- caixas de texto -->
            <div class="form-group">
                <label for="nome">Nome/Razão Social</label>
                <input class="form-control" type="text" id="nome" name="nome" placeholder="Digite o nome do vendedor">
            </div>
            <div class="form-group">
                <label for="cpf">CPF/CNPJ(somente numeros)</label>
                <input class="form-control" type="text" id="cpf" name="cpf" placeholder="Digite o CPF">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" id="email" name="email" placeholder="Digite seu email">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input class="form-control" type="text" id="telefone" name="telefone" onkeypress="$(this).mask('(00) 0000-00009')" placeholder="Digite o Telefone">
            </div>

            <br> 
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text ">Usuário/Senha</span>
                </div>
                <input class="form-control" type="text" name="usuario" placeholder="Nome de Usuário">
                <input class="form-control" type="password" name="senha" placeholder="Digite uma Senha">
            </div> 
            <br>
            <input  class="btn btn-primary" name="salvar" type="submit" value="Salvar">
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
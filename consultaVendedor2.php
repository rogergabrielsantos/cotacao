<?php
session_start();
include 'movimento/procedimentos.php';
require_once 'classes/vendedor.php';
require_once ('header.php');

if (isset($_POST['codigo'])) {
    $codigo = $_POST['codigo'];
    $A = new vendedor($codigo, "", "", "", "", "", "", "");
    $A->mostra($codigo, $link);
    $nome = $A->getNome();
    $cpf = $A->getCpf();
    $email = $A->getEmail();
    $telefone = $A->getTelefone();
    $usuario = $A->getUsuario();
    $senha = $A->getSenha();
    $cod = $A->getCodigo();
    $status = $A->getStatus();
} else {
    $nome = "";
    $cpf = "";
    $email = "";
    $telefone = "";
    $usuario = "";
    $senha = "";
    $cod = "";
    $status = "";
}
?>
<div class="container">
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <h4 class="text-center text-dark pt-2">Parceiro/Consultores</h3>
        <form action="consultaVendedor2.php" method="Post">

            <div class="input-group">


                <select name= "codigo" class="form-control" style="width: 400px;">
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
                <div class="input-group-append">
                    <input  class="btn btn-primary" type="submit" value="Pesquisar">

                </div>

            </div>
        </form>
        <!-- caixas de texto -->
        <form action="movimento/movimentoVendedor.php" method="Post" >
            <input type ="hidden" name="codigo"  value ="<?php echo $cod; ?>"/>
            <div class="form-group">
                <label for="nome">Nome/Razão Social</label>
                <input class="form-control" type="text" id="nome" name="nome" value ="<?php echo $nome; ?>" placeholder="Nome do vendedor" readonly="readonly">
            </div>
            <div class="form-group">
                <label for="cpf">CPF/CNPJ</label>
                <input class="form-control" type="text" id="cpf" name="cpf" value ="<?php echo $cpf; ?>" placeholder="CPF" readonly>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" id="email" name="email" value ="<?php echo $email; ?>" placeholder="Email" readonly>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input class="form-control" type="text" id="telefone" name="telefone" value ="<?php echo $telefone; ?>" placeholder="Telefone" readonly>
            </div>
             <label for="email">Situação</label>
            <select class="form-control" name="status" id="status"  placeholder="Status" readonly>
                <option><?php echo $status; ?></option>
                <option>Ativo</option>
                <option>Inativo</option>
            </select>
            <br>


            <br>
            <button  class="btn btn-primary" type="button" onclick="alterarVendedor()">Alterar</button>
            <input  class="btn btn-primary" type="submit" name="deletar" value="Deletar">
            <input  class="btn btn-primary" type="submit" name="alterar" value="Salvar">



        </form>

</div>



<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</php>
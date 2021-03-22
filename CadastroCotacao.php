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

    <h4 class="text-center text-dark pt-2">Cadastro de Cotação</h3>
        <form action="movimento/movimentoCotacao.php" method="Post">

            <!-- caixas de texto -->
            <label for="email">Nome/Data</label>
            <div class="input-group">
                <input class="form-control" type="text"  name="nome" placeholder="Nome ou razão social">
                <input class="form-control" name="data" type="date" >

            </div>
            <label for="email">Contatos</label>
            <div class="input-group">
                <input class="form-control" type="text" name="telefone" onkeypress="$(this).mask('(00) 0000-00009')"  placeholder="Telefone">
                <input class="form-control" type="text" name="telefone2" onkeypress="$(this).mask('(00) 0000-00009')"  placeholder="Telefone">
                <input class="form-control" type="email" name="email" placeholder="Email">
            </div> 
            <label for="logradouro">Dados do Veiculo</label>
            <div class="input-group">
                <input class="form-control" name="modelo" type="text" placeholder="Digite o modelo do Carro">
                <input class="form-control" name="ano" type="" placeholder="Ano do Veiculo">

            </div> 
            <div class="input-group">
                <input class="form-control" type="text" name="placa"  placeholder="Digite a placa" >
                <div class="input-group-append">

                    <input  class="btn btn-primary" type="submit" value="Pesquisar">
                </div>
            </div>

            <br>
            <label for="logradouro">Tabela FIPE</label>
            <div class="input-group">
                <input class="form-control" type="text" name="fipe" placeholder="Tabela FIPE">
            </div> 
            <br>
            <label for="logradouro">Escolha o Plano</label>
            <div class="input-group">
                <select class="form-control" name="plano" id="tipo">
                    <option>Plano Básico</option>
                    <option>Plano Plus</option>
                    <option>Plano Top</option>

                </select>
            </div>
            <br>
            <label for="logradouro">Opcionais</label>
            
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input"   name="carro"  id="carro">
                <label class="custom-control-label" for="carro">Carro Reserva 7 dias</label>
            </div>


            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="app" id="app">
                <label class="custom-control-label" for="app">APP</label>
            </div>


            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="protecao" id="protecao">
                <label class="custom-control-label" for="protecao">Proteção Contra Terceiros(somente casco)</label>
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="vidrosn" id="vidrosn">
                <label class="custom-control-label" for="vidrosn">Proteção de Vidros Nacional</label>
            </div>


            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="vidrosi" id="vidrosi">
                <label class="custom-control-label" for="vidrosi">Proteção de Vidros Importado</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="roubo" id="roubo">
                <label class="custom-control-label" for="roubo">Roubo/Furto/Incêndio/colisão</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="assistencia" id="assistencia">
                <label class="custom-control-label" for="assitencia">Assistência 24 horas</label>
            </div>
            <br>
            <label for="logradouro">Valor da Cotação</label>
            <div class="input-group">
                <input class="form-control" type="text" name="fipe" placeholder="Dgite o valor da cotação">
            </div> 
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
<?php
session_start();
require_once '../classes/pneuClasse.php';
include '../movimento/procedimentos.php';
require_once '../classes/pneuClasse.php';


$placa = $_SESSION['usuario'];
$codigo = $_SESSION['codvistoria'];
$A = new pneuClasse("", "", "", "", "", "", "", "", "");
$A->mostra2($codigo, $link);
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel = "stylesheet" type="text/css" href = "css/estilo.css" >
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <!-- Font Awesome -->

        <title> Vistoria</title>
    </head>
    <body>


        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">

            <!-- Logo -->
            <a href="vistoria.php" class="navbar-brand">Digital Vistorias</a>

            <!-- Menu Hamburguer -->
            <button class="navbar-toggler" data-toggle="collapse" 
                    data-target="#navegacao2">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- navegacao -->
            <div class="collapse navbar-collapse" id="navegacao2">
              <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="dadosAssociado.php" class="nav-link">Associado</a>
                    </li>
                    <li class="nav-item">
                        <a href="dadosVeiculo.php" class="nav-link">Veiculo</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link ">Vistoria</a>
                    </li>
                    <li class="nav-item">
                        <a href="checklist.php" class="nav-link ">Checklist</a>
                    </li>
                    <li class="nav-item">
                        <a href="danosAvarias.php" class="nav-link ">Danos/Avarias</a>
                    </li>
                    <li class="nav-item">
                        <a href="documentos.php" class="nav-link ">Documentos</a>
                    </li>
                    <li class="nav-item ">
                        <a href="logout2.php" class="nav-link">Sair</a>

                    </li>


                </ul>
            </div>

        </nav>
        <div class="container">
            <br>
			

            <div class="Jumbotron text-center">
                <div class="container">
						<?php
					if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
					}
			?>
                    <form action="#" method="Post" enctype="multipart/form-data">
                        <br>

                        <h5> Pneus</H5>
                        <div class="input-group">
                            <select class="form-control" name="tipo" id="estado">
                                <option>Pneu Dianteiro Direito</option>
                                <option>Pneu Dianteiro Esquerdo</option>
                                <option>Estepe</option>
                                <option>Pneu Traseiro Direito</option>
                                <option>Pneu Traseiro Esquerdo</option>
                            </select>
                             <input class="form-control" name="marca" type="text" placeholder="Marca">
                        </div>
                       
                        <select class="form-control" name="estado" id="estado">
                            <option>Estado</option>
                            <option>Novo</option>
                            <option>Bom</option>
                            <option>Ruim</option>
                        </select>
                        <div class="input-group">
                            <input class="form-control" name="obs" type="text" placeholder="Observação">
                        </div>
                        <div class="input-group">
                            <div class="form-group">
                                <label for="arquivo">Foto</label>
                            
                                 <input class="form-control-file" type="file" name="arquivo" id="arquivo" accept="image/*" capture="camera">
                            </div>

                        </div>
                        
						
							<div class="progress">
							<div class="progress-bar" style="width: 0%">
						</div>
						</div>
						<br><br>
                        <input  class="btn btn-primary" type="submit" name="salvar" value="Salvar">
                    </form>
                </div>




            </div>            <br>

            <br><br>

            <?php
            if (isset($A->getTipo()[0])) {
                ?>
                <table class="table table-striped">

                    <?php
                    for ($i = 0; $i < count($A->getCodigo()); $i++) {

                        echo ' 
      
   <tr>
   <td>' . $A->getTipo()[$i] . '</td><td>' . $A->getMarca()[$i] . '</td><td>' . $A->getEstado()[$i] . '</td><td>' . $A->getObs()[$i] . '</td><td><img   width="100"  src="upload/' . $A->getFoto()[$i] . '"></td>
   </tr>
 
'
                        ;
                    }
                    ?>

                </table>
                <?php
            }
            ?>


        </div>


        <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>   
   <script>
			$(document).on('submit', 'form', function (e) {
				e.preventDefault();
				//Receber os dados
				$form = $(this);				
				var formdata = new FormData($form[0]);
				
				//Criar a conexao com o servidor
				var request = new XMLHttpRequest();
				
				//Progresso do Upload
				request.upload.addEventListener('progress', function (e) {
					var percent = Math.round(e.loaded / e.total * 100);
					$form.find('.progress-bar').width(percent + '%').html(percent + '%');
				});
				
				//Upload completo limpar a barra de progresso
				request.addEventListener('load', function(e){
					$form.find('.progress-bar').addClass('progress-bar-success').html('upload completo...');
					//Atualizar a página após o upload completo
					setTimeout("window.open(self.location, '_self');", 1000);
				});
				
				//Arquivo responsável em fazer o upload da imagem
					request.open('post', 'processapneu.php');
				request.send(formdata);
			});
		</script>
	</body>
</html>

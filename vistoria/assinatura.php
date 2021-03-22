<?php
session_start();
include '../movimento/procedimentos.php';
require_once '../classes/vendedor.php';
require_once '../classes/vistoriacCarro.php';
require_once '../classes/assinaturaClasse.php';


$codvistoria = $_SESSION['codvistoria'];
$A = new assinaturaClasse("", "", "", "", "");
$A->mostra($codvistoria, $link);
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head><meta charset="gb18030">
        <!-- Meta tags Obrigatórias -->

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel = "stylesheet" type="text/css" href = "../css/estilo.css" >
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <!-- Font Awesome -->

        <title> Vistoria</title>
        <style>
            .wrapper {
                position: relative;
                width: 600px;
                height: 367px;
                -moz-user-select: none;
                -webkit-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }
            img#canva{
                position: absolute;
                left: 0;
                top: 0;
            }

            .signature-pad {
                position: absolute;
                left: 0;
                top: 0;
                width:600px;
                height:367px;
            }
        </style>
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
                        <a href="danosAvarias.php" class="nav-link ">Danos/Avarias</a>
                    </li>
                    <li class="nav-item">
                        <a href="documentos.php" class="nav-link ">Documentos</a>
                    </li>
                    <li class="nav-item">
                        <a href="assinatura.php" class="nav-link ">Assinatura</a>
                    </li>
                    <li class="nav-item ">
                        <a href="logout2.php" class="nav-link">Sair</a>

                    </li>


                </ul>
            </div>

        </nav>
        <div class="container">
            <h4 class="text-center text-dark pt-2"></h3>



                <div class="wrapper">
                    <img id="canva" src="Hatch.jpg" width=600 height=367 />
                    <canvas id="signature-pad" class="signature-pad" width=600 height=367></canvas>
                </div>
                <br>
                <div>
                    <button id="save" class="btn btn-primary">Gerar Assinatura</button>
                    <button id="clear" class="btn btn-primary">Limpar</button>
                </div>
                <br>
                <form action="movimentoassinatura.php" method="Post" >
                    <textarea name="imagem" id="imageCheck"  style="display:none;" required cols="30" rows="10"></textarea>






                    <h3>Assinatura Cadastrada</h3>
                    <?php
                    if ($A->getAssinatura()) {
                        ?>
                        <img src = "<?php echo $A->getAssinatura(); ?>" width = 600 height = 367 />
                        <br>
                        <input class="form-control" type="hidden" name="possui" value="sim">
                        <?php
                    }
                    ?>

                    <input  class="btn btn-primary" type="submit" name="enviar" value="Enviar">
                </form>

        </div>
        <!--JavaScript (Opcional) -->
        <!--jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity = "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin = "anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/signature_pad@3.0.0-beta.3/dist/signature_pad.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
        <script>
            function download(dataURL, filename) {
                if (navigator.userAgent.indexOf("Safari") > -1 && navigator.userAgent.indexOf("Chrome") === -1) {
                    window.open(dataURL);
                } else {
                    var blob = dataURLToBlob(dataURL);
                    var url = window.URL.createObjectURL(blob);

                    var a = document.createElement("a");
                    a.style = "display: none";
                    a.href = url;
                    a.download = filename;

                    document.body.appendChild(a);
                    a.click();

                    window.URL.revokeObjectURL(url);
                }
            }

            function dataURLToBlob(dataURL) {
                // Code taken from https://github.com/ebidel/filer.js
                var parts = dataURL.split(';base64,');
                var contentType = parts[0].split(":")[1];
                var raw = window.atob(parts[1]);
                var rawLength = raw.length;
                var uInt8Array = new Uint8Array(rawLength);

                for (var i = 0; i < rawLength; ++i) {
                    uInt8Array[i] = raw.charCodeAt(i);
                }

                return new Blob([uInt8Array], {type: contentType});
            }


            var signaturePad = new SignaturePad(document.getElementById('signature-pad'), {
                backgroundColor: 'rgba(255, 255, 255, 0)',
                penColor: 'rgb(0, 0, 0)'
            });


            var saveButton = document.getElementById('save');
            var cancelButton = document.getElementById('clear');



            saveButton.addEventListener("click", function (event) {
                if (signaturePad.isEmpty()) {
                    alert("Faça sua assinatura.");
                } else {
                    var dataURL = signaturePad.toDataURL();
                    //download(dataURL, "signature.png");
                    //alert(dataURL);
                    $("#imageCheck").val(dataURL);
                }
            });

            cancelButton.addEventListener('click', function (event) {
                signaturePad.clear();
            });

        </script>
    </body>
</html>




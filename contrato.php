<?php
$placa = $_GET['codi'];
$endereco ="documentos/contrato-$placa.pdf";
print_r($endereco);
?>


  <div class="container">

 
      <iframe src="<?php echo $endereco;?>" width="800" height="780" style="border: none;"></iframe>
  
  </div>



    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  </body>
</php>
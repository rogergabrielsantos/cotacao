function codigo(cod){
  document.getElementById("codaux").value = cod;
  
    
    
}
 function actionMuda(){
                
                //document.forms[0] = "movimentacaoBanco.php";
               document.forms['signup'].action = "entrada.php";
              document.forms[0].submit();
}


function alterarVendedor() {

    document.getElementById('nome').readOnly = false;
    document.getElementById('cpf').readOnly = false;
    document.getElementById('email').readOnly = false;
    document.getElementById('telefone').readOnly = false;
    document.getElementById('usuario').readOnly = false;
    document.getElementById('senha').readOnly = false;
     document.getElementById('status').readOnly = false;

}

function alterarAssociado() {
    document.getElementById('nome').readOnly = false;
    document.getElementById('cpf').readOnly = false;
    document.getElementById('nascimento').readOnly = false;
    document.getElementById('identidade').readOnly = false;
    document.getElementById('cnh').readOnly = false;
    document.getElementById('logradouro').readOnly = false;
    document.getElementById('numero').readOnly = false;
    document.getElementById('bairro').readOnly = false;
    document.getElementById('cidade').readOnly = false;
    document.getElementById('estado').readOnly = false;
    document.getElementById('cep').readOnly = false;
    document.getElementById('telefone').readOnly = false;
    document.getElementById('telefone2').readOnly = false;
    document.getElementById('email').readOnly = false;
}
function alterarVeiculo() {
    document.getElementById('tabelafipe').readOnly = false;
    document.getElementById('codfipe').readOnly = false;
    document.getElementById('cota').readOnly = false;
    document.getElementById('plano').readOnly = false;
    document.getElementById('tipo').readOnly = false;
    document.getElementById('portas').readOnly = false;
    document.getElementById('alienado').readOnly = false;
    document.getElementById('marca').readOnly = false;
    document.getElementById('cor').readOnly = false;
    document.getElementById('combustivel').readOnly = false;
    document.getElementById('modelo').readOnly = false;
    document.getElementById('ano').readOnly = false;
    document.getElementById('placa').readOnly = false;
    document.getElementById('renavam').readOnly = false;
    document.getElementById('chassi').readOnly = false;
    document.getElementById('km').readOnly = false;
    document.getElementById('potencia').readOnly = false;
    document.getElementById('cilindrada').readOnly = false;
    document.getElementById('rastreador').readOnly = false;
    



}


                
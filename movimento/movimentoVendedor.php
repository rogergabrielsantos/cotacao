<?php
session_start();
require_once 'procedimentos.php';
require_once '../classes/vendedor.php';
require_once '../classes/usuarios.php';

$nome= $_POST['nome']; 
$cpf= $_POST['cpf']; 
$email = $_POST['email'];
$telefone= $_POST['telefone']; 
$usuario=  isset($_POST['usuario'])?$_POST['usuario']:"";
$senha=  isset($_POST['senha'])?$_POST['senha']:"";
$codigo= isset($_POST['codigo'])?$_POST['codigo']:"";
$status= isset($_POST['status'])?$_POST['status']:"Ativo";

$A = new vendedor($codigo, $nome, $cpf, $email, $telefone, $usuario, $senha,$status);


    switch (get_post_action('salvar','deletar', 'alterar')) {
	
        case 'salvar':
            
            $A->insere($link);
            $B = new usuarios("", $nome, $usuario, $senha, "2",$cpf,"sim","Ativo");
            $B->insere($link);
            $_SESSION['msg'] = "<div class='alert alert-success'>Vendedor cadastrado com sucesso!</div>";
             echo("<script type='text/javascript'> location.href='../cadastroVendedor.php';</script>");

            
        break;
        case 'deletar':
            $A->delete($codigo, $link);
             $_SESSION['msg'] = "<div class='alert alert-success'>Vendedor Excluido com sucesso!</div>";
            echo("<script type='text/javascript'> location.href='../consultaVendedor2.php';</script>");
            
	break;
      
	case 'alterar':
                
	$A->atualiza($codigo, $link);
             $_SESSION['msg'] = "<div class='alert alert-success'>Vendedor alterado com sucesso!</div>";
             echo("<script type='text/javascript'> location.href='../consultaVendedor2.php';</script>");
            
	break;
	
		
		}




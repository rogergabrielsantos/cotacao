<?php

session_start();
require_once 'procedimentos.php';
require_once '../classes/usuarios.php';

$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$perfil = $_POST['perfil'];
$codigo = isset($_POST['codigo']) ? $_POST['codigo'] : "";
$acesso = isset($_POST['acesso']) ? $_POST['acesso'] : "";
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : "";
$status = isset($_POST['status']) ? $_POST['status'] : "Ativo";
$A = new usuarios($codigo, $nome, $usuario, $senha, $perfil,$cpf,$acesso, $status);





$delete = isset($_POST['deletar_x']) ? $_POST['deletar_x'] : "";
$alterar = isset($_POST['alterar_x']) ? $_POST['alterar_x'] : "";
$salvar = isset($_POST['salvar_x']) ? $_POST['salvar_x'] : "";
$mudar = isset($_POST['mudar_x']) ? $_POST['mudar_x'] : "";
if ($delete) {
    $A->delete($codigo, $link);
    $_SESSION['msg'] = "<div class='alert alert-success'>Usuario /Excluido com sucesso!</div>";
    echo("<script type='text/javascript'> location.href='../consultausuarios.php';</script>");
}

if ($alterar) {
    $A->atualiza($codigo, $link);
    $_SESSION['msg'] = "<div class='alert alert-success'>Usuario atualizado com sucesso!</div>";
    echo("<script type='text/javascript'> location.href='../consultausuarios.php';</script>");
}
if ($salvar) {
    $A->insere($link);
    $_SESSION['msg'] = "<div class='alert alert-success'>Usuário cadastrado com sucesso!</div>";
    echo("<script type='text/javascript'> location.href='../consultausuarios.php';</script>");
}
if ($mudar) {
    $A->atualizasenha($codigo, $link);
    $_SESSION['msg'] = "<div class='alert alert-success'>Senha atualizada com sucesso!</div>";
    echo("<script type='text/javascript'> location.href='../index.php';</script>");
}

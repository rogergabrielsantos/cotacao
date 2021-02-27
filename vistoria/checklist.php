<?php
session_start();
include '../movimento/procedimentos.php';
require_once '../classes/vistoria.php';
require_once '../classes/checklistcarro.php';
require_once '../classes/checklistmoto.php';

$placa = $_SESSION['usuario'];
$codigo = $_SESSION['codvistoria'];
$controlevistoria = $_SESSION['controle'];
$tipo = $_SESSION['tipo'];

if ($tipo == 'Moto') {
    require_once ('checklist2.php');
} else {
    
    require_once ('checklist1.php');
}
?>



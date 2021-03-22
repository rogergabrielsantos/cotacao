<?php

	error_reporting(E_ALL ^ E_DEPRECATED);
	$host = "localhost";
	$user = "root";
	$senha = "";
	$banco = "cotacao";
	$charset = "utf8";
		
		


$link = mysqli_connect($host, $user, $senha, $banco) or die(mysqli_connect_error());
if (mysqli_connect_error()) {
//echo "n達o conectado";
exit();
}
if($link){
   
}

?>
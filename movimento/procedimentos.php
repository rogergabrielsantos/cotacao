<?php
include "conexao.php";
if(empty($_SESSION['perfil'])) {
echo("<script type='text/javascript'> location.href='index.php';</script>");	
}

 function get_post_action($name){
    $params = func_get_args();

    foreach ($params as $name) {
        if (isset($_POST[$name])) {
            return $name;
        }
    }
}

	
<?php
include_once ("config.php");

$conexao = mysqli_connect($host, $db_user, $db_password, $db_name);


if(!$conexao){
    die ("Não há conexão com o banco de dados" . mysqli_connect_error());
}





?>
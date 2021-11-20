<?php
Require_once './conexao.php';


$nome = $_GET['U_NOME'];
$curso = $_GET['U_CURSO'];
$tipo = $_GET['U_TIPO'];
$comentario = $_GET['U_COMENTARIO'];

$consulta = "INSERT INTO caixa_de_sugestao (`NOME`, `CURSO`, `TIPO`, `COMENTARIO`) VALUES ('$nome', '$curso', '$tipo', '$comentario')";


$retorno = mysqli_query($conexao, $consulta);

if($retorno){
    echo("Registro Inserido com sucesso!!!!");
    header('Location: sugetoes.php');
}





?>
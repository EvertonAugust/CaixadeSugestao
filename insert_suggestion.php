<?php
Require_once './php/conexao.php';


$nome = $_POST['U_NOME'];
$curso = $_POST['U_CURSO'];
$tipo = $_POST['U_TIPO'];
$comentario = $_POST['U_COMENTARIO'];

$sql = "INSERT INTO caixa_de_sugestao (`NOME`, `CURSO`, `TIPO`, `COMENTARIO`) VALUES ('$nome', '$curso', '$tipo', '$comentario')";

echo "$sql";


$retorno = mysqli_query($conexao, $sql);

echo "$retorno";

if($retorno){
    echo("Registro Inserido com sucesso!!!!");
    
}





?>
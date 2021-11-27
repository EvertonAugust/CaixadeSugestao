<?php
    include_once('./php/conexao.php');
    header('Content-Type: application/json; charset=utf-8');
    http_response_code(200);

    $sql = "SELECT CONTEUDO, CURSO, TIPO, NOME, 'DATA', HORA FROM sugestoes;";

    $result = mysqli_query($conexao, $sql);

    $stack = array();
    while( $row = mysqli_fetch_array( $result, MYSQLI_ASSOC ) ) {
        array_push( $stack, $row );
    }

    
    $theArray = json_encode( $stack );
    print_r( $theArray );
    
        
    //mysqli_close($conexao);

?>
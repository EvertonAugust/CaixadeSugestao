<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="../css/style.css">
    <title>Caixa de Sugestões</title>



    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

    <nav style="background-color: #6eb9ee;">
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo"><i class="material-icons">&nbsp&nbsp&nbsp&nbspdashboard</i>Suggestion</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#"><i class="material-icons">search</i></a></li>
                <li><a href="#"><i class="material-icons">view_module</i></a></li>
                <li><a href="./sugetoes.php"><i class="material-icons">refresh</i></a></li>
                <li><a href="#"><i class="material-icons">more_vert</i></a></li>
            </ul>
        </div>
    </nav>
    <br>

    <div class="conteiner-fluid">
        <div class="row">

            <?php
            include_once("./conexao.php");

            $timezone = new DateTimeZone('America/Sao_Paulo');
            $Data = new DateTime('now', $timezone);

            $sql = 'SELECT * FROM caixa_de_sugestao ';

            $resultado = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultado, MYSQLI_BOTH)) {
                $Curso = $linha['CURSO'];
                $Nome = $linha['NOME'];
                $Tipo = $linha['TIPO'];
                $Comentario = $linha['COMENTARIO'];
                $data = $linha['DATA'];
                $hora = $linha['HORA'];

                $url_imagem = getImageUrl($Tipo);



                echo '<div class="col s12 m12 l6 lg6">
                <div class="card sombra_div">
                    <div class="card-content">
                        <span class="card-title titulo">' . $Tipo . '</span>
                        <img src="' . $url_imagem . '" alt="" class="imagem_tamanho">
                        
                        <p style="height:20px;">' . $Comentario . '</p>
                    </div>


                    <div class="card-content">
                        <div class="row" >
                            <span class="col s4 left-align curso ">' . $Curso . '</span>
                            <span class="col s4 center-align vermelho">' . $Nome . '</span>
                            <span class="col s4 right-align">' . $data . '<br><p style="margin-right:10px;">' . $hora . '</p></span>
                        </div>
                    </div>
                </div>
            </div>';
            }

            function getImageUrl($Tipo)
            {
                if ($Tipo == 'Sugestão') {
                    return "../img/sugestao.png";
                } else if ($Tipo == 'Comentário') {
                    return "../img/comentario.png";
                } else if ($Tipo == 'Reclamação') {
                    return "../img/reclamacao.png";
                } else {
                    return "../img/elogio.png";
                }
            }

            ?>

        </div>



    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <img src="./" alt="">
</body>

</html>
<?php

require_once './php/conexao.php'


?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="./css/tooplate.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body id="application">
    <nav>
        <div style="background-color:#6eb9ee;" class="nav-wrapper">
            <a href="#" class="brand-logo right"><img style="height: 50px;margin: 5px;" src="./img/questionario.png" alt="Logo"></a>
            <p style="font-weight: bolder;font-size:30px;margin-left: 10px;">Formulário - Caixa de Sugestões</p>
        </div>
    </nav>
    <pre>
    </pre>
    <div class="container caixa">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12  mx-auto">
                <header class="mt-5 mb-5 text-center">


                </header>
                <form action="./php/include.php" method="GET" enctype="multipart/form-data" class="tm-form-white tm-font-big">
                    <div class="tm-bg-white tm-form-pad-big">
                        <div class="form-group mb-5">
                            <label style="font-weight: bolder;" for="NOME" class="black-text mb-4 big">Nome</label>
                            <input id="NOME" name="U_NOME" type="text" class="validate tm-input-white-bg">
                        </div>


                        <div class="row">
                            <div class="form-group col-xl-6 col-lg-6 col-md-6 col-12 pl-0 tm-form-group-2-col tm-form-group-2-col-l">
                                <label style="font-weight: bolder;" class="black-text mb-4 big">Curso</label>

                                <select name="U_CURSO" id="CURSO">
                                    <option value="-">Selecione</option>
                                    <option value="Administação">Administração</option>
                                    <option value="Desenvolvimento de Sistemas">Desenvolvimento de Sistemas</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Meio Ambiente">Meio Ambiente</option>
                                </select>
                            </div>
                            <div class="form-group mb-2 col-xl-6 col-lg-6 col-md-6 col-12 pl-0 tm-form-group-2-col tm-form-group-2-col-l">
                                <label style="font-weight: bolder;" class="black-text mb-4 big">Tipo</label>

                                <select name="U_TIPO" id="TIPO">
                                    <option value="-">Selecione</option>
                                    <option value="Sugestão">Sugestão</option>
                                    <option value="Comentário">Comentário</option>
                                    <option value="Elogio">Elogio</option>
                                    <option value="Reclamação">Reclamação</option>
                                </select>
                            </div>
                        </div>





                        <div class="form-group">
                            <label style="font-weight: bolder;" for="COMENTARIO" class="black-text mb-4 big">Conte pra gente</label>
                            <textarea class="p-3" style="height: 130px;;" name="U_COMENTARIO" id="COMENTARIO" cols="30" rows="4" placeholder="Comente aqui"></textarea>
                        </div>

                    </div>
                    <div class="text-center mt-5">
                        <a href="./php/sugetoes.php"><button class="waves-effect waves-light btn-large" type="submit" name="action">Enviar

                            </button>


                    </div>
                </form>
            </div>
        </div>
        <pre>
                            </pre>

    </div>

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
            $('select').formSelect();
        });
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Cadastrar Ocupação</title>
</head>
<link rel="stylesheet" href="<?php echo base_url("/CSS/Style.css") ?>">

<body>
    <header class="topo">
        <a class="link" href="/ProjetoWeb/public">Home</a> &nbsp;
        <a class='link' href='/ProjetoWeb/public/cadTipoServ'>Tipo de Serviço</a> &nbsp;
        <a class='link' href='/ProjetoWeb/public/cadServico'>Serviço</a> &nbsp;
        <a class='link' href='/ProjetoWeb/public/cadAtendimento'> Atendimento</a> &nbsp;
        <a class="link" href="/ProjetoWeb/public/logout">Logout</a>
    </header>

    <?php
    $session = session();
    use App\Models\SelectOptions;

    foreach($ConOcupacao->getResult() as $valor) {
            echo " 
                <form action='' method='post' Style='padding-top: 2vh;'>
                    <div class='input-group mb-3'>
                        <span class='input-group-text' id='inputGroup-sizing-default'>Código Ocupação</span>
                        <input type='number' class='form-control' name='CodOcupacao' value='$valor->CodOcupacao' aria-label='Sizing example input'
                            aria-describedby='inputGroup-sizing-default'>
                    </div>
                    Usuário Cadastrado =
                    ";
                    $so = new SelectOptions();
                    $so->selectNomeUsuario($valor->CodUsuario);
                echo "
                    <div class='input-group mb-3'>
                        <label class='input-group-text' for='inputGroupSelect01'>Usuário</label>
                        <select class='form-select' name='CodUsuario' id='inputGroupSelect01'>
                            ";
                            $so = new SelectOptions();
                            $so->SelectUsuário();
                echo "
                        </select>
                    </div>
                    Data Cadastrada: $valor->Data;
                    <div class='input-group mb-3'>
                        <span class='input-group-text' id='inputGroup-sizing-default'>Data</span>
                        <input type='date' class='form-control' name='Data' aria-label='Sizing example input'
                            aria-describedby='inputGroup-sizing-default'>
                    </div>
                    Hora Cadastrada: $valor->Hora;
                    <div class='input-group mb-3'>
                        <span class='input-group-text' id='inputGroup-sizing-default'>Hora</span>
                        <input type='time' class='form-control' name='Hora' aria-label='Sizing example input'
                            aria-describedby='inputGroup-sizing-default'>
                    </div>
                    <input class='form-control' type='submit' value='Confirmar' class='btn btn-primary'>
                </form> ";
    
            }        
    
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>
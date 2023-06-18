<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Cadastrar Serviço</title>
</head>
<link rel="stylesheet" href="../CSS/Style.css">

<body>
    <header class="topo">
        <a class="link" href="/ProjetoWeb/public">Home</a> &nbsp;
        <a class='link' href='/ProjetoWeb/public/cadTipoServ'>Cadastrar Tipo de Serviço</a> &nbsp;
        <a class='link' href='/ProjetoWeb/public/cadOcupacao'>Ocupação Usuário</a> &nbsp;
        <a class='link' href='/ProjetoWeb/public/cadAtendimento'> Atendimento</a> &nbsp;
        <a class="link" href="/ProjetoWeb/public/logout">Logout</a> 
    </header>

    <div class="container-fluid"><br>
        <?php
        use App\Models\SelectOptions;

        $session = session();
        if ($session->get("Tipo") == "1") {
            echo "
                <form action='' method='post'>
                    <div class='input-group mb-3'>
                            <label class='input-group-text' for='inputGroupSelect01'>Tipo de Serviço</label>
                            <select class='form-select' name='CodTipoServ' id='inputGroupSelect01'>;";
                                $so = new SelectOptions();
                                $so->SelectTipoServ();
            echo "
                            </select>


                        <div class='input-group mb-3'>
                            <label class='input-group-text' for='inputGroupSelect01'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Usuário&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <select class='form-select' name='CodUsuario' id='inputGroupSelect01'>;";
                                $so = new SelectOptions();
                                $so->SelectUsuário();

            echo "
                            </select>
                        </div>


                        <div class='input-group mb-3'>
                            <span class='input-group-text' id='inputGroup-sizing-default'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Descrição&nbsp;&nbsp;&nbsp;</span>
                            <input type='text' class='form-control' name='Descricao' aria-label='Sizing example input'
                                aria-describedby='inputGroup-sizing-default'>
                        </div>
                        <input class='form-control' type='submit' value='Confirmar' class='btn btn-primary'>
                </form>";
        } else {
            echo "
            <form action='' method='post'>
                <div class='input-group mb-3'>
                        <label class='input-group-text' for='inputGroupSelect01'>Tipo de Serviço</label>
                        <select class='form-select' name='CodTipoServ' id='inputGroupSelect01'>;";
            $so = new SelectOptions();
            $so->SelectTipoServ();

            echo "
                        </select>

                    <div class='input-group mb-3'>
                        <span class='input-group-text' id='inputGroup-sizing-default'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Descrição&nbsp;&nbsp;&nbsp;</span>
                        <input type='text' class='form-control' name='Descricao' aria-label='Sizing example input'
                            aria-describedby='inputGroup-sizing-default'>
                    </div>
                    <input class='form-control' type='submit' value='Confirmar' class='btn btn-primary'>
                </form>";
        }
        ?>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Cadastrar Tipo de Serviço</title>
</head>
<link rel="stylesheet" href="../CSS/Style.css">

<body>
    <header class="topo">
        <a class="link" href="/ProjetoWeb/public">Home</a> &nbsp;
        <a class='link' href='/ProjetoWeb/public/cadServico'>Serviço</a> &nbsp;
        <a class='link' href='/ProjetoWeb/public/cadOcupacao'>Ocupação Usuário</a> &nbsp;
        <a class='link' href='/ProjetoWeb/public/cadAtendimento'> Atendimento</a> &nbsp;
        <a class="link" href="/ProjetoWeb/public/logout">Logout</a>
    </header>

    <div class="container-fluid"><br>
        <form action="" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Nome Serviço</span>
                <input type="text" class="form-control" name="NomeServico" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Preço</span>
                <input type="number" class="form-control" name="Preco" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Descrição</span>
                <input type="text" class="form-control" name="Descricao" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <input class="form-control" type="submit" value="Confirmar" class="btn btn-primary">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>
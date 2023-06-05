<html>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Cadastrar Animal</title>
</head>
<style>
    #background {
        background-color: rgb(230, 223, 223);
    }

    .topo {
        text-align: center;
        background-color: black;
        height: 7vh;
    }

    .link {
        color: rgb(177, 190, 202);
        font-family: 'Segoe UI';
        font-size: 18px;
        text-decoration: none;
        background-color: black;
    }

    #sec1 {
        margin-left: 10vw;
        margin-right: 10vw;
        height: 100vh;
    }
</style>

<body>

    <header class="topo">
        <a class="link" href="/ProjetoWeb/public">Home</a> &nbsp;
    </header>
    <main id="background">
        <div id="sec1" class="container"><br>
            <form action="CadA2" method="post">
                Situação:
                <select class="form-control" name="Situacao">
                    <option value="0">Inativo</option>
                    <option value="1">Ativo</option>
                </select> <br>
                <input class="form-control" type="text" name="Nome" placeholder="Nome">
                <input class="form-control" type="text" name="Tipo" placeholder="Tipo">
                <input class="form-control" type="text" name="Raca" placeholder="Raça"> 
                <input class="form-control" type="text" name="Idade" placeholder="Idade"><br>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data Adoção</span>
                    <input type="date" class="form-control" name="Data_Adocao" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default">
                </div>
                <input class="form-control" type="submit" value="Confirmar" class="btn btn-primary">
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
        <?php 
        $session = session();
        $CodCli = $session->get('Id_Cliente');  
        var_dump($CodCli);
        ?>
</body>

</html>
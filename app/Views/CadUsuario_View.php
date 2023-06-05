<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Cadastrar Usuário</title>
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
    }
</style>

<body>
    <header class="topo">
        <a class="link" href="/ProjetoWeb/public">Home</a> &nbsp;
        <a class='link' href='/ProjetoWeb/public/LoginFC'>Login </a>
    </header>
    <main id="background">
        <div id="sec1" class="container">
            <form action="cadU2" method="post">
                <h1>Cadastrar Usuário</h1>
                <input class="form-control" type="text" name="Nome" placeholder="Nome">
                <input class="form-control" type="text" name="Senha" placeholder="Senha">
                <input class="form-control" type="text" name="E_mail" placeholder="E_mail"><br>
                <input class="form-control" type="text" name="CPF" placeholder="CPF">
                <input class="form-control" type="text" name="FoneRes" placeholder="Fone Residencial">
                <input class="form-control" type="text" name="FoneCom" placeholder="Fone Comercial">
                <input class="form-control" type="text" name="Celular" placeholder="Celular"><br>

                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Função</label>
                    <select class="form-select" id="inputGroupSelect01" name="Funcao">
                        <option value="1">Doutor</option>
                        <option value="2">Tosador</option>
                        <option value="3">Groomer</option>
                        <option value="4">Atendente</option>
                        <option value="5">Gestor</option>
                    </select>
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Tipo</label>
                    <select class="form-select" id="inputGroupSelect01" name="Tipo">
                        <option value="0">Usuário Comum</option>
                        <option value="1">Usuário Administrador</option>
                    </select>
                </div>


                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data Admissão</span>
                    <input type="date" class="form-control" name="Data_Admissao" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default">
                </div>

                <input class="form-control" type="submit" value="Confirmar" class="btn btn-primary">
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>
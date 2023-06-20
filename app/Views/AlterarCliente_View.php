<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Cadastrar Cliente</title>
</head>
<link rel="stylesheet" href="<?php echo base_url("/CSS/Style.css") ?>">

<body>
    <main id="background">
        <header class="topo">
            <a class="link" href="/ProjetoWeb/public">Home</a> &nbsp;
        </header>
        <div id="sec1" class="container">
            <form action="CadastrarC2" method="post">
                <h1>Cadastrar Cliente</h1>
                <label class="form-label">Situação:</label>
                <select id="Situacao" class="form-control">
                    <option value="0">Inativo</option>
                    <option value="1">Ativo</option>
                </select><br>

                <input class="form-control" type="text" name="Nome" placeholder="Nome">
                <input class="form-control" type="text" name="Senha" placeholder="Senha">
                <input class="form-control" type="text" name="E_mail" placeholder="E-mail"><br>
                <input class="form-control" type="text" name="CPF" placeholder="CPF">
                <input class="form-control" type="text" name="FoneRes" placeholder="Fone Residencial">
                <input class="form-control" type="text" name="FoneCom" placeholder="Fone Comercial"><br>
                <input class="form-control" type="text" name="Celular" placeholder="Celular">
                <input class="form-control" type="text" name="Cidade" placeholder="Cidade">
                <input class="form-control" type="number" name="Numero" placeholder="Número"><br>
                <input class="form-control" type="text" name="Estado" placeholder="Estado">
                <input class="form-control" type="text" name="Complemento" placeholder="Complemento">
                <input class="form-control" type="text" name="CEP" placeholder="CEP"><br>
                <input class="form-control" type="text" name="Logradouro" placeholder="Logradouro">
                <input class="form-control" type="submit" value="Confirmar" class="btn btn-primary"><br>
                Se não é cliente mas um usário do sistema clique <a href="/ProjetoWeb/public/cadU">Aqui</a> para
                cadastrar
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>
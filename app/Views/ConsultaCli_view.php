<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Consulta Clientes</title>
</head>
<link rel="stylesheet" href="../CSS/Style.css">

<body>
    <header class="topo">
        <a class="link" href="/ProjetoWeb/public">Home</a> &nbsp;
        <a class="link" href="/ProjetoWeb/public/ConAdm">Consultas</a>
    </header>
    <main id="background">
        <h2 style="padding-top: 2vh; margin-left: 80vh;"><strong>Consulta Cliente</strong></h2>
        <div class="container" style="padding-top: 2vh; margin-left: 3vh;">
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="Nome" placeholder="Nome Do Cliente"
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <input class="btn btn-outline-secondary" type="submit" id="button-addon2"></input>
                </div>
            </form>

            <?php
            use App\Models\SelectOptions;
            $so = new SelectOptions();
            foreach ($ConCli->getResult() as $valor) {
                echo $valor->Nome;
                echo "<br>";
                echo "Email: ", $valor->E_mail;
                echo "<br>";
                echo "Siruação: ", $so->selectSituacao($valor->Situacao); 
                echo "<br>";
                echo "CPF: ", $valor->CPF;
                echo "<br>";
                echo "Celular: ", $valor->Celular;
                echo "<br>";
                echo "Cidade: ", $valor->Cidade;
                echo "<br>";
                echo "Número: ", $valor->Numero;
                echo "<br>";
                echo "Estado: ", $valor->Estado;
                echo "<br>";
                echo "CEP: ", $valor->CEP;
                echo "<br>";
                echo "Logradouro:", $valor->Logradouro;
                echo "<br>";
                 echo "<a href='/ProjetoWeb/public/AltCli'>Alterar</a>";
                echo "<br>";
                echo "<br>";
            }
            ?>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>
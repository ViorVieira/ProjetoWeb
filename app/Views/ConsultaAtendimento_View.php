<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Consulta Atendimento</title>
</head>
<link rel="stylesheet" href="../CSS/Style.css">

<body>
    <header class="topo">
        <a class="link" href="/ProjetoWeb/public">Home</a> &nbsp;
        <a class="link" href="/ProjetoWeb/public/ConAdm">Consultas</a>
    </header>
    <main id="background">
        <h2 style="padding-top: 2vh; margin-left: 80vh;"><strong>Consulta Atendimento</strong></h2>
        <div class="container" style="padding-top: 2vh; margin-left: 3vh;">
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="Nome" placeholder="Nome Do Animal"
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <input class="btn btn-outline-secondary" type="submit" id="button-addon2"></input>
                </div>
            </form>

            <?php
            use App\Models\SelectOptions;
            $so = new SelectOptions();
             foreach ($ConAtendimento->getResult() as $valor) {
                 echo "Usuário Responsável: ", $so->selectNomeUsuarioAtendimento($valor->CodServico);
                 echo "<br>";
                 echo "Animal: ", $so->selectNomeAnimal($valor->CodAnimal);
                 echo "<br>";
                 echo "Data: ", $so->selectDataAtendimento($valor->CodOcupacao);
                 echo "<br>";
                 echo "Hora: ", $so->selectHoraAtendimento($valor->CodOcupacao);
                 echo "<br>";
                 echo "Status: ", $so->selectStatusAtendimento($valor->ServicoRealizado);
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
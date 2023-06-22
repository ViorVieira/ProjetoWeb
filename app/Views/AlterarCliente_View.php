<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Alterar Cliente</title>
</head>
<link rel="stylesheet" href="<?php echo base_url("/CSS/Style.css") ?>">

<body>
    <main id="background">
        <header class="topo">
            <a class="link" href="/ProjetoWeb/public">Home</a> &nbsp;
        </header>
        <div id="sec1" class="container" style="margin-top: 3vh;">
            <?php
            use App\Models\SelectOptions;
            $so = new SelectOptions();
            foreach ($ConCli->getResult() as $valor) {
                echo "
                    <form action='' method='post'>
                        <div class='input-group mb-3'>
                            <span class='input-group-text' id='inputGroup-sizing-default'>Código Cliente</span>
                            <input type='text' class='form-control' name='CodCli' value='$valor->CodCli' aria-describedby='inputGroup-sizing-default'>
                        </div>
                        Situação cadastrada: 
                            ";
                            $so->selectSituacao($valor->Situacao);
                            echo "
                            <div class='input-group mb-3'>
                                <label class='input-group-text' for='inputGroupSelect01'>Situação</label>
                                <select class='form-select' id='inputGroupSelect01' name='Situacao'>
                                    <option value='0'>Inativo</option>
                                    <option value='1'>Ativo</option>
                                </select>
                            </div>
                        <div class='input-group mb-3'>
                            <span class='input-group-text' id='inputGroup-sizing-default'>Nome</span>
                            <input type='text' class='form-control' name='Nome' value='$valor->Nome' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
                        </div>
                        <div class='input-group mb-3'>
                            <span class='input-group-text' id='inputGroup-sizing-default'>E-mail</span>
                            <input type='text' class='form-control' name='E_mail' value='$valor->E_mail' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
                        </div>
                        <div class='input-group mb-3'>
                            <span class='input-group-text' id='inputGroup-sizing-default'>CPF</span>
                            <input type='text' class='form-control' name='CPF' value='$valor->CPF' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
                        </div>
                        <div class='input-group mb-3'>
                            <span class='input-group-text' id='inputGroup-sizing-default'>Fone residencial</span>
                            <input type='text' class='form-control' name='FoneRes' value='$valor->FoneRes' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
                        </div>
                        <div class='input-group mb-3'>
                            <span class='input-group-text' id='inputGroup-sizing-default'>Fone Comercial</span>
                            <input type='text' class='form-control' name='FoneCom' value='$valor->FoneCom' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
                        </div>
                        <div class='input-group mb-3'>
                            <span class='input-group-text' id='inputGroup-sizing-default'>Celular</span>
                            <input type='text' class='form-control' name='Celular' value='$valor->Celular' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
                        </div>
                        <div class='input-group mb-3'>
                            <span class='input-group-text' id='inputGroup-sizing-default'>Cidade</span>
                            <input type='text' class='form-control' name='Cidade' value='$valor->Cidade' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
                        </div>
                        <div class='input-group mb-3'>
                            <span class='input-group-text' id='inputGroup-sizing-default'>Numero</span>
                            <input type='text' class='form-control' name='Numero' value='$valor->Numero' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
                        </div>
                        <div class='input-group mb-3'>
                            <span class='input-group-text' id='inputGroup-sizing-default'>Estado</span>
                            <input type='text' class='form-control' name='Estado' value='$valor->Estado' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
                        </div>
                        <div class='input-group mb-3'>
                            <span class='input-group-text' id='inputGroup-sizing-default'>Complemento</span>
                            <input type='text' class='form-control' name='Complemento' value='$valor->Complemento' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
                        </div>
                        <div class='input-group mb-3'>
                            <span class='input-group-text' id='inputGroup-sizing-default'>CEP</span>
                            <input type='text' class='form-control' name='CEP' value='$valor->CEP' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
                        </div>
                        <div class='input-group mb-3'>
                            <span class='input-group-text' id='inputGroup-sizing-default'>Logradouro</span>
                            <input type='text' class='form-control' name='Logradouro' value='$valor->Logradouro' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
                        </div>
                        <input class='form-control' type='submit' value='Alterar' class='btn btn-primary'><br>
                    </form>";
            }
            ?>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>
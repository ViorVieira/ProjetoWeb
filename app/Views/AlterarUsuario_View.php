<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Cadastrar Usuário</title>
</head>
<link rel="stylesheet" href="<?php echo base_url("/CSS/Style.css") ?>">

<?php
use App\Models\SelectOptions;
 ?>


<body>
    <header class="topo">
        <a class="link" href="/ProjetoWeb/public">Home</a> &nbsp;
    </header>
    <main id="background">
        <div id="sec2" class="container" style="padding-top: 2vh;">
            <?php 
                foreach($ConUsuario->getResult() as $valor){
                    echo "
                        <form action='' method='post'>
                            <div class='input-group mb-3'>
                                <span class='input-group-text' id='inputGroup-sizing-default'>Código do Usuário</span>
                                <input type='text' class='form-control' name='CodUsuario' value='$valor->CodUsuario' aria-describedby='inputGroup-sizing-default'>
                            </div>
                            <div class='input-group mb-3'>
                                <span class='input-group-text' id='inputGroup-sizing-default'>Nome do Cliente</span>
                                <input type='text' class='form-control' name='Nome' value='$valor->Nome' aria-describedby='inputGroup-sizing-default'>
                            </div>
                            <div class='input-group mb-3'>
                                <span class='input-group-text' id='inputGroup-sizing-default'>E-mail</span>
                                <input type='text' class='form-control' name='E_mail' value='$valor->E_mail' aria-describedby='inputGroup-sizing-default'>
                            </div>
                            <div class='input-group mb-3'>
                                <span class='input-group-text' id='inputGroup-sizing-default'>CPF</span>
                                <input type='text' class='form-control' name='CPF' value='$valor->CPF' aria-describedby='inputGroup-sizing-default'>
                            </div>
                            <div class='input-group mb-3'>
                                <span class='input-group-text' id='inputGroup-sizing-default'>Fone Residencial</span>
                                <input type='text' class='form-control' name='FoneRes' value='$valor->FoneRes' aria-describedby='inputGroup-sizing-default'>
                            </div>
                            <div class='input-group mb-3'>
                                <span class='input-group-text' id='inputGroup-sizing-default'>Fone Comercial</span>
                                <input type='text' class='form-control' name='FoneCom' value='$valor->FoneCom' aria-describedby='inputGroup-sizing-default'>
                            </div>
                            <div class='input-group mb-3'>
                                <span class='input-group-text' id='inputGroup-sizing-default'>Celular</span>
                                <input type='text' class='form-control' name='Celular' value='$valor->Celular' aria-describedby='inputGroup-sizing-default'>
                            </div>

                            Função Cadastrada: 
                            ";
                            $so = new SelectOptions();
                            $so->selectFuncaoUsuario($valor->Funcao);
                            echo "
                            <div class='input-group mb-3'>
                                <label class='input-group-text' for='inputGroupSelect01'>Função</label>
                                <select class='form-select' id='inputGroupSelect01' name='Funcao'>
                                    <option value='1'>Doutor</option>
                                    <option value='2'>Tosador</option>
                                    <option value='3'>Groomer</option>
                                    <option value='4'>Atendente</option>
                                    <option value='5'>Gestor</option>
                                </select>
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

                            Data Admissão cadastrada: $valor->Data_Admissao;
                            <div class='input-group mb-3'>
                                <span class='input-group-text' id='inputGroup-sizing-default'>Data Admissão</span>
                                <input type='date' class='form-control' name='Data_Admissao' aria-label='Sizing example input'
                                    aria-describedby='inputGroup-sizing-default'>
                            </div>

                            <input class='form-control' type='submit' value='Confirmar' class='btn btn-primary'>
                        </form> ";
                }
            ?>
            
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>
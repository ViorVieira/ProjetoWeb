<html>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Cadastrar Animal</title>
</head>
<link rel="stylesheet" href="<?php echo base_url("/CSS/Style.css") ?>">
                             
    <header class="topo">
        <a class="link" href="/ProjetoWeb/public">Home</a> &nbsp;
    </header>
    <main id="background">
        <div id="sec2" class="container"><br>
        <?php  
            use App\Models\SelectOptions;
            foreach($ConAnimal->getResult() as $valor){
                echo "
                <form action='' method='post'>
                    <div class='input-group mb-3'>
                        <span class='input-group-text' id='inputGroup-sizing-default'>Código Animal</span>
                        <input type='text' class='form-control' name='CodAnimal' value='$valor->CodAnimal' aria-describedby='inputGroup-sizing-default'>
                    </div>
                    Situação cadastrada: 
                            ";
                            $so = new SelectOptions();
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
                        <span class='input-group-text' id='inputGroup-sizing-default'>Nome Animal</span>
                        <input type='text' class='form-control' name='Nome' value='$valor->Nome' aria-describedby='inputGroup-sizing-default'>
                    </div>
                    <div class='input-group mb-3'>
                        <span class='input-group-text' id='inputGroup-sizing-default'>Tipo</span>
                        <input type='text' class='form-control' name='Tipo' value='$valor->Tipo' aria-describedby='inputGroup-sizing-default'>
                    </div>
                    <div class='input-group mb-3'>
                        <span class='input-group-text' id='inputGroup-sizing-default'>Raça</span>
                        <input type='text' class='form-control' name='Raca' value='$valor->Raca' aria-describedby='inputGroup-sizing-default'>
                    </div>
                    <div class='input-group mb-3'>
                        <span class='input-group-text' id='inputGroup-sizing-default'>Idade</span>
                        <input type='text' class='form-control' name='Idade' value='$valor->Idade' aria-describedby='inputGroup-sizing-default'>
                    </div>
                    <div class='input-group mb-3'>
                        <span class='input-group-text' id='inputGroup-sizing-default'>Data Adoção</span>
                        <input type='date' class='form-control' name='Data_Adocao' value='$valor->Data_Adocao' aria-label='Sizing example input'
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
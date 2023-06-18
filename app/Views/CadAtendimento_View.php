<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>Cadastrar Atendimento</title>
    </head>
    <link rel="stylesheet" href="../CSS/Style.css">

    <body>
        <header class="topo">
            <a class="link" href="/ProjetoWeb/public">Home</a> &nbsp;
            <a class="link" href="/ProjetoWeb/public/cadTipoServ">Tipo Serviço</a>&nbsp;
            <a class="link" href="/ProjetoWeb/public/cadServico">Serviço</a>&nbsp;
            <a class="link" href="/ProjetoWeb/public/cadOcupacao">Ocupação</a>&nbsp;
            <a class='link' href='/ProjetoWeb/public/logout'>Logout</a>
         </header>

        <main id="bcknd">  
            <div class="container">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Animal</label>
                        <select class="form-select" name="Animal" id="inputGroupSelect01">
                            <?php
                            $so = new \App\Models\SelectOptions();
                            $so->selectAnimal();
                            ?>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Serviço</label>
                        <select class="form-select" name="Servico" id="inputGroupSelect01">
                            <?php
                               $so = new \App\Models\SelectOptions();
                               $so->selectServico();
                            ?>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Ocupação</label>
                        <select class="form-select" name="Ocupacao" id="inputGroupSelect01">
                            <?php
                                $so = new \App\Models\SelectOptions();
                                $so->selectOcupacao();
                            ?>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Status</label>
                        <select class="form-select" name="Status" id="inputGroupSelect01">
                            <option value="1">Realizado</option>
                            <option value="0">Não Realizado</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Preço</span>
                        <input type="text" class="form-control" name="Preco" aria-label="Sizing example input" 
                                   aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text">Observação</span>
                        <textarea class="form-control" name="Observacao" aria-label="With textarea"></textarea>
                    </div>
                    <input class='form-control' type='submit' value='Confirmar' class='btn btn-primary'>
                </form>    
            </div>
            
                      
        </main>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </body>
</html>
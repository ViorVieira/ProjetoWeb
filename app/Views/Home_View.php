<?php $session = session(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<style>
    * {
        margin: 0px;
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
</style>

<body>

    <header class='topo'>
        <!-- <a href='/app/Controllers/Dados.php'></a> -->
        <?php if (!$session->get('E_mail')) {
            echo "<a class='link' href='/ProjetoWeb/public/cadC'>Cadastrar</a> &nbsp;
                  <a class='link' href='/ProjetoWeb/public/LoginFC'>Login </a> &nbsp;";
        } else {
            echo "<a class='link' href='/ProjetoWeb/public/cadA'>Cadastrar Animal</a> &nbsp;
                      <a class='link' href='/ProjetoWeb/public/logout'>Logout</a>";
        }
        ?>
    </header>
</body>

</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Login</title>
</head>
<style>
    * {
        margin: 0px;
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

    #log {
        margin-left: 10vw;
        margin-right: 10vw;
    }
</style>
<body>
    <header class="topo">
        <a class="link" href="/ProjetoWeb/public">Home</a> &nbsp;
        <a class='link' href='/ProjetoWeb/public/cadC'>Cadastrar</a>
    </header><br>

    <div id="log" class="container ">
        <p><h2>Login para Usuario</h2></p>

        <?php if (isset($error)): ?>
            <div class="alert alert-danger">
                <?= $error ?>
            </div>
        <?php endif; ?>

        <?php if (isset($validation)): ?>
            <div class="alert alert-danger">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>
        
        <form action="" method="post">
            <p>
                <label class="form-label">Login/Email</label>
                <input type="text" class="form-control" name="Usuario">
            </p>
            <p>
                <label class="form-label">Senha</label>
                <input type="password" class="form-control" name="Senha">
                <button type="submit" class="btn btn-primary">Entrar</button>
            </p>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!-- Inclua os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <p><h2>Login</h2></p>

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
                <label class="form-label">Login ou Email</label>
                <input type="text" class="form-control" name="Usuario">
            </p>
            <p>
                <label class="form-label">Senha</label>
                <input type="password" class="form-control" name="Senha">
            </p>
            
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
    </div>

    <!-- Inclua os arquivos JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
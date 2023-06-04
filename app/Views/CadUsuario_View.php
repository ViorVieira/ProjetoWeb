<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>
</head>
<style>
      *{
    margin: 0px;
}
.topo{
    text-align: center;
    background-color: black;
    height: 7vh;
}

.link{
    color: rgb(177, 190, 202);
    font-family: 'Segoe UI';
    font-size: 18px;
    text-decoration: none;
    background-color: black ;
}
</style>
<body>
    <header class="topo">
        <a class="link" href="/ProjetoWeb/public">Home</a> &nbsp;
        <a class='link' href='/ProjetoWeb/public/LoginFC'>Login </a> 
    </header>
    <form action="cadU2" method="post">
        <h1>Cadastrar Usuário</h1>
        <input type="text" name="Nome" placeholder="Nome">
        <input type="text" name="Senha" placeholder="Senha">
        <input type="text" name="E_mail" placeholder="E_mail"><br>
        <input type="text" name="CPF" placeholder="CPF">
        <input type="text" name="FoneRes" placeholder="Fone Residencial">
        <input type="text" name="FoneCom" placeholder="Fone Comercial"><br>
        <input type="text" name="Celular" placeholder="Celular">
        Função:
        <select name="Funcao">
            <option value="1">Doutor</option>
            <option value="2">Tosador</option>
            <option value="3">Groomer</option>
            <option value="4">Atendente</option>
            <option value="5">Gestor</option>
        </select>
        Tipo:  
        <select name="Tipo">
            <option value="0">Usuário Comum</option>
            <option value="1">Usuário Administrador</option>
        </select><br>
        Data Admissão:
        <input type="date" name="Data_Admissao" placeholder="Data Admissão">
        
        <input type="submit" value="Confirmar" />
    </form>
</body>
</html>
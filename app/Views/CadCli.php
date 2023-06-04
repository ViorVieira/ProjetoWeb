<html>
    <head>
        <title>Cadastrar Cliente</title>
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
</style>
    <body>
    <header class="topo"> 
            <a class="link" href="/ProjetoWeb/public">Home</a> 
        </header>
        <form action="CadastrarC2" method="post"> 
            <br>
            <h1>Cadastro de Cliente</h1><br>
            Situação:
            <select id="Situacao">
                <option value="0">Inativo</option>
                <option value="1">Ativo</option>
            </select> <br> 
            <input type="text" name="Nome" placeholder="Nome"> 
            <input type="text" name="Senha" placeholder="Senha">
            <input type="text" name="E_mail" placeholder="E-mail">
            <br>
            <input type="text" name="CPF" placeholder="CPF">
            <input type="text" name="FoneRes" placeholder="Fone Residencial">
            <input type="text" name="FoneCom" placeholder="Fone Comercial"> <br>
            <input type="text" name="Celular" placeholder="Celular">
            <input type="text" name="Cidade" placeholder="Cidade">
            <input type="number" name="Numero" placeholder="Número"><br>
            <input type="text" name="Estado" placeholder="Estado">
            <input type="text" name="Complemento" placeholder="Complemento">
            <input type="text" name="CEP" placeholder="CEP"><br>
            <input type="text" name="Logradouro" placeholder="Logradouro"><br>
            <input type="submit" value="Confirmar" /><br><br>
            Não é cliente mas Usuário do PetShop? clique <a href=""> Aqui</a> para se cadastrar
        </form>
    </body>
</html>




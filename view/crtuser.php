
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="../process/UsuarioProcess.php" method="post">
        <fieldset>
            <legend>Informações</legend>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
            <br>
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            <br>
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone">
            <br>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
            <br>
        </fieldset>
        <br>
        </fieldset>
            <legend>Endereco</legend>
            <label for="rua">Rua</label>
            <input type="text" name="rua" id="rua">
            <br>
            <label for="numero">Numero Rua</label>
            <input type="text" name="numero" id="numero">
            <br>
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" id="bairro">
            <br>
            <label for="logradouro">Logradouro</label>
            <input type="text" name="logradouro" id="logradouro">
            <br>
            <label for="complemento">Complemento</label>
            <input type="text" name="complemento" id="complemento">
            <br>
        <fieldset>
            <input type='hidden' name='codigo' value="$id" ><br>
            <input type='hidden' name='op' value='Incluir'><br>
        <input type="submit" value="Cadastrar">
    </form>
    <a href="index.html">Cancelar</a>
</body>
</html>
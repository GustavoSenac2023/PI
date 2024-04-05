<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../process/ProdutoProcess.php" method="post">
        <fieldset >
            <legend>Categoria</legend>
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" id="descricao">
        </fieldset>
        <fieldset>
            <legend>Produto</legend>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>
            <br>
            <label for="preco">Preço</label>
            <input type="text" name="preco" id="preco" required>
            <br>
            <label for="quantidade">Quantidade</label>
            <input type="text" name="quantidade" id="quantidade" required>
            <br>
            <label for="categoria">Categoria</label>
            <input type="text" name="categoria" id="categoria">
        </fieldset>
        <input type='hidden' name='op' value='Incluir'><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
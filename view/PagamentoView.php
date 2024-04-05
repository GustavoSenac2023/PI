<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>
</head>
<body>
    <form action="../process/PagamentoProcess.php" method="post">
        <fieldset>
            <legend>Forma Pagamento</legend>
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" id="descricao" required>
        </fieldset>
        <input type='hidden' name='op' value='Incluir'><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
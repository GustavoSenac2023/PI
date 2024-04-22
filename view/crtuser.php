
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$op=$_REQUEST["op"];
if ($op=="Alterar") {
    include_once "../controller/UsuarioCont.php";
    $res=UsuarioCont::resgataID($_REQUEST["codigo"]);
    $qtd=$res->rowCount();
    $row=$res->fetch(PDO::FETCH_OBJ);
    $nome=$row->nome;
    $email=$row->email;
    $telefone=$row->telefone;
    $pass=$row->pass;
    $id=$row->usuario_id;
    include_once "../controller/EnderecoCont.php";
    $resed=EnderecoCont::resgataID($_REQUEST["codigo"]);
    $qtded=$resed->rowCount();
    $rowed=$resed->fetch(PDO::FETCH_OBJ);
    $rua=$rowed->rua;
    $numero=$rowed->numero_rua;
    $bairro=$rowed->bairro;
    $logradouro=$rowed->logradouro;
    $complemento=$rowed->complemento;
    $ided=$rowed->endereco_user;
    $operacao="Alterar";
}else {
    $nome="";
    $preco="";
    $quantidade="";
    $id="";
    $idLoja="";
    $operacao="Incluir";
}
print <<<END
<form action='../process/UsuarioProcess.php' method='post'>
        <fieldset>
            <legend>Informações</legend>
            <label for='nome'>Nome</label>
            <input type='text' name='nome' id='nome' value="$nome" required>
            <br>
            <label for='email'>Email</label>
            <input type='text' name='email' id='email' value="$email" required>
            <br>
            <label for='telefone'>Telefone</label>
            <input type='text' name='telefone' id='telefone' value="$telefone" required>
            <br>
            <label for='senha'>Senha</label>
            <input type='password' name='senha' id='senha' value="$pass" required>
            <br>
        </fieldset>
        <br>
        </fieldset>
            <legend>Endereco</legend>
            <label for='rua'>Rua</label>
            <input type='text' name='rua' id='rua' value="$rua" required>
            <br>
            <label for='numero'>Numero Rua</label>
            <input type='text' name='numero' id='numero' value="$numero" required>
            <br>
            <label for='bairro'>Bairro</label>
            <input type='text' name='bairro' id='bairro' value="$bairro" required>
            <br>
            <label for='logradouro'>Logradouro</label>
            <input type='text' name='logradouro' id='logradouro' value="$logradouro" required>
            <br>
            <label for='complemento'>Complemento</label>
            <input type='text' name='complemento' value="$complemento" id='complemento'>
            <br>
        <fieldset>
            <input type='hidden' name='codigo' value="$id" ><br>
            <input type='hidden' name='op' value='$operacao'><br>
        <input type='submit' value="$operacao" id='op'>
    </form>
    <a href="index.html">Cancelar</a>
END;
?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style2.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "../controller/UsuarioCont.php";
    $res = UsuarioCont::listarUsuario();
    $qtd=$res->rowCount();
    if ($qtd>0) {
        print "<table class='table table-hover table striped table bordered'>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Email</th>";
        print "<th>Senha</th>";
        print "<th>Telefone</th>";
        while ($row=$res->fetch(PDO::FETCH_OBJ)) {
            print "<tr>";
            print "<td>".$row->usuario_id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->pass."</td>";
            print "<td>".$row->telefone."</td>";
            print "<td>
            <div class='btns'>
            <button id='alt' onclick=\"location.href='../view/FormProd.php?op=Alterar&codigo=".$row->usuario_id."';\">Alterar</button>
            <button id='del' onclick=\"location.href='../controller/UsuarioProcess.php?op=ExcluirU&codigo=".$row->usuario_id."';\">Excluir</button>
            </div>
            </td>";
            echo "</form>";
            print "</tr>";
        }
        print "</table>";     
    }else {
        echo "No data found!";
    }
    ?>
<?php
    include "../controller/EnderecoCont.php";
    $res = EnderecoCont::listarEndereco();
    $qtd=$res->rowCount();
    if ($qtd>0) {
        print "<table class='table table-hover table striped table bordered'>";
        print "<th>#</th>";
        print "<th>Rua</th>";
        print "<th>Numero Rua</th>";
        print "<th>Bairro</th>";
        print "<th>Logradouro</th>";
        print "<th>Complemento</th>";
        while ($row=$res->fetch(PDO::FETCH_OBJ)) {
            print "<tr>";
            print "<td>".$row->endereco_user."</td>";
            print "<td>".$row->rua."</td>";
            print "<td>".$row->numero_rua."</td>";
            print "<td>".$row->bairro."</td>";
            print "<td>".$row->logradouro."</td>";
            print "<td>".$row->complemento."</td>";
            print "<td>
            <div class='btns'>
            <button id='alt' onclick=\"location.href='../view/FormProd.php?op=Alterar&codigo=".$row->endereco_user."';\">Alterar</button>
            <button id='del' onclick=\"location.href='../controller/UsuarioProcess.php?op=ExcluirE&codigo=".$row->endereco_user."';\">Excluir</button>
            </div>
            </td>";
            echo "</form>";
            print "</tr>";
        }
        print "</table>";     
    }else {
        echo "No data found!";
    }
    ?>
</body>
</html>
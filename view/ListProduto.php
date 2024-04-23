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
    include "../controller/ProdutoCont.php";
    $res = ProdutoCont::listarProduto();
    $qtd=$res->rowCount();
    if ($qtd>0) {
        print "<table class='table table-hover table striped table bordered'>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Preço</th>";
        print "<th>Quantidade</th>";
        print "<th>Cod_Categoria</th>";
        while ($row=$res->fetch(PDO::FETCH_OBJ)) {
            print "<tr>";
            print "<td>".$row->produto_id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->preco."</td>";
            print "<td>".$row->quantidade."</td>";
            print "<td>".$row->fk_Categoria."</td>";
            print "<td>
            <div class='btns'>
            <button id='alt' onclick=\"location.href='../view/ProdutoView.php?op=Alterar&codigo=".$row->produto_id."';\">Alterar</button>
            <button id='del' onclick=\"location.href='../process/ProdutoProcess.php?op=Excluir&codigo=".$row->produto_id."';\">Excluir</button>
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
    include "../controller/CategoriaCont.php";
    $res = CategoriaCont::listarCategoria();
    $qtd=$res->rowCount();
    if ($qtd>0) {
        print "<table class='table table-hover table striped table bordered'>";
        print "<th>#</th>";
        print "<th>Descrição</th>";
        while ($row=$res->fetch(PDO::FETCH_OBJ)) {
            print "<tr>";
            print "<td>".$row->categoria_id."</td>";
            print "<td>".$row->descricao."</td>";
            print "<td>
            <div class='btns'>
            <button id='alt' onclick=\"location.href='../view/ProdutoView.php?op=Alterar&codigo=".$row->categoria_id."';\">Alterar</button>
            <button id='del' onclick=\"location.href='../process/ProdutoProcess.php?op=ExcluirC&codigo=".$row->categoria_id."';\">Excluir</button>
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
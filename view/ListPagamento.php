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
    require "../controller/PagamentoCont.php";
    $res = PagamentoCont::listarPag();
    $qtd=$res->rowCount();
    if ($qtd>0) {
        print "<table class='table table-hover table striped table bordered'>";
        print "<th>#</th>";
        print "<th>Codigo Forma Pagamento</th>";
        while ($row=$res->fetch(PDO::FETCH_OBJ)) {
            print "<tr>";
            print "<td>".$row->pagamento_id."</td>";
            print "<td>".$row->fk_Forma_Pagamento."</td>";
            print "<td>
            <div class='btns'>
            <button id='alt' onclick=\"location.href='../view/FormProd.php?op=Alterar&codigo=".$row->pagamento_id."';\">Alterar</button>
            <button id='del' onclick=\"location.href='../controller/PagamentoProcess.php?op=ExcluirP&codigo=".$row->pagamento_id."';\">Excluir</button>
            </div>
            </td>";
            echo "</form>";
            print "</tr>";
        }
        print "</table>";  
           
    }else {
        echo "No data found!";
    }
    require '../controller/Forma_PagCont.php';
    $res = Forma_PagCont::listarFPag();
    $qtd=$res->rowCount();
    if ($qtd>0) {
        print "<table class='table table-hover table striped table bordered'>";
        print "<th>#</th>";
        print "<th>Descrição</th>";
        while ($row=$res->fetch(PDO::FETCH_OBJ)) {
            print "<tr>";
            print "<td>".$row->formapag_id."</td>";
            print "<td>".$row->descricao."</td>";
            print "<td>
            <div class='btns'>
            <button id='alt' onclick=\"location.href='../view/FormProd.php?op=Alterar&codigo=".$row->formapag_id."';\">Alterar</button>
            <button id='del' onclick=\"location.href='../controller/PagamentoProcess.php?op=ExcluirFP&codigo=".$row->formapag_id."';\">Excluir</button>
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
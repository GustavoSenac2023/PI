<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>
</head>
<body>
<?php
$op=$_REQUEST["op"];
if ($op=="Alterar") {
    include_once "../controller/PagamentoCont.php";
    $res=PagamentoCont::resgataID($_REQUEST["codigo"]);
    $qtd=$res->rowCount();
    $row=$res->fetch(PDO::FETCH_OBJ);
    $id=$row->pagamento_id;
    $fk=$row->fk_Forma_Pagamento;
    include_once "../controller/Forma_PagCont.php";
    $resc=Forma_PagCont::resgataID($_REQUEST["codigo"]);
    $qtded=$resc->rowCount();
    $rowc=$resc->fetch(PDO::FETCH_OBJ);
    $idf=$row->formapag_id;
    $desc=$row->descricao;
    $operacao="Alterar";
}else {
    $id="";
    $fk="";
    $idf="";
    $desc="";
    $operacao="Incluir";
}
print <<<END
<form action="../process/PagamentoProcess.php" method="post">
        <fieldset>
            <legend>Forma Pagamento</legend>
            <label for='descricao'>Descrição</label>
            <input type='text' name='descricao' id='descricao' value='$desc' required>
        </fieldset>
        <fieldset>
            <legend>Pagamento</legend>
            <label for='fk'>Codigo</label>
            <input type='text' name='fk' value='$fk' id='fk'>
        </fieldset>
        <input type='hidden' name='codigoFP' value='$idf'><br>
        <input type='hidden' name='codigoF' value='$id'><br>
        <input type='hidden' name='op' value='$operacao'><br>
        <input type='submit' value='$operacao'>
    </form>
END;
?>
    
</body>
</html>
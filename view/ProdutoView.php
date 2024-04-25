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
    include_once "../controller/ProdutoCont.php";
    $res=ProdutoCont::resgataID($_REQUEST["codigo"]);
    $qtd=$res->rowCount();
    $row=$res->fetch(PDO::FETCH_OBJ);
    $nome=$row->nome;
    $preco=$row->preco;
    $quantidade=$row->quantidade;
    $id=$row->produto_id;
    $fk=$row->fk_Categoria;
    include_once "../controller/CategoriaCont.php";
    $resc=CategoriaCont::resgataID($_REQUEST["codigo"]);
    $qtded=$resc->rowCount();
    $rowc=$resc->fetch(PDO::FETCH_OBJ);
    $desc=$rowc->descricao;
    $idc=$rowc->categoria_id;
    $operacao="Alterar";
}else {
    $nome="";
    $preco="";
    $quantidade="";
    $id="";
    $fk="";
    $desc="";
    $idc="";
    $operacao="Incluir";
}
print <<<END
<form action="../process/ProdutoProcess.php" method="post">
        <fieldset >
            <legend>Categoria</legend>
            <label for='descricao'>Descrição</label>
            <input type='text' name='descricao' id='descricao' value='$desc'>
        </fieldset>
        <fieldset>
            <legend>Produto</legend>
            <label for='nome'>Nome</label>
            <input type='text' name='nome' id='nome' required value='$nome'>
            <br>
            <label for='preco'>Preço</label>
            <input type='text' name='preco' id='preco' required value='$preco'>
            <br>
            <label for='quantidade'>Quantidade</label>
            <input type='text' name='quantidade' id='quantidade' required value='$quantidade'>
            <br>
            <label for='categoria'>Categoria</label>
            <input type='text' name='categoria' id='categoria' value='$fk'>
        </fieldset>
        <input type='hidden' name='codigoP' value='$id' ><br>
        <input type='hidden' name='codigoC' value='$idc' ><br>
        <input type='hidden' name='op' value='$operacao'><br>
        <input type='submit' value='$operacao'>
    </form>        
END;
?>
</body>
</html>
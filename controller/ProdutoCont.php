<?php

    class ProdutoCont{
        function cadastrarProduto($nome,$preco,$quantidade,$cod_cat){
            include '../model/Produto.php';
            $pro=new Produto(null,$nome,$preco,$quantidade,$cod_cat);
            $pro->cadastrarProduto($pro);
        }
    }

?>
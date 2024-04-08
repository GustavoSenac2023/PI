<?php

    class ProdutoCont{
        public static function cadastrarProduto($nome,$preco,$quantidade,$cod_cat){
            include '../model/Produto.php';
            $pro=new Produto(null,$nome,$preco,$quantidade,$cod_cat);
            $pro->cadastrarProduto($pro);
        }
        public static function listarProduto(){
            include '../model/Produto.php';
            $pro=new Produto(null,null,null,null,null);
            return $pro->listarProduto();
        }
    }

?>
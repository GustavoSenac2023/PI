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
        public static function excluirProd($codigo){
            include '../model/Produto.php';
            $pro=new Produto(null,null,null,null,null);
            return $pro->excluirProd($codigo);
        }
        public static function resgataID($codigo) {
            include '../model/Produto.php';
            $model=new Produto(null,null,null,null,null);
            return $model->resgataID($codigo);
        }
        public static function alteraProd($codigo,$nome,$preco,$quantidade,$cod_cat) {
            include '../model/Produto.php';
            $model=new Produto($codigo,$nome,$preco,$quantidade,$cod_cat);
            return $model->alteraProd($model);
        }
    }

?>
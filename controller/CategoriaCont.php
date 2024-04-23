<?php

class CategoriaCont{
    public static function cadastrarCategoria($descricao) {
        include '../model/Categoria.php';
        $cat=new Categoria(null,$descricao);
        $cat->cadastrarCategoria($cat);
    }
    public static function listarCategoria(){
        include '../model/Categoria.php';
        $cat= new Categoria(null,null);
        return $cat->listarCategoria();
    }
    public static function excluirCat($codigo){
        include '../model/Categoria.php';
        $cat=new Categoria(null,null);
        return $cat->excluirCat($codigo);
    }
    public static function resgataID($codigo) {
        include '../model/Categoria.php';
        $model=new Categoria(null,null);
        return $model->resgataID($codigo);
    }
    public static function alteraCat($codigo,$descricao) {
        include '../model/Categoria.php';
        $model=new Categoria($codigo,$descricao);
        return $model->alteraCat($model);
    }
}

?>
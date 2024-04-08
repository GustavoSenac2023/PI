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
}

?>
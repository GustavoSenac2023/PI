<?php

class CategoriaCont{
    public static function cadastrarCategoria($descricao) {
        include '../model/Categoria.php';
        $cat=new Categoria(null,$descricao);
        $cat->cadastrarCategoria($cat);
    }
}

?>
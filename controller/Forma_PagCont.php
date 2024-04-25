<?php

    class Forma_PagCont{
        public static function cadastrarPagamento($descricao){
            include '../model/Forma_Pag.php';
            $pag=new Forma_Pag(null,$descricao);
            $pag->cadastrarPagamento($pag);
        }
        public static function listarFPag(){
            include '../model/Forma_Pag.php';
            $pag=new Forma_Pag(null,null);
            return $pag->listarFPag();
        }
        public static function resgataID($codigo) {
            include '../model/Forma_Pag.php';
            $pag = new Forma_Pag(null,null);
            return $pag->resgataID($codigo);
        }
        public static function excluirFP($codigo) {
            include '../model/Forma_Pag.php';
            $pag = new Forma_Pag(null,null);
            return $pag->excluirFP($codigo);
        }
    }

?>
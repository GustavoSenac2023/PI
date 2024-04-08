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
    }

?>
<?php

    class PagamentoCont{
        public static function cadastrarPagamento(){
            include '../model/Pagamento.php';
            $pag=new Pagamento(null,null);
            $pag->cadastrarPagamento($pag);
        }
        public static function listarPag(){
            include '../model/Pagamento.php';
            $pag=new Pagamento(null,null);
            return $pag->listarPag();
        }
        public static function resgataID($codigo) {
            include '../model/Pagamento.php';
            $pag = new Pagamento(null,null);
            return $pag->resgataID($codigo);
        }
        public static function excluirP($codigo) {
            include '../model/Pagamento.php';
            $pag = new Pagamento(null,null);
            return $pag->excluirP($codigo);
        }

    }

?>
<?php

    class PagamentoCont{
        function cadastrarPagamento(){
            include '../model/Pagamento.php';
            $pag=new Pagamento(null,null);
            $pag->cadastrarPagamento($pag);
        }
    }

?>
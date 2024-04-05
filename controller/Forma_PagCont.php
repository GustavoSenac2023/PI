<?php

    class Forma_PagCont{
        function cadastrarPagamento($descricao){
            include '../model/Forma_Pag.php';
            $pag=new Forma_Pag(null,$descricao);
            $pag->cadastrarPagamento($pag);
        }
    }

?>
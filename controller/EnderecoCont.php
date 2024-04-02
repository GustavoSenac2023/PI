<?php
    include '../model/Endereco.php';
    class EnderecoCont{
        public static function cadastrarEndereco($rua,$numero,$bairro,$logradouro,$complemento) {
            $ender=new Endereco(null,$rua,$numero,$bairro,$logradouro,$complemento);
            $ender->cadastrarEndereco($ender);
        }
    }

?>
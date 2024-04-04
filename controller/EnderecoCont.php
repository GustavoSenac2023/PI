<?php
    
    class EnderecoCont{
        public static function cadastrarEndereco($rua,$numero,$bairro,$logradouro,$complemento) {
            include '../model/Endereco.php';
            $ender=new Endereco(null,$rua,$numero,$bairro,$logradouro,$complemento);
            //echo "CONT ".$rua;
            $ender->cadastrarEndereco($ender);
        }
    }

?>
<?php
    
    class EnderecoCont{
        public static function cadastrarEndereco($rua,$numero,$bairro,$logradouro,$complemento) {
            include '../model/Endereco.php';
            $ender=new Endereco(null,$rua,$numero,$bairro,$logradouro,$complemento);
            //echo "CONT ".$rua;
            $ender->cadastrarEndereco($ender);
        }
        public static function listarEndereco(){
            include '../model/Endereco.php';
            $ender=new Endereco(null,null,null,null,null,null);
            return $ender->listarEndereco();
        }
    }

?>
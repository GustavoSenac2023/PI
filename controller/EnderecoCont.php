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
        public static function resgataID($codigo) {
            include '../model/Endereco.php';
            $model=new Endereco(null,null,null,null,null,null);
            return $model->resgataID($codigo);
        }
        public static function alterarEndereco($id,$rua,$numero,$bairro,$logradouro,$complemento) {
            include '../model/Endereco.php';
            $end=new Endereco($id,$rua,$numero,$bairro,$logradouro,$complemento);
            return $end->alterarEndereco($end);
        }
        public static function excluirEndereco($codigo) {
            include '../model/Endereco.php';
            $end=new Endereco(null,null,null,null,null,null);
            return $end->excluirEndereco($codigo);
        }
    }

?>
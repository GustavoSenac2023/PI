<?php
include '../model/Usuario.php';
class UsuarioCont{
    
    public static function cadastrarUsuario($nome,$email,$senha,$telefone,$endereco) {
        $user=new Usuario(null,$nome,$email,$senha,$telefone,$endereco);
        $user->cadastrarUsuario($user);
    }
    public static function excluirUsuario($codigo) {
        $user=new Usuario(null,null,null,null,null,null);
        $user;
    }
    public static function alterarUsuario($id,$nome,$email,$senha,$telefone,$endereco) {
        $user=new Usuario($id,$nome,$email,$senha,$telefone,$endereco);
        return $user;
    }
    public static function listarUsuario() {
        $model=new Usuario(null,null,null,null,null,null);
        return $model;
    }
    public static function resgataID($codigo) {
        $model=new Usuario(null,null,null,null,null,null);
        return $model;
    }
}


?>
<?php
include '../model/Usuario.php';
class UsuarioCont{
    
    public static function cadastrarUsuario($nome,$email,$senha,$telefone) {
        $user=new Usuario(null,$nome,$email,$senha,$telefone);
        $user->cadastrarUsuario($user);
    }
    public static function excluirUsuario($codigo) {
        $user=new Usuario(null,null,null,null,null,null);
        $user;
    }
    public static function alterarUsuario($id,$nome,$email,$senha,$telefone) {
        $user=new Usuario($id,$nome,$email,$senha,$telefone);
        return $user;
    }
    public static function listarUsuario() {
        $model=new Usuario(null,null,null,null,null);
        return $model->listarUsuario();
    }
    public static function resgataID($codigo) {
        $model=new Usuario(null,null,null,null,null);
        return $model;
    }
    public static function login($email,$pass){
        $user=new Usuario(null,null,null,null,null);
        $user->login($email,$pass);
    }
}


?>
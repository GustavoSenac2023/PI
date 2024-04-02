<?php
    include '../conexao/Conexao.php';
    class UsuarioDAO{
        
        function cadastrarUsuario(Usuario $model){
            $con=new Conexao();
            $con->fazConexao();
            $sql="INSERT INTO usuario (nome,pass,email,telefone) VALUES (:nome,:pass,:email,:telefone)";
            $stmt=$con->conn->prepare($sql);
            $stmt->bindValue(':nome',$model->getNome());
            $stmt->bindValue(':pass',$model->getSenha());
            $stmt->bindValue(':email',$model->getEmail());
            $stmt->bindValue(':telefone',$model->getTelefone());
            $res=$stmt->execute();
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            echo "<script>location.href='../view/index.html';</script>";
        }
        function listarUsuario(){
            $con= new Conexao();
            $con->fazConexao();
            $sql="SELECT * FROM usuario ORDER BY usuario_id";
            return $con->conn->query($sql);
        }
        function getKey(){
            $con= new Conexao();
            $con->fazConexao();
            $sql="SELECT usuario_id FROM usuario ORDER BY usuario_id DESC LIMIT 1";
            return $con->conn->query($sql);
        }
    }

?>
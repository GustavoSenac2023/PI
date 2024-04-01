<?php
    include 'conexao/Conexao.php';
    class UsuarioDAO{
        
        function cadastrarUsuario(Usuario $model){
            $con=new Conexao();
            $con->fazConexao();
            $sql="INSERT INTO usuario (nome,pass,email,telefone,fk_Endereco) VALUES (:nome,:pass,:email,:telefone,:fk_Endereco)";
            $stmt=$con->conn->prepare($sql);
            $stmt->bindValue(':nome',$model->getNome());
            $stmt->bindValue(':pass',$model->getSenha());
            $stmt->bindValue(':email',$model->getEmail());
            $stmt->bindValue(':telefone',$model->getTelefone());
            $stmt->bindValue(':fk_Endereco',$model->getEndereco());
            $res=$stmt->execute();
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
        }
    }

?>
<?php
    include '../conexao/Conexao.php';
    include '../dao/UsuarioDAO.php';
    class EnderecoDAO{
        
        function cadastrarEndereco(Endereco $model){
            $tmp=new UsuarioDAO();
            $id=$tmp->getKey();
            $con=new Conexao();
            $con->fazConexao();
            $sql="INSERT INTO endereco (endereco_user,rua,numero,bairro,logradouro,complemento) VALUES (:endereco_user,:rua,:numero,:bairro,:logradouro,:complemento)";
            $stmt=$con->conn->prepare($sql);
            $stmt->bindValue(':endereco_user',$id->id);
            $stmt->bindValue(':rua',$model->getRua());
            $stmt->bindValue(':numero',$model->getNumero());
            $stmt->bindValue(':bairro',$model->getBairro());
            $stmt->bindValue(':logradouro',$model->getLogradouro());
            $stmt->bindValue(':complemento',$model->getComplemento());
            $res=$stmt->execute();
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            echo "<script>location.href='../view/index.html';</script>";
            
        }
        function listarEndereco(){
            $con= new Conexao();
            $con->fazConexao();
            $sql="SELECT * FROM endereco ORDER BY endereco_user";
            return $con->conn->query($sql);
        }
        
    }

?>
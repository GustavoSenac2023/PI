<?php
    
    
    class EnderecoDAO{

        function cadastrarEndereco(Endereco $model){
            include_once 'Conexao2.php';
            $con=new Conexao2();
            $con->fazConexao();
            $sql="INSERT INTO endereco (endereco_user,rua,numero_rua,bairro,logradouro,complemento) VALUES (:endereco_user,:rua,:numero_rua,:bairro,:logradouro,:complemento)";
            $id=new EnderecoDAO();
            $res=$id->getKey();
            $tmp=$res->fetch(PDO::FETCH_OBJ);
            $user=$tmp->usuario_id;
            //echo $tmp->usuario_id;
            $stmt=$con->conn->prepare($sql);
            $stmt->bindValue(':endereco_user',$user);
            $stmt->bindValue(':rua',$model->getRua());
            $stmt->bindValue(':numero_rua',$model->getNumero());
            $stmt->bindValue(':bairro',$model->getBairro());
            $stmt->bindValue(':logradouro',$model->getLogradouro());
            $stmt->bindValue(':complemento',$model->getComplemento());
            $res=$stmt->execute();
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            echo "<script>location.href='../view/index.html';</script>";
            
        }
        function listarEndereco(){
            include_once 'Conexao2.php';
            $con= new Conexao2();
            $con->fazConexao();
            $sql="SELECT * FROM endereco ORDER BY endereco_user";
            return $con->conn->query($sql);
        }
        function getKey(){
            include_once 'Conexao2.php';
            $con= new Conexao2();
            $con->fazConexao();
            $sql="SELECT usuario_id FROM usuario ORDER BY usuario_id DESC LIMIT 1";
            return $con->conn->query($sql);
        }
        function resgataID($codigo){
            include 'Conexao2.php';
            $con= new Conexao2();
            $con->fazConexao();
            $sql="SELECT * FROM endereco WHERE endereco_user='$codigo'";
            return $con->conn->query($sql);
        }
        function excluirEndereco($codigo){
            include 'Conexao2.php';
            $con= new Conexao2();
            $con->fazConexao(); 
            $sql="DELETE FROM endereco WHERE endereco_user= '$codigo'";
            $res=$con->conn->query($sql);
            //$res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            //echo "<script>location.href='../index.html';</script>";
        }

        function alterarEndereco(Endereco $end){
            include 'Conexao2.php';
            $con= new Conexao2();
            $con->fazConexao(); 
            $sql="UPDATE endereco SET rua=:rua,logradouro=:logradouro,numero_rua=:numero_rua,bairro=:bairro,complemento=:complemento WHERE endereco_user=:endereco_user";
            $stmt=$con->conn->prepare($sql);
            $stmt->bindValue(':endereco_user',$end->getId());
            $stmt->bindValue(':rua',$end->getRua());
            $stmt->bindValue(':logradouro',$end->getLogradouro());
            $stmt->bindValue(':numero_rua',$end->getNumero());
            $stmt->bindValue(':bairro',$end->getBairro());
            $stmt->bindValue(':complemento',$end->getComplemento());
            $res=$stmt->execute();
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            //echo "<script>location.href='../view/FormProdList.php?op=Listar';</script>";
        }
        
    }

?>
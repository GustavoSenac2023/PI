<?php
    
    
    class EnderecoDAO{

        function cadastrarEndereco(Endereco $model){
            include_once 'Conexao.php';
            $con=new Conexao();
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
            include_once 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao();
            $sql="SELECT * FROM endereco ORDER BY endereco_user";
            return $con->conn->query($sql);
        }
        function getKey(){
            include_once 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao();
            $sql="SELECT usuario_id FROM usuario ORDER BY usuario_id DESC LIMIT 1";
            return $con->conn->query($sql);
        }
        
    }

?>
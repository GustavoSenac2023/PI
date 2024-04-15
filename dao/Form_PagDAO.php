<?php

    class Form_PagDAO{
        function cadastrarPagamento(Forma_Pag $fpag) {
            include_once 'Conexao2.php';
            $con=new Conexao();
            $con->fazConexao();
            $sql="INSERT INTO forma_pagamento (descricao) VALUES (:descricao)";
            //echo $tmp->usuario_id;
            $stmt=$con->conn->prepare($sql);
            $stmt->bindValue(':descricao',$fpag->getDescricao());
            $res=$stmt->execute();
            //$res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            //echo "<script>location.href='../view/index.html';</script>";
        }
        function resgataID($codigo){
            include 'Conexao2.php';
            $con= new Conexao();
            $con->fazConexao();
            $sql="SELECT * FROM forma_pagamento WHERE formapag_id='$codigo'";
            return $con->conn->query($sql);
        }
        function excluirPagamento($codigo){
            include 'Conexao2.php';
            $con= new Conexao();
            $con->fazConexao(); 
            $sql="DELETE FROM forma_pagamento WHERE formapag_id= '$codigo'";
            $res=$con->conn->query($sql);
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            //echo "<script>location.href='../index.html';</script>";
        }

        function alterarPagamento(Forma_Pag $fpag){
            include 'Conexao2.php';
            $con= new Conexao();
            $con->fazConexao(); 
            $sql="UPDATE forma_pagamento SET descricao=:descricao WHERE formapag_id=:formapag_id";
            $stmt=$con->conn->prepare($sql);
            $stmt->bindValue(':formapag_id',$fpag->getId());
            $stmt->bindValue(':descricao',$fpag->getDescricao());
            $res=$stmt->execute();
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            //echo "<script>location.href='../view/FormProdList.php?op=Listar';</script>";
        }
        function listarPagamento(){
            include 'Conexao2.php';
            $con= new Conexao();
            $con->fazConexao();
            $sql="SELECT * FROM forma_pagamento ORDER BY formapag_id";
            return $con->conn->query($sql);
        }
    }

?>
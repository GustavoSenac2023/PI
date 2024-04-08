<?php

    class PagamentoDAO{
        function cadastrarPagamento(Pagamento $pag) {
            include_once 'Conexao.php';
            $con=new Conexao();
            $con->fazConexao();
            $sql="INSERT INTO pagamento (fk_Forma_Pagamento) VALUES (:fk_Forma_Pagamento)";
            //echo $tmp->usuario_id;
            $id=new PagamentoDAO();
                $res=$id->getKey();
                $tmp=$res->fetch(PDO::FETCH_OBJ);
                $idpag=$tmp->formapag_id;
            $stmt=$con->conn->prepare($sql);
            $stmt->bindValue(':fk_Forma_Pagamento',$idpag);
            $res=$stmt->execute();
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            echo "<script>location.href='../view/PagamentoView.php';</script>";
        }
        function getKey(){
            include_once 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao();
            $sql="SELECT formapag_id FROM forma_pagamento ORDER BY formapag_id DESC LIMIT 1";
            return $con->conn->query($sql);
        }
        function resgataID($codigo){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao();
            $sql="SELECT * FROM pagamento WHERE pagamento_id='$codigo'";
            return $con->conn->query($sql);
        }
        function excluirPagamento($codigo){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao(); 
            $sql="DELETE FROM pagamento WHERE pagamento_id= '$codigo'";
            $res=$con->conn->query($sql);
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            //echo "<script>location.href='../index.html';</script>";
        }

        function alterarPagamento(Pagamento $pag){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao(); 
            $sql="UPDATE pagamento SET fk_Forma_Pagamento=:fk_Forma_Pagamento WHERE pagamento_id=:pagamento_id";
            $stmt=$con->conn->prepare($sql);
            $stmt->bindValue(':pagamento_id',$pag->getId());
            $stmt->bindValue(':fk_Forma_Pagamento',$pag->getFk());
            $res=$stmt->execute();
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            //echo "<script>location.href='../view/FormProdList.php?op=Listar';</script>";
        }
        function listarPagamento(){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao();
            $sql="SELECT * FROM pagamento ORDER BY pagamento_id";
            return $con->conn->query($sql);
        }
    }

?>
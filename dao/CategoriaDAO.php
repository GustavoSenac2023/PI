<?php

    class CategoriaDAO{
        function cadastrarCategoria(Categoria $cat){
            include_once 'Conexao.php';
            $con=new Conexao();
            $con->fazConexao();
            $sql="INSERT INTO categoria (descricao) VALUES (:descricao)";
            $stmt=$con->conn->prepare($sql);
            $stmt->bindValue(':descricao',$cat->getDescricao());
            $res=$stmt->execute();
            //$res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            //echo "<script>location.href='../view/index.html';</script>";
        } 
        function resgataID($codigo){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao();
            $sql="SELECT * FROM categoria WHERE categoria_id='$codigo'";
            return $con->conn->query($sql);
        }
        function excluirProduto($codigo){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao(); 
            $sql="DELETE FROM categoria WHERE categoria_id= '$codigo'";
            $res=$con->conn->query($sql);
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            //echo "<script>location.href='../index.html';</script>";
        }

        function alterarCategoria(Categoria $cat){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao(); 
            $sql="UPDATE categoria SET descricao=:descricao WHERE categoria_id=:categoria_id";
            $stmt=$con->conn->prepare($sql);
            $stmt->bindValue(':categoria_id',$cat->getId());
            $stmt->bindValue(':descricao',$cat->getDescricao());
            $res=$stmt->execute();
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            //echo "<script>location.href='../view/FormProdList.php?op=Listar';</script>";
        }
        function listarCategoria(){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao();
            $sql="SELECT * FROM categoria ORDER BY categoria_id";
            return $con->conn->query($sql);
        }
    }

?>
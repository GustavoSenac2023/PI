<?php

    class CategoriaDAO{
        function cadastrarCategoria(Categoria $cat){
            include_once 'Conexao2.php';
            $con=new Conexao2();
            $con->fazConexao();
            $sql="INSERT INTO categoria (descricao) VALUES (:descricao)";
            $stmt=$con->conn->prepare($sql);
            $stmt->bindValue(':descricao',$cat->getDescricao());
            $res=$stmt->execute();
            //$res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            //echo "<script>location.href='../view/index.html';</script>";
        } 
        function resgataID($codigo){
            include 'Conexao2.php';
            $con= new Conexao2();
            $con->fazConexao();
            $sql="SELECT * FROM categoria WHERE categoria_id='$codigo'";
            return $con->conn->query($sql);
        }
        function excluirCat($codigo){
            include 'Conexao2.php';
            $con= new Conexao2();
            $con->fazConexao(); 
            $sql="DELETE FROM categoria WHERE categoria_id= '$codigo'";
            $res=$con->conn->query($sql);
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            echo "<script>location.href='../view/ListProduto.php';</script>";
        }

        function alteraCat(Categoria $cat){
            include 'Conexao2.php';
            $con= new Conexao2();
            $con->fazConexao(); 
            $sql="UPDATE categoria SET descricao=:descricao WHERE categoria_id=:categoria_id";
            $stmt=$con->conn->prepare($sql);
            $stmt->bindValue(':categoria_id',$cat->getId());
            $stmt->bindValue(':descricao',$cat->getDescricao());
            $res=$stmt->execute();
            //$res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            //echo "<script>location.href='../view/FormProdList.php?op=Listar';</script>";
        }
        function listarCategoria(){
            include 'Conexao2.php';
            $con= new Conexao2();
            $con->fazConexao();
            $sql="SELECT * FROM categoria ORDER BY categoria_id";
            return $con->conn->query($sql);
        }
    }

?>
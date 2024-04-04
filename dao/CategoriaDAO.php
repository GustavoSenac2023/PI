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
    }

?>
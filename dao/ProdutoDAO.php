<?php

    class ProdutoDAO{
        
        function cadastrarProduto(Produto $pro){
            include_once 'Conexao.php';
            $con=new Conexao();
            $con->fazConexao();
            $sql="INSERT INTO produto (nome,preco,quantidade,fk_Categoria) VALUES (:nome,:preco,:quantidade,:fk_Categoria)";
            $prod;
            if ($pro->getCodCat()==null) {
                $id=new ProdutoDAO();
                $res=$id->getFK();
                $tmp=$res->fetch(PDO::FETCH_OBJ);
                $prod=$tmp->categoria_id;
            }else{
                $prod=$pro->getCodCat();
            }
            //echo $tmp->usuario_id;
            $stmt=$con->conn->prepare($sql);
            $stmt->bindValue(':nome',$pro->getNome());
            $stmt->bindValue(':preco',$pro->getPreco());
            $stmt->bindValue(':quantidade',$pro->getQuantidade());
            $stmt->bindValue(':fk_Categoria',$prod);
            $res=$stmt->execute();
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            //echo "<script>location.href='../view/index.html';</script>";
            
        }
        function getFK(){
            include_once 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao();
            $sql="SELECT categoria_id FROM categoria ORDER BY categoria_id DESC LIMIT 1";
            return $con->conn->query($sql);
        }

        function resgataID($codigo){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao();
            $sql="SELECT * FROM produto WHERE produto_id='$codigo'";
            return $con->conn->query($sql);
        }
        function excluirProduto($codigo){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao(); 
            $sql="DELETE FROM prouduto WHERE produto_id= '$codigo'";
            $res=$con->conn->query($sql);
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            //echo "<script>location.href='../index.html';</script>";
        }

        function alterarUsuario(Produto $prod){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao(); 
            $sql="UPDATE produto SET nome=:nome,preco=:preco,quantidade=:quantidade,fk_Categoria=:fk_Categoria WHERE produto_id=:produto_id";
            $stmt=$con->conn->prepare($sql);
            $stmt->bindValue(':produto_id',$prod->getId());
            $stmt->bindValue(':nome',$prod->getNome());
            $stmt->bindValue(':preco',$prod->getPreco());
            $stmt->bindValue(':quantidade',$prod->getQuantidade());
            $stmt->bindValue(':fk_Categoria',$prod->getCodCat());
            $res=$stmt->execute();
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            //echo "<script>location.href='../view/FormProdList.php?op=Listar';</script>";
        }
        function listarProduto(){
            $con= new Conexao();
            $con->fazConexao();
            $sql="SELECT * FROM produto ORDER BY produto_id";
            return $con->conn->query($sql);
        }
    }

?>
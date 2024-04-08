<?php
    
    class UsuarioDAO{
        
        function cadastrarUsuario(Usuario $model){
            include 'Conexao.php';
            $con=new Conexao();
            $con->fazConexao();
            $sql="INSERT INTO usuario (nome,pass,email,telefone) VALUES (:nome,:pass,:email,:telefone)";
            $stmt=$con->conn->prepare($sql);
            $stmt->bindValue(':nome',$model->getNome());
            $stmt->bindValue(':pass',$model->getSenha());
            $stmt->bindValue(':email',$model->getEmail());
            $stmt->bindValue(':telefone',$model->getTelefone());
            $res=$stmt->execute();
            //$res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            //echo "<script>location.href='../view/index.html';</script>";
        }
        function listarUsuario(){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao();
            $sql="SELECT * FROM usuario ORDER BY usuario_id";
            return $con->conn->query($sql);
        }
        function verifUsuarios(){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao();
            $sql="SELECT email,pass FROM usuario";
            return $con->conn->query($sql);
        }
        function login($email,$pass){
            include 'Conexao.php';
            $users= new UsuarioDAO();
            $list=$users->verifUsuarios();
            while($tmp=$list->fetch(PDO::FETCH_OBJ)){
                if ($tmp->email==$email && $tmp->pass==$pass) {
                    echo "Sucess";
                    echo "<script>location.href='../view/UsuarioView.php';</script>";
                }
            }
            echo "Failure";
            echo "<script>location.href='../view/index.html';</script>";
        }
        function resgataID($codigo){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao();
            $sql="SELECT * FROM usuario WHERE usuario_id='$codigo'";
            return $con->conn->query($sql);
        }
        function excluirUsuario($codigo){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao(); 
            $sql="DELETE FROM usuario WHERE usuario_id= '$codigo'";
            $res=$con->conn->query($sql);
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            //echo "<script>location.href='../index.html';</script>";
        }

        function alterarUsuario(Usuario $user){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao(); 
            $sql="UPDATE usuario SET nome=:nome,pass=:pass,email=:email,telefone=:telefone WHERE usuario_id=:usuario_id";
            $stmt=$con->conn->prepare($sql);
            $stmt->bindValue(':usuario_id',$user->getId());
            $stmt->bindValue(':nome',$user->getNome());
            $stmt->bindValue(':pass',$user->getSenha());
            $stmt->bindValue(':email',$user->getEmail());
            $stmt->bindValue(':telefone',$user->getTelefone());
            $res=$stmt->execute();
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            //echo "<script>location.href='../view/FormProdList.php?op=Listar';</script>";
        }
    }

?>
<?php
    include '../controller/UsuarioCont.php';
    include '../controller/EnderecoCont.php';
    switch ($_REQUEST["op"]) {
        case "Login":
            login();
            break;
        case "Incluir":
            incluir();
            incluirEnd();
            break;
            case "Alterar":
                alterar();
                break;
                case "Excluir":
                    excluir();
                    break;
                    case "Listar":
                        listar();
                        break;
                    
        default:
            echo "Key not found";
            break;
    }
    function login(){
        $email=$_POST["email"];
        $pass=$_POST["senha"];
        $contr=new UsuarioCont();
        $contr->login($email,$pass);
    }
    function incluirEnd(){
        $rua=$_POST["rua"];
        $numero=$_POST["numero"];
        $bairro=$_POST["bairro"];
        $logradouro=$_POST["logradouro"];
        $complemento=$_POST["complemento"];
        $contr= new EnderecoCont();
        $contr->cadastrarEndereco($rua,$numero,$bairro,$logradouro,$complemento);
    }
    function incluir(){
        $nome=$_POST["nome"];
        $email=$_POST["email"];
        $telefone=$_POST["telefone"];
        $senha=$_POST["senha"];
        $contr = new UsuarioCont();
        $contr->cadastrarUsuario($nome,$email,$senha,$telefone);
        
    }
    function alterar() {
        $id=$_POST["codigo"];
        $rua=$_POST["rua"];
        $numero=$_POST["numero"];
        $bairro=$_POST["bairro"];
        $logradouro=$_POST["logradouro"];
        $complemento=$_POST["complemento"];
        $contr= new EnderecoCont();
        $contr->alterarEndereco($id,$rua,$numero,$bairro,$logradouro,$complemento);
        $nome=$_POST["nome"];
        $email=$_POST["email"];
        $telefone=$_POST["telefone"];
        $senha=$_POST["senha"];
        $contr2 = new UsuarioCont();
        $contr2->alterarUsuario($id,$nome,$email,$senha,$telefone);
    }
    function excluir() {
        $id=$_REQUEST["codigo"];
        $contred=new EnderecoCont();
        $contred->excluirEndereco($id);
        $contr = new UsuarioCont();
        $contr->excluirUsuario($id);
    }
    function listar() {
        include '../view/ListUsuario.php';
    }
    

?>
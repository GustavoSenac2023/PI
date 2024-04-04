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
        //echo "AQUI ".$rua;
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
        
    }
    function excluir() {
        
    }
    function listar() {
        
    }

?>
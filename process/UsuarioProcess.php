<?php
    include '../controller/UsuarioCont.php';
    include '../controller/EnderecoCont.php';
    switch ($_REQUEST["op"]) {
        case "Incluir":
            incluir();
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
    function incluirEnd(){
        $id=$_POST["codigo"];
        $rua=$_POST["rua"];
        $numero=$_POST["numero"];
        $bairro=$_POST["bairro"];
        $logradouro=$_POST["logradouro"];
        $complemento=$_POST["complemento"];
        $contr= new EnderecoCont();
        $contr->cadastrarEndereco($id,$rua,$numero,$bairro,$logradouro,$complemento);
    }
    function incluir(){
        $nome=$_POST["nome"];
        $email=$_POST["email"];
        $telefone=$_POST["telefone"];
        $senha=$_POST["senha"];
        $contr = new UsuarioCont();
        $contr->cadastrarUsuario($nome,$email,$senha,$telefone);
        incluirEnd();
    }
    function alterar() {
        
    }
    function excluir() {
        
    }
    function listar() {
        
    }

?>
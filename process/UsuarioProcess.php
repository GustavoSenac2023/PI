<?php
    include '../controller/UsuarioCont.php';
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
    function incluir(){
        $nome=$_POST["nome"];
        $email=$_POST["email"];
        $telefone=$_POST["telefone"];
        $senha=$_POST["senha"];
        $contr = new UsuarioCont();
        $contr->cadastrarUsuario($nome,$email,$senha,$telefone,$endereco);
    }

?>
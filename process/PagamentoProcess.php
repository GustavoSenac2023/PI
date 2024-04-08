<?php
    include '../controller/PagamentoCont.php';
    include '../controller/Forma_PagCont.php';
    switch ($_REQUEST["op"]) {
        case "Incluir":
            incluirPag();
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
    function incluirPag(){
        $descricao=$_POST["descricao"];
        $contr= new Forma_PagCont();
        $contr->cadastrarPagamento($descricao);
        $contr2=new PagamentoCont();
        $contr2->cadastrarPagamento();
    }
    function alterar() {
        
    }
    function excluir() {
        
    }
    function listar() {
        include '../view/ListPagamento.php';
    }

?>
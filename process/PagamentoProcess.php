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
                case "ExcluirP":
                    excluir();
                    break;
                    case "ExcluirFP":
                        excluirFP();
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
    function excluirFP(){ 
        $id=$_REQUEST["codigo"];
        $fpcont=new Forma_PagCont();
        $fpcont->excluirFP($id);
    }
    function excluir() {
        $id=$_REQUEST["codigo"];
        $pcont=new PagamentoCont();
        $pcont->excluirP($id);
    }
    function listar() {
        include '../view/ListPagamento.php';
    }

?>
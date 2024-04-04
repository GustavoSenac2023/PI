<?php
    include '../controller/CategoriaCont.php';
    include '../controller/ProdutoCont.php';
    switch ($_REQUEST["op"]) {
        case "Incluir":
            incluirCat();
            incluirProd();
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
    function incluirCat(){
        $descricao=$_POST["descricao"];
        if ($descricao=="" || $descricao==null) {
            return 0;
        }
        $contr= new CategoriaCont();
        $contr->cadastrarCategoria($descricao);
    }
    function incluirProd(){
        $nome=$_POST["nome"];
        $preco=$_POST["preco"];
        $quantidade=$_POST["quantidade"];
        $cod_cat=$_POST["categoria"];
        if ($cod_cat=="" || $cod_cat==0) {
            $cod_cat=null;
        }
        $contr = new ProdutoCont();
        $contr->cadastrarProduto($nome,$preco,$quantidade,$cod_cat);
        
    }
    function alterar() {
        
    }
    function excluir() {
        
    }
    function listar() {
        
    }

?>
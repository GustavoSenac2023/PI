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
                    case "ExcluirC":
                        excluirC();
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
        $idc=$_POST["codigoC"];
        $descricao=$_POST["descricao"];
        $contrc= new CategoriaCont();
        $contrc->alteraCat($idc,$descricao);
        $idp=$_POST["codigoP"];
        $nome=$_POST["nome"];
        $preco=$_POST["preco"];
        $quantidade=$_POST["quantidade"];
        $cod_cat=$_POST["categoria"];
        $contrp=new ProdutoCont();
        $contrp->alteraProd($idp,$nome,$preco,$quantidade,$cod_cat);


    }
    function excluir() {
        $idp=$_POST["codigoP"];
        $contr0=new ProdutoCont();
        $contr0->excluirProd($idp);
        
    }
    function excluirC(){
        $id=$_POST["codigoC"];
        $contr=new CategoriaCont();
        $contr->excluirCat($id);
    }
    function listar() {
        include '../view/ListProduto.php';
    }
    
?>
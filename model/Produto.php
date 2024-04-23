<?php

    class Produto{
        protected $id;
        protected $nome;
        protected $preco;
        protected $quantidade;
        protected $cod_cat;

        public function __construct($id,$nome,$preco,$quantidade,$cod_cat) {
            $this->id = $id;
            $this->nome = $nome;
            $this->preco = $preco;
            $this->quantidade = $quantidade;
            $this->cod_cat = $cod_cat;
        }

        
        function listarProduto(){
            include '../dao/ProdutoDAO.php';
            $pro= new ProdutoDAO();
            return $pro->listarProduto();
        }


        function cadastrarProduto(Produto $pro){
            include '../dao/ProdutoDAO.php';
            $pro=new ProdutoDAO();
            $pro->cadastrarProduto($this);
        }
        function excluirProd($codigo) {
                include '../dao/ProdutoDAO.php';
            $pro=new ProdutoDAO();
            return $pro->excluirProd($codigo);
        }
        function resgataID($codigo){
                include '../dao/ProdutoDAO.php';
                $prod=new ProdutoDAO();
                return $prod->resgataID($codigo);
        }
        function alteraProd(Produto $prod) {
                include '../dao/ProdutoDAO.php';
                $prodd=new ProdutoDAO();
                return $prodd->alterarProd($prod);
        }

        /**
         * Get the value of id
         */
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         */
        public function setId($id): self
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of nome
         */
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome($nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of preco
         */
        public function getPreco()
        {
                return $this->preco;
        }

        /**
         * Set the value of preco
         */
        public function setPreco($preco): self
        {
                $this->preco = $preco;

                return $this;
        }

        /**
         * Get the value of quantidade
         */
        public function getQuantidade()
        {
                return $this->quantidade;
        }

        /**
         * Set the value of quantidade
         */
        public function setQuantidade($quantidade): self
        {
                $this->quantidade = $quantidade;

                return $this;
        }

        /**
         * Get the value of cod_cat
         */
        public function getCodCat()
        {
                return $this->cod_cat;
        }

        /**
         * Set the value of cod_cat
         */
        public function setCodCat($cod_cat): self
        {
                $this->cod_cat = $cod_cat;

                return $this;
        }
    }

?>
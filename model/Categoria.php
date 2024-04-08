<?php

    class Categoria{
        protected $id;
        protected $descricao;

        public function __construct($id,$descricao) {
            $this->id = $id;
            $this->descricao = $descricao;
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
         * Get the value of descricao
         */
        public function getDescricao()
        {
                return $this->descricao;
        }

        /**
         * Set the value of descricao
         */
        public function setDescricao($descricao): self
        {
                $this->descricao = $descricao;

                return $this;
        }


        function cadastrarCategoria(Categoria $cat) {
            include '../dao/CategoriaDAO.php';
            $cat=new CategoriaDAO();
            $cat->cadastrarCategoria($this);
        }
        function listarCategoria(){
            include '../dao/CategoriaDAO.php';
            $cat=new CategoriaDAO();
            return $cat->listarCategoria();
        }
    }

?>
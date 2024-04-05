<?php

    class Forma_Pag{
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
        function cadastrarPagamento(Forma_Pag $fpag){
            include '../dao/Form_PagDAO.php';
            $fpdao=new Form_PagDAO();
            $fpdao->cadastrarPagamento($this);
        }
    }

?>
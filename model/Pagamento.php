<?php

    class Pagamento{
        protected $id;
        protected $fk;

        public function __construct($id,$fk) {
            $this->id = $id;
            $this->fk = $fk;
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
         * Get the value of fk
         */
        public function getFk()
        {
                return $this->fk;
        }

        /**
         * Set the value of fk
         */
        public function setFk($fk): self
        {
                $this->fk = $fk;

                return $this;
        }
        function cadastrarPagamento(Pagamento $pag){
            include '../dao/PagamentoDAO.php';
            $pdao=new PagamentoDAO();
            $pdao->cadastrarPagamento($this);
        }
    }

?>
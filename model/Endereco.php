<?php
        
    class Endereco{
        protected $id;
        protected $rua;
        protected $numero;
        protected $bairro;
        protected $logradouro;
        protected $complemento;

        public function __construct($id,$rua,$numero,$bairro,$logradouro,$complemento) {
            $this->id= $id;
            $this->rua= $rua;
            $this->numero= $numero;
            $this->bairro= $bairro;
            $this->logradouro= $logradouro;
            $this->complemento= $complemento;
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
         * Get the value of rua
         */
        public function getRua()
        {
                return $this->rua;
        }

        /**
         * Set the value of rua
         */
        public function setRua($rua): self
        {
                $this->rua = $rua;

                return $this;
        }

        /**
         * Get the value of numero
         */
        public function getNumero()
        {
                return $this->numero;
        }

        /**
         * Set the value of numero
         */
        public function setNumero($numero): self
        {
                $this->numero = $numero;

                return $this;
        }

        /**
         * Get the value of bairro
         */
        public function getBairro()
        {
                return $this->bairro;
        }

        /**
         * Set the value of bairro
         */
        public function setBairro($bairro): self
        {
                $this->bairro = $bairro;

                return $this;
        }

        /**
         * Get the value of logradouro
         */
        public function getLogradouro()
        {
                return $this->logradouro;
        }

        /**
         * Set the value of logradouro
         */
        public function setLogradouro($logradouro): self
        {
                $this->logradouro = $logradouro;

                return $this;
        }

        /**
         * Get the value of complemento
         */
        public function getComplemento()
        {
                return $this->complemento;
        }

        /**
         * Set the value of complemento
         */
        public function setComplemento($complemento): self
        {
                $this->complemento = $complemento;

                return $this;
        }
        function cadastrarEndereco(Endereco $ender) {
            include '../dao/EnderecoDAO.php';
            //echo "MD ".$ender->rua;
            $ender=new EnderecoDAO();
            $ender->cadastrarEndereco($this);
        }
    
    }
    
?>
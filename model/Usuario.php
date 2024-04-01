<?php

    class Usuario{
        protected $id;
        protected $nome;
        protected $email;
        protected $senha;
        protected $endereco;
        protected $telefone;
        
        public function __construct($id,$nome,$email,$senha,$telefone,$endereco) {
            $this->id = $id;
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
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
         * Get the value of email
         */
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         */
        public function setEmail($email): self
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of senha
         */
        public function getSenha()
        {
                return $this->senha;
        }

        /**
         * Set the value of senha
         */
        public function setSenha($senha): self
        {
                $this->senha = $senha;

                return $this;
        }

        /**
         * Get the value of endereco
         */
        public function getEndereco()
        {
                return $this->endereco;
        }

        /**
         * Set the value of endereco
         */
        public function setEndereco($endereco): self
        {
                $this->endereco = $endereco;

                return $this;
        }

        /**
         * Get the value of telefone
         */
        public function getTelefone()
        {
                return $this->telefone;
        }

        /**
         * Set the value of telefone
         */
        public function setTelefone($telefone): self
        {
                $this->telefone = $telefone;

                return $this;
        }
        
        function cadastrarUsuario(Usuario $user) {
            include '../dao/UsuarioDAO.php';
            $user=new UsuarioDAO();
            $user->cadastrarUsuario($this);
        }
        

    }

?>
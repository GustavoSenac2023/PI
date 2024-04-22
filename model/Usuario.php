<?php

    class Usuario{
        protected $id;
        protected $nome;
        protected $email;
        protected $senha;
        protected $telefone;
        
        public function __construct($id,$nome,$email,$senha,$telefone) {
            $this->id = $id;
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
            $this->telefone = $telefone;
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
        function login($email,$pass){
                include '../dao/UsuarioDAO.php';     
                $user=new UsuarioDAO();
                $user->login($email,$pass);
        }
        function listarUsuario(){
                include '../dao/UsuarioDAO.php';
                $user=new UsuarioDAO();
                return $user->listarUsuario();
        }
        function resgataID($codigo){
                include '../dao/UsuarioDAO.php';
                $user=new UsuarioDAO();
                return $user->resgataID($codigo);
        }
        function alterarUsuario(Usuario $user) {
                include '../dao/UsuarioDAO.php';
                $userobj=new UsuarioDAO();
                return $userobj->alterarUsuario($user);
        }
        function excluirUsuario($codigo) {
                include '../dao/UsuarioDAO.php';
                $userobj=new UsuarioDAO();
                return $userobj->excluirUsuario($codigo);
        }

    }

?>
<?php
class Usuario {
	private $id;
	private $nome;
	private $email;
	private $senha;
        function getId() {
            return $this->id;
        }

        function getNome() {
            return $this->nome;
        }

        function getEmail() {
            return $this->email;
        }

        function getSenha() {
            return $this->senha;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setNome($nome) {
            $this->nome = $nome;
        }

        function setEmail($email) {
            $this->email = $email;
        }

        function setSenha($senha) {
            $this->senha = $senha;
        }


}

<?php
class Post {
	private $id;
	private $titulo;
	private $data;
	private $conteudo;
	private $topico;
	private $autor;

        function getId() {
            return $this->id;
        }

        function getTitulo() {
            return $this->titulo;
        }

        function getData() {
            return $this->data;
        }

        function getConteudo() {
            return $this->conteudo;
        }

        function getTopico() {
            return $this->topico;
        }

        function getAutor() {
            return $this->autor;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        function setData($data) {
            $this->data = $data;
        }

        function setConteudo($conteudo) {
            $this->conteudo = $conteudo;
        }

        function setTopico($topico) {
            $this->topico = $topico;
        }

        function setAutor($autor) {
            $this->autor = $autor;
        }

}

<?php
class PostDAO {
	protected $db;
	function __construct() {
		try {
			$this->db = new PDO('mysql:host=localhost;dbname=forum', 'root', '');
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(Exception $e) {
			print 'Erro ao conectar';
		}
	}

	public function getLista($id) {
		$sql = "SELECT * FROM posts
						WHERE post_topic2 = :id";
						$query = $this->db->prepare($sql);
						$query->execute(array(
							':id' => $id ));
					return $query->fetchAll();

	}
	public function get($id) {
		$post = new Post();
		$sql = "SELECT * FROM posts
				WHERE post_id = :id";
		$query = $this->db->prepare($sql);
		$query->execute(array(
			':id' => $id,
		));
		$dados = $query->fetch();
		$post->setId($dados['post_id']);
		$post->setTitulo($dados['post_titulo']);
		$post->setConteudo($dados['post_cont']);
		$post->setData($dados['post_data']);
		$post->setTopico($dados['topic_id']);
		$post->setAutor($_SESSION['us_nome']);
		return $post;
	}
	public function insere(Post $post) {
		$sql = "INSERT INTO posts
					(post_titulo, post_data, post_cont, post_topic2, post_aut2)
				VALUES
					(:titulo, :data, :conteudo, :topico, :autor)";
		$query = $this->db->prepare($sql);
		$query->execute(array(
			':titulo' => $post->getTitulo(),
			':data' => $post->getData(),
			':conteudo' => $post->getConteudo(),
			':topico' => $post->getTopico(),
			':autor' => $post->getAutor(),
		));
	}
	public function remove(Post $post) {
		$sql = "DELETE FROM posts
				WHERE post_id = :id";
		$query = $this->db->prepare($sql);
		$query->execute(array(
			':id' => $post->getId(),
		));
	}
	public function atualiza(Post $post) {
		$sql = "UPDATE posts SET
					post_titulo	= :titulo,
					post_data 	= :data,
					post_cont 	= :conteudo,
					post_topic2 	= :topico,

				WHERE
					post_id = :id";
		$query = $this->db->prepare($sql);
		$query->execute(array(
			':titulo' => $post->getTitulo(),
			':data' => $post->getData(),
			':conteudo' => $post->getConteudo(),
			':topicos' => $post->getTopico(),
			':id' => $post->getId(),
		));
	}
}

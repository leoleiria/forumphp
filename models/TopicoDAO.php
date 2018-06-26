<?php
class TopicoDAO {
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

	public function getLista() {
		$sql = "SELECT * FROM topicos";
		$result = $this->db->query($sql);
		return $result;
	}
	public function get($id) {
		$topico = new Topico();
		$sql = "SELECT * FROM topicos
				WHERE topic_id = :id";
		$query = $this->db->prepare($sql);
		$query->execute(array(
			':id' => $id,
		));
		$dados = $query->fetch();
		$topico->setId($dados['topic_id']);
		$topico->setTopic_title($dados['topic_title']);

		return $topico;
	}
	public function insere(Topico $topico) {
		$sql = "INSERT INTO topicos
					(topic_title)
				VALUES
					(:titulo)";
		$query = $this->db->prepare($sql);
		$query->execute(array(
			':titulo' => $topico->getTopic_title(),
		));
	}
	public function remove(Topico $topico) {
		$sql = "DELETE FROM topicos
				WHERE topic_id = :id";
		$query = $this->db->prepare($sql);
		$query->execute(array(
			':id' => $topico->getId(),
		));
	}
	public function atualiza(Topico $topico) {
		$sql = "UPDATE topicos SET
					topic_title	= :titulo,

				WHERE
					topic_id = :id";
		$query = $this->db->prepare($sql);
		$query->execute(array(
			':titulo' => $topico->getTopic_title(),
			':id' => $topico->getId(),
		));
	}
}

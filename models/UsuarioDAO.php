<?php
class UsuarioDAO {
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
		$sql = "SELECT * FROM usuarios";
		$result = $this->db->query($sql);
		return $result;
	}
	public function get($id) {
		$usuario = new Usuario();
		$sql = "SELECT * FROM usuario
				WHERE us_id = :id";
		$query = $this->db->prepare($sql);
		$query->execute(array(
			':id' => $id,
		));
		$dados = $query->fetch();
		$usuario->setId($dados['us_id']);
		$usuario->setNome($dados['us_nome']);
		$usuario->setEmail($dados['us_email']);
		$usuario->setSenha($dados['us_pass']);
		return $usuario;
	}
	public function insere(Usuario $usuario) {
		$sql = "INSERT INTO usuarios
					(us_nome, us_email, us_pass)
				VALUES
					(:nome, :email, :senha)";
		$query = $this->db->prepare($sql);
		$query->execute(array(
			':nome' => $usuario->getNome(),
			':email' => $usuario->getEmail(),
			':senha' => $usuario->getSenha(),

		));
	}
	public function remove(Usuario $usuario) {
		$sql = "DELETE FROM usuarios
				WHERE us_id = :id";
		$query = $this->db->prepare($sql);
		$query->execute(array(
			':id' => $usuario->getId(),
		));
	}
	public function atualiza(Usuario $usuario) {
		$sql = "UPDATE usuarios SET
					us_nome	= :nome,
					us_email 			= :email,
					us_pass 			= :senha,
				WHERE
					us_id = :id";
		$query = $this->db->prepare($sql);
		$query->execute(array(
			':nome' 	=> $usuario->getNome(),
			':email' 	=> $usuario->getEmail(),
			':senha' 		=> $usuario->getSenha(),
			':id' 		=> $usuario->getId(),
		));
	}
}

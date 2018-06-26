<?php
use PHPUnit\Framework\TestCase;
try {
  $this->db = new PDO('mysql:host=localhost;dbname=forum', 'root', '');
  $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e) {
  print 'Erro ao conectar';
}

class UsuarioDAOTeste extends TestCase {

public function testGetSetNome() {
  $usuario = new Usuario();
  $sql = "SELECT * FROM usuario
      WHERE us_nome = 'leandro';
  $query = $this->db->prepare($sql);
  $query->execute();
  $dados = $query->fetch();
  $usuario->setNome($dados['us_nome']);
  $this->assertEquals($usuario->getNome(), $dados['us_nome']);
}


}

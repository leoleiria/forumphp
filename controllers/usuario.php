<?php
include_once("../models/Usuario.php");
include_once("../models/UsuarioDAO.php");
if (!isset($_SESSION['us_nome'])) {
	// inserir
	if (isset($_POST['nome'], $_POST['email'], $_POST['senha'])) {
		// criar o objeto
		$novo = new Usuario();
		$novo->setNome($_POST['nome']);
		$novo->setEmail($_POST['email']);
		$novo->setSenha($_POST['senha']);

		// inserir no banco
		$dao = new UsuarioDAO();
		$dao->insere($novo);
		$mensagem = "Usuario cadastrado!";
		require_once __DIR__.'/../views/mensagem.php';
	}
	else {
		$usuario = new Usuario();
		require_once __DIR__.'/../views/usuario/form.php';
	}
}
elseif (isset($_GET['f']) && ($_GET['f'] == 'atualiza')) {
	// atualizar
	$dao = new UsuarioDAO();
	$usuario = $dao->get($_GET['id']);
	if (isset($_POST['nome'], $_POST['email'], $_POST['senha'])) {
		// atualiza no banco
		$usuario->setNome($_POST['nome']);
		$usuario->setEmail($_POST['email']);
		$usuario->setSenha($_POST['senha']);
		$mensagem = "Usuário atualizado!";
		require_once __DIR__.'/../views/mensagem.php';
	}
	else {
		// mostra form de alteracao
		require_once __DIR__.'/../views/usuario/form.php';
	}
}
elseif (isset($_GET['f']) && ($_GET['f'] == 'remove')) {
	// remover
	$dao = new UsuarioDAO();
	$usuario = $dao->get($_GET['id']);
	$dao->remove($usuario);
	$mensagem = "Usuario removido!";
	require_once __DIR__.'/../views/mensagem.php';
}

<?php
include_once("../models/Topico.php");
include_once("../models/TopicoDAO.php");
if (isset($_GET['f']) && ($_GET['f'] == 'insere')) {
	// inserir
	if (isset($_POST['titulo'])) {

		$novo = new Topico();
		$novo->setTopic_title($_POST['titulo']);
		// inserir no banco
		$dao = new TopicoDAO();
		$dao->insere($novo);
		$mensagem = "Topico cadastrado!";
		require_once __DIR__.'/../views/mensagem.php';
	}
	else {
		$topico = new Topico();
		require_once __DIR__.'/../views/topico/form.php';
	}
}
if (isset($_GET['f']) && ($_GET['f'] == 'atualiza')) {
	// atualizar
	$dao = new TopicoDAO();
	$topico = $dao->get($_GET['id']);
	if (isset($_POST['titulo'])) {
		// atualiza no banco
		$topico->setTitulo($_POST['titulo']);

		$mensagem = "Topico atualizado!";
		require_once __DIR__.'/../views/mensagem.php';
	}
	else {
		// mostra form de alteracao
		require_once __DIR__.'/../views/topico/form.php';
	}
}
elseif (isset($_GET['f']) && ($_GET['f'] == 'remove')) {
	// remover
	$dao = new TopicoDAO();
	$topico = $dao->get($_GET['id']);
	$dao->remove($topico);
	$mensagem = "Topico removido!";
	require_once __DIR__.'/../views/mensagem.php';
}
else {
	// consulta e mostra a lista
	$dao = new TopicoDAO();
	$lista = $dao->getLista();
	require_once __DIR__.'/../views/topico/lista.php';
}

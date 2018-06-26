<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
    <title>Forum</title>
  </head>
  <script language=javascript src="_javascript/funcoes.js"></script>
  <body>
  <? include __DIR__.'/../views/menu.php'?>
  <aside id="lateral">

      <? include __DIR__.'/../views/menu_topic.php'?>

  </aside>

<?php
include_once("../models/Post.php");
include_once("../models/PostDAO.php");
if (isset($_GET['f']) && ($_GET['f'] == 'insere')) {
	// inserir
	if (isset($_POST['titulo'], $_POST['data'], $_POST['conteudo'], $_POST['topico'], $_POST['autor'])) {

		$novo = new Post();
		$novo->setTitulo($_POST['titulo']);
		$novo->setData($_POST['data']);
		$novo->setConteudo($_POST['conteudo']);
		$novo->setTopico($_POST['topico']);
		$novo->setAutor($_POST['autor']);
		// inserir no banco
		$dao = new PostDAO();
		$dao->insere($novo);
		$mensagem = "Post cadastrado!";
		require_once __DIR__.'/../views/mensagem.php';
	}
	else {
		$post = new Post();
		require_once __DIR__.'/../views/post/form.php';
	}
}elseif (isset($_GET['f']) && ($_GET['f'] == 'atualiza')) {
	// atualizar
	$dao = new PostDAO();
	$post = $dao->get($_GET['id']);
	if (isset($_POST['titulo'], $_POST['data'], $_POST['conteudo'], $_POST['topico'], $_POST['autor'])) {
		// atualiza no banco
		$post->setTitulo($_POST['titulo']);
		$post->setData($_POST['data']);
		$post->setConteudo($_POST['conteudo']);
		$post->setTopico($_POST['topico']);
		$post->setAutor($_POST['autor']);
		$dao->atualiza($post);
		$mensagem = "Post atualizado!";
		require_once __DIR__.'/../views/mensagem.php';
	}
	else {
		// mostra form de alteracao
		require_once __DIR__.'/../views/post/form.php';
	}
}
elseif (isset($_GET['f']) && ($_GET['f'] == 'remove')) {
	// remover
	$dao = new PostDAO();
	$post = $dao->get($_GET['id']);
	$dao->remove($post);
	$mensagem = "Post removido!";
	require_once __DIR__.'/../views/mensagem.php';
}
else {
	// consulta e mostra a lista
	$dao = new PostDAO();
	$lista = $dao->getLista();
	require_once __DIR__.'/../views/post/lista.php';
}
?>
</body>
</html>

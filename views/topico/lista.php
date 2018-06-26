<!DOCTYPE html>
<html>
<head>
	<title>Posts</title>
</head>
<body>
<?
		if (isset($_SESSION['us_nome'])){
				?><a href="controllers/topico.php?r=post&f=insere"><h1>Clique aqui para Inserir Novo Post</h1></a> <br/>
			<?}
	?>
	<? if ($lista->rowCount() > 0): ?>
		<table>
			<thead>
				<tr>
          <th>Titulo</th>
					</tr>
			</thead>
			<tbody>
				<? foreach ($lista as $linha): ?>
					<tr>

						<td><a href="views/posts.php?id=<?=$linha['topic_id']?>"><?=$linha['topic_title']?></a></td>

						</tr>
				<? endforeach; ?>
			</tbody>
		</table>
	<? else: ?>
		Não há topicos cadastrados.
	<? endif; ?>
</body>
</html>

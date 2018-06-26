<!DOCTYPE html>
<html>
<head>
	<title>Posts</title>
</head>
<body>
<?
		if (isset($_SESSION['us_nome'])){
				?><a href="../controllers/post.php?topico=<?=$_GET['id']?>&f=insere"><h1>Clique aqui para Inserir Novo Post</h1></a> <br/>
			<?}
	?>
	<? if (!empty($lista)): ?>
		<table>
			<thead>
				<tr>
					<th>Id</th>
					<th>Data</th>
					<th>Topico</th>
          <th>Titulo</th>
					<th>Conteudo</th>
					<th>Autor</th>
					</tr>
			</thead>
			<tbody>
				<? foreach ($lista as $linha): ?>
					<tr>
						<td><?=$linha['post_id']?></td>
						<td><a href="index.php?r=post&f=atualiza&id=<?=$linha['post_id']?>"><?=$linha['post_data']?></a></td>
						<td><?=$linha['post_topic2']?></td>
						<td><?=$linha['post_titulo']?></td>
						<td><?=$linha['post_cont']?></td>
						<td><?=$linha['post_aut2']?></td>
						</tr>
				<? endforeach; ?>
			</tbody>
		</table>
	<? else: ?>
		Não há posts cadastrados.
	<? endif; ?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Usuário</title>
</head>
<body>
	<a href="index.php?r=usuario&f=insere">Inserir</a> <br/>
	<? if ($lista->rowCount() > 0): ?>
		<table>
			<thead>
				<tr>
					<th>Id</th>
					<th>Nome</th>
					<th>E-mail</th>
					<th>senha</th>
				</tr>
			</thead>
			<tbody>
				<? foreach ($lista as $linha): ?>
					<tr>
						<td><?=$linha['us_id']?></td>
						<td><a href="index.php?r=usuario&f=atualiza&id=<?=$linha['us_id']?>"><?=$linha['us_nome']?></a></td>
						<td><?=$linha['us_email']?></td>
						<td><?=$linha['us_senha']?></td>
						<td><a href="index.php?r=usuario&f=remove&id=<?=$linha['us_id']?>">excluir</a></td>
					</tr>
				<? endforeach; ?>
			</tbody>
		</table>
	<? else: ?>
		Não há clientes cadastrados.
	<? endif; ?>
</body>
</html>

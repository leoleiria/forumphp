<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Topicos</title>
</head>
<body>
	<form method="post">
		Titulo do Topico:
		<input type="text" name="titulo" size="30" value="<?=$topico->getTopic_title()?>"> <br/>
		<input type="submit" value="Salvar">
	</form>
</body>
</html>

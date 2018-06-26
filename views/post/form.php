<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Post</title>
</head>
<body>
	<form method="post">
		Titulo: <br/>
		<input type="text" name="titulo" size="30" value="<?=$post->getTitulo()?>"> <br/>
		Data: <br/>
		<input type="date" name="data"  value="<?=$post->getData()?>"> <br/>
		Conteudo: <br/>
		<input type="text" name="conteudo" value="<?=$post->getConteudo()?>"> <br/>
		<input type="hidden" name="topico" size="30" value="<?=$_GET['topico']?>"> <br/>
		<input type="hidden" name="autor" size="30" value="<?=$_SESSION['us_nome']?>"> <br/>
		<input type="submit" value="Salvar">
	</form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Usuários</title>
</head>
<body>
	<form method="post">
		Nome: <br/>
		<input type="text" name="nome" size="30" value="<?=$usuario->getNome()?>"> <br/>
		E-mail: <br/>
		<input type="text" name="email" size="30" value="<?=$usuario->getEmail()?>"> <br/>
		Senha: <br/>
		<input type="password" name="senha" size="30" value="<?=$usuario->getSenha()?>"> <br/>
		<input type="submit" value="Salvar">
	</form>
</body>
</html>

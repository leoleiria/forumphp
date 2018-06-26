<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css">
    <title>Cadastro de Novo Usuário</title>
  </head>
  <body>
    <form action="../controllers/novocadastro.php" method="post">
  		Nome:
  		<input type="text" name="us_nome" size="20"/> <br/>
  		E-mail:
  		<input type="text" name="us_email" size="20"/> <br/>
  		Senha:
  		<input type="password" name="us_pass" size="20"/> <br/>
  		<input type="submit" value="Enviar">
  	</form>
  </body>
</html>

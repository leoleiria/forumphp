<?php
try {
	$db = new PDO('mysql:host=localhost;dbname=forum', 'root', '');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e) {
	print 'Erro ao conectar';
}

if (isset($_POST['us_nome'], $_POST['us_email'], $_POST['us_pass'])) {
	$sql = "INSERT INTO usuarios
				(us_nome, us_email, us_pass)
			VALUES
				(:us_nome, :us_email, :us_pass)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':us_nome' => $_POST['us_nome'],
		':us_email' => $_POST['us_email'],
		':us_pass' => $_POST['us_pass'],
	));
	print 'Cadastro Efetuado com sucesso!';
}
?>
 <a href="../index.php"> <br> Voltar

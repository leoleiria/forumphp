<?php
try {
	$db = new PDO('mysql:host=localhost;dbname=forum', 'root', '');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e) {
	print 'Erro ao conectar';
}

session_start();

if (isset($_POST['us_nome'], $_POST['us_pass'])) {
	$sql = "SELECT us_nome, us_pass FROM usuarios
				WHERE us_nome=:us_nome AND us_pass=:us_pass";

	$query = $db->prepare($sql);
	$query->execute(array(
		':us_nome' => $_POST['us_nome'],
		':us_pass' => $_POST['us_pass'],
	));
$dados = $_POST['us_nome'];
  if ($query->fetch()){
    $_SESSION['us_nome']= $dados;
    header("Location:http://localhost/forum/index.php");
  }else {
    echo"<script language='javascript' type='text/javascript'>alert('usuario e/ou senha incorretos');window.location.href='http://localhost/forum/views/login.php';</script>";
    die();
  }
}

  <? session_start();?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css">
    <title>Forum</title>
  </head>
  <script language=javascript src="_javascript/funcoes.js"></script>
  <body>

        <header id="cabecalho">
        <hgroup>
        <h1>Forum PHP</h1>
          <h2>
            <?
            if (isset($_SESSION['us_nome'])){
              echo "Bem vindo ".$_SESSION['us_nome'];
            ?><a href="http://localhost/forum/controllers/sair.php"><br>Clique aqui para sair</a> <?
            }else{
              echo "Você não está logado!";
              ?><a href="http://localhost/forum/views/form_login.php"><br>Clique aqui para logar</a> <?
            }
            ?>
          </h2>
    </hgroup>
    <nav id="menu">

        <ul>
        <li ><a href="http://localhost/forum/index.php">Home</a></li>
        <li ><a href="http://localhost/forum/views/form_login.php">Login/Novo Cadastro</a></li>


      </ul>

    </nav>
    </header>
    <section id="corpo">


    </section>


  </body>
</html>

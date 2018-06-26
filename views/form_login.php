<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
    <title></title>
  </head>
  <body>
    <? include 'menu.php'?>
    <section id="corpo">
      <?
      if (!isset($_SESSION['us_nome'])){?>

      <p><h1>Já tenho cadastro!</h1></p>
      <form action="http://localhost/forum/controllers/conect.php" method="post">

          <fieldset>
            Usuário:</br><input type="text" name="us_nome"><br>
            Senha: </br><input type="password" name="us_pass"><br>
            <input type="submit" value="OK!">
          </fieldset>
        </form>

        <p><h1>Novo Cadastro</h1></p>
          <?
            include '../controllers/usuario.php';
          }else {
            echo '<h1>Você ja está logado!</h1>';
          }
          ?>


    </section>

    <aside id="lateral">
      <h1>Forúm!</h1><br>
      <h2>Compratilhe suas idéias conosco!</h2>

      <figure class="fotolegenda">
        <img src="http://www.imperial.fm.br/files/images/forum-balao.jpg">
        <figcaption>
          <h3>Fórum PHP  </h3>
          <p>Suas ideias devem ser Compartilhadas</p>
        </figcaption>
      </figure>

    </aside>
  </body>
</html>

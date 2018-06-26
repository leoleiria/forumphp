<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
    <title>Forum</title>
  </head>
  <body>
      <header>
  <? include 'menu.php';
  include_once("../models/PostDAO.php");?>
    </header>
    <section id="corpo">
      <?        $dao = new PostDAO();
              	$lista = $dao->getLista($_GET['id']);
              	require_once __DIR__.'/post/lista.php';
      ?>
      </section>

      <aside id="lateral">
      <? include 'menu_topic.php';?>

      </aside>



  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <?
    include_once(__DIR__."/../models/TopicoDAO.php");
    ?>
  </head>
  <body>

      </header>
      <section id="corpo">
        <?        $dao = new TopicoDAO();
                  $lista = $dao->getLista();
                  require_once __DIR__.'/topico/lista.php';
        ?>
        </section>
  </body>
</html>

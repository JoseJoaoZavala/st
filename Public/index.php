<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Meu site com Bootstrap</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <?php
      $jumbotron_title = "Bem-vindo ao meu site";
      $jumbotron_text = "Este é um exemplo de página criada com o Bootstrap.";
      $jumbotron_button_text = "Saiba mais";
    ?>
    <div class="jumbotron">
      <h1 class="display-4"><?php echo $jumbotron_title; ?></h1>
      <p class="lead"><?php echo $jumbotron_text; ?></p>
      <hr class="my-4">
      <p>Ele usa classes que fornecem estilo para tipografia e elementos HTML comuns.</p>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button"><?php echo $jumbotron_button_text; ?></a>
      </p>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>

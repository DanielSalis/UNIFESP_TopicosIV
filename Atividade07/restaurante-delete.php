<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <link rel="stylesheet" href="./index.css">
</head>
<body>
    <div id="root">
    <nav class="header-restaurante blue lighten-2">
    <div class="nav-wrapper">
        <a href="" class="brand-logo">Admin - Restaurante - Deletar</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="./restaurante-cadastro.php">Cadastro</a></li>
        <li><a href="">Atualizar</a></li>
        <li><a href="./restaurante-delete.php">Deletar</a></li>
        </ul>
    </div>
    </nav>
    <div class="row">
    <form class="col s12" action="./restauranteApi-delete.php" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" name="first_name" type="text" class="validate">
          <label for="first_name">Nome</label>
        </div>
      </div>
      <input type="submit" name="submit" id="input-submit" class="waves-effect waves-light btn blue lighten-2">
      </div>
    </form>
  </div>
</div>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>

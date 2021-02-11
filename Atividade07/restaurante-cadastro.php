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
        <a href="" class="brand-logo">Admin - Restaurante</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="./restaurante-cadastro.php">Cadastro</a></li>
        <li><a href="">Atualizar</a></li>
        <li><a href="">Deletar</a></li>
        </ul>
    </div>
    </nav>
    <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">Nome</label>
        </div>
        <div class="input-field col s6">
          <input id="Telefone" type="text" class="validate">
          <label for="Telefone">Telefone</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="endereco" type="text" class="validate">
          <label for="endereco">Endereço </label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 ">
          <input id="Whatsapp" type="text" class="validate">
          <label for="Whatsapp">Whatsapp</label>
        </div>
      </div>
      <a class="waves-effect waves-light btn blue lighten-2">Enviar</a>
      </div>
    </form>
  </div>
</div>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>

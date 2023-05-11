<?php include("/wamp64/www/Trab004/layout/topo.php");?>
<?php


include("database/database_usuario.php");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<form method="post" action="salvar_usuario.php">
    <label class="titulo">Novo Cadastro</label>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nome</label>
    <input type="text" class="form-control" id="Nome" name="Nome">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Usuario</label>
    <input type="text" class="form-control" id="Usuario" name="Usuario">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" class="form-control" id="Email" name="Email">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input type="password" class="form-control" id="Senha" name="Senha">
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Não sou um robô</label>
  </div>

  <button type="submit" class="btn btn-primary">Cadastrar</button>

</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<?php include("/wamp64/www/Trab004/layout/baixo.php");?>

</body>
</html>
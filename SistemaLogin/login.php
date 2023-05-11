

<?php

include("database/database_usuario.php");


if(isset($_POST['Email']) || isset($_POST['Senha'])) {
        
        if (strlen($_POST['Email']) == 0 ) {
                echo "Preencha seu e-mail";
        } else if (strlen($_POST['Senha']) == 0) {
                echo "Preencha sua senha";
        } else {
                $email = $con->real_escape_string($_POST['Email']);
                $senha = $con->real_escape_string($_POST['Senha']);

                $sql_code = "SELECT * FROM usuario WHERE Email = '$email' AND Senha = '$senha'";
                $sql_query = $con->query($sql_code) or die("Falha na execução do código sql " . $mysqli->error);

                $quantidade = $sql_query->num_rows;

                if($quantidade == 1) {

                  $usuario=$sql_query->fetch_assoc();
                  var_dump($usuario);
                  if(!isset($_SESSION)) {
                      session_start();
                  }
      
                  $_SESSION['id'] = $usuario['id'];
                  $_SESSION['Nome'] = $usuario['Nome'];
      
                  header("location:/Trab004/home.php");
      
              } else {
                  echo "Falha ao logar! E-mail ou senha incorretos!";
              }
        }
}

?>

<?php include("/wamp64/www/Trab004/layout/topo.php");?>

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
<form method="post" action="login.php">
    <label class="titulo">Login</label>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" class="form-control" id="Email" name="Email">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input type="password" class="form-control" id="Senha" name="Senha">
  </div>

  <button type="submit" class="btn btn-primary">Entrar</button>
  <br>
  <br>
  <a href="/Trab004/SistemaLogin/cadastro_usuario.php"> Não possui uma conta? Cadastre-se aqui</a>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


<?php include("/wamp64/www/Trab004/layout/baixo.php");?>

</body>
</html>

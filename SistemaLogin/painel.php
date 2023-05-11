<?php

include("protect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <span class ="painel">Bem vindo(a), <?php echo $_SESSION['Nome'] ."!"; ?></span>

    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>
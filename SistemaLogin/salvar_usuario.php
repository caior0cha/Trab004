<?php

    include("database/database_usuario.php");

    $nome = $_POST['Nome'];
    $usuario = $_POST['Usuario'];
    $email = $_POST['Email'];
    $senha = $_POST['Senha'];

    $sql = "INSERT INTO usuario
                (Nome, Usuario, Email, Senha)
                VALUES 
                ( '{$nome}', '{$usuario}', '{$email}', '{$senha}' )";

    $con->query($sql);
    $con->close();

    header("location:login.php");
?>
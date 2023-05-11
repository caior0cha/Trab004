<?php include("SistemaLogin/protect.php"); ?>

<?php

        include("database/database.php");

        $nome = $_POST['nome'];
        $quantidade = $_POST['quantidade'];
        $preco = $_POST['preco'];
        $peso = $_POST['peso'];

        $sql= "INSERT INTO produto
                (nome, preco, quantidade, peso)
                VALUES
                ( '{$nome}', {$preco}, {$quantidade}, {$peso})";

        $con->query($sql); // Executar o insert no banco
        $con->close();  // Fechar conexao

        header("location:home.php");
?>

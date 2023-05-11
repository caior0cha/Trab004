<?php include("SistemaLogin/protect.php"); ?>

<?php

        include("database/database.php");

        $nome = $_POST['nome'];
        $data_nasc = $_POST['data_nasc'];
        $cidade_nasc = $_POST['cidade_nasc'];
        $ativo = $_POST['ativo'];

        $sql= "INSERT INTO cliente
                (nome, data_nasc, cidade_nasc, ativo)
                VALUES
                ( '{$nome}', {$data_nasc}, {$cidade_nasc}, {$ativo})";

        $con->query($sql); // Executar o insert no banco
        $con->close();  // Fechar conexao

        header("location:cliente.php");
?>

<?php include("SistemaLogin/protect.php"); ?>

<?php

$id=$_POST['id'];
$nome = $_POST['nome'];
$data_nasc = $_POST['data_nasc'];
$cidade_nasc = $_POST['cidade_nasc'];
$ativo = $_POST['ativo'];

$sql = "UPDATE cliente
                SET nome='{$nome}',
                    data_nasc = {$data_nasc},
                    cidade_nasc = {$cidade_nasc},
                    ativo = {$ativo} 
                        WHERE id = {$id}";

include("database/database.php");
$con->query($sql);

header("location:cliente.php");

?>
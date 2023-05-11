<?php include("SistemaLogin/protect.php"); ?>

<?php


$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$peso = $_POST['peso'];

$sql = "UPDATE produto
                SET nome='{$nome}',
                    preco = {$preco},
                    quantidade = {$quantidade},
                    peso = {$peso} 
                        WHERE id = {$id}";

include("database/database.php");
$con->query($sql);

header("location:home.php");

?>
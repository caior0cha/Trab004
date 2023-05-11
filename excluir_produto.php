<?php include("SistemaLogin/protect.php"); ?>

<?php

    include("database/database.php");

    $id=$_GET['id'];

    $sql= "DELETE FROM produto
    WHERE id={$id}";

    include("database/database.php");
    $con->query($sql);

    header("location:home.php");

?>
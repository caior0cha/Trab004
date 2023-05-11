<?php include("SistemaLogin/protect.php"); ?>

<?php

    include("database/database.php");

    $id=$_GET['id'];

    $sql= "DELETE FROM cliente
    WHERE id={$id}";

    include("database/database.php");
    $con->query($sql);

    header("location:cliente.php");

?>

<?php include("SistemaLogin/protect.php"); ?>

<?php

    include("layout/topo.php");

    include("database/database.php");

    $sql='SELECT * FROM cliente';
    
    $result= $con->query($sql);

?>

<h1>Clientes</h1>
<a href="novo_cliente.php" class="btn btn-light">Cadastrar novo cliente<a>
    
<br>
<br>

<table class="table table-dark table-striped">
        <thead>
            <td>Id</td>
            <td>Nome</td>
            <td>Data de Nascimento</td>
            <td>Cidade de Nascimento</td>
            <td>Ativo</td>
       </thead>
    <tbody>

        <?php
             while($row = $result->fetch_assoc())
            
             {

              echo "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['nome'] . "</td>
                        <td>" . $row['data_nasc'] . "</td>
                        <td>" . $row['cidade_nasc'] . "</td>
                        <td>" . $row['ativo'] . "</td>
                        <td>
                            <a href='/Trab004/alterar_cliente.php?id=" . $row['id'] . "'>📝</a>
                            <a href='/Trab004/excluir_cliente.php?id=" . $row['id'] . "'>🗑️</a>
                        </td>

                        
                    </tr>";
             }
        ?>
    </tbody>
</table>





<?php

    include("layout/baixo.php");

?>
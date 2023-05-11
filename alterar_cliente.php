<?php include("SistemaLogin/protect.php"); ?>

<?php include("layout/topo.php");




$id = $_GET['id'];

$sql="SELECT * FROM cliente WHERE id=" . $id;

include("database/database.php");

$resultado = $con->query($sql);
$dados = $resultado->fetch_assoc();

?>

<h1>Alterar Cadastro</h1>
<form method="post" action="salvar_alt_cliente.php">
  <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
      <div class="form-group">
        <label>Cliente</label>
        <input type="text" name="nome" class="form-control" value="<?php echo $dados['nome'];?>">
      </div>

  <div class="form-group">
    <label>Data de nascimento</label>
    <input type="text" name="data_nasc" class="form-control" value="<?php echo $dados['data_nasc'];?>">
  </div>

  <div class="form-group">
    <label>CEP do local de nascimento</label>
    <input type="text" name="cidade_nasc" class="form-control" value="<?php echo $dados['cidade_nasc'];?>">
  </div>

  <div class="form-group">
    <label>Ativo</label>
    <input type="text" name="ativo" class="form-control" value="<?php echo $dados['ativo'];?>">
  </div>
 
  <button type="submit" class="btn btn-success">Salvar</button>
</form>

<?php include("layout/baixo.php");?>
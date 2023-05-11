<?php include("SistemaLogin/protect.php"); ?>

<?php include("layout/topo.php");

$id = $_GET['id'];

$sql="SELECT * FROM produto WHERE id=" . $id;

include("database/database.php");

$resultado = $con->query($sql);
$dados = $resultado->fetch_assoc();

?>


<h1>Editar produto</h1>
<form method="post" action="salvar_alt_produto.php">
  <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
      <div class="form-group">
        <label>Nome do produto</label>
        <input type="text" name="nome" class="form-control" value="<?php echo $dados['nome'];?>">
      </div>

  <div class="form-group">
    <label>Preço</label>
    <input type="text" name="preco" class="form-control" value="<?php echo $dados['preco'];?>">
  </div>

  <div class="form-group">
    <label>Quantidade em estoque</label>
    <input type="text" name="quantidade" class="form-control" value="<?php echo $dados['quantidade'];?>">
  </div>

  <div class="form-group">
    <label>Peso em Kg</label>
    <input type="text" name="peso" class="form-control" value="<?php echo $dados['peso'];?>">
  </div>
 
  <button type="submit" class="btn btn-success">Salvar</button>
</form>

<?php include("layout/baixo.php");?>
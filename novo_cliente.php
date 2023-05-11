<?php include("SistemaLogin/protect.php"); ?>

<?php include("layout/topo.php");?>

<form method="post" action="salvar_cliente.php">
      <div class="form-group">
        <label>Nome do cliente</label>
        <input type="text" name="nome" class="form-control" placeholder="Nome">
      </div>

  <div class="form-group">
    <label>Data de nascimento</label>
    <input type="text" name="data_nasc" class="form-control" placeholder="aaaammdd">
  </div>

  <div class="form-group">
    <label>Cidade de nascimento</label>
    <input type="text" name="cidade_nasc" class="form-control" placeholder="CEP">
  </div>

  <div class="form-group">
    <label>Ativo</label>
    <input type="text" name="ativo" class="form-control" placeholder="1 para SIM / 0 para NÃO">
  </div>
 
  <button type="submit" class="btn btn-success">Salvar</button>
</form>

<?php include("layout/baixo.php");?>
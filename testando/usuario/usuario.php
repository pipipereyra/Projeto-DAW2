<?php
	include_once "../topo.php";
?>
  <div style="text-align: center; margin: 10px auto 10px auto ">
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../index2.php">Inicio</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../categoria/listacat.php">Listar Categorias</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="listausu.php">Listar Usuarios</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../produto/listaprod.php">Listar Produtos</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../Vendas/listavend.php">Listar Vendas</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../usuario/logout.php">Sair</a>
    </div>

	<form action="addusuario_ok.php" method="post">
			<h2> &nbsp &nbsp &nbsp Adicionar Usuário &nbsp &nbsp</h2>
		</form>
	<form class="col-lg-4" method="POST" action="addusuario_ok.php">
  <div class="form-group">
    <label for="Nome">Nome Completo:</label>
    <input type="text" class="form-control" id="Nome" name="Nome">
  </div>
  <div class="form-group">
    <label for="E_mail">Email:</label>
    <input type="email" class="form-control" id="E_mail" name="E_mail">
  </div>
  <div class="form-group">
    <label for="Imagem">Imagem:</label>
    <input type="file" class="form-control" id="Imagem" name="Imagem">
  </div>
  <div class="form-group">
    <label for="Nascimento">Data de Nascimento:</label>
    <input type="date" class="form-control" id="Nascimento" name="Nascimento">
  </div>
  <div class="form-group">
    <label for="RG">RG:</label>
    <input type="number" class="form-control" id="RG" name="RG">
  </div>
  <div class="form-group">
    <label for="Tipo">Tipo:</label>
    <input type="text" class="form-control" id="Tipo" name="Tipo">
  </div>
    <div class="form-group">
    <label for="Senha">Password:</label>
    <input type="password" class="form-control" id="Senha" name="Senha">
  </div>
  <div class="form-group">
    <label for="CPF:">CPF</label>
    <input type="number" class="form-control" id="CPF" name="CPF">
  </div>
  <div class="form-group">
    <label for="Endereco">Endereço:</label>
    <input type="text" class="form-control" id="Endereco" name="Endereco">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
<button type="submit" class="btn btn-default" onclick='window.location.href="listausu.php"'>Voltar</button><br>	
  </form>


<?php
	
	if(isset($_GET['erro'])){
			echo "<span style='color:red'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Preencha todos os campos!</span>";
	}	
	if(isset($_GET['sucesso'])){
			echo "<br><span Style='color:blue'> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Usuário adicionado com sucesso!</span>";
	}
	
	
	
?>
<?php
	include_once "../rodape.php";
?>
	<div style="text-align: center; margin: 10px auto 10px auto ">
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../categoria/categoria.php">Adicionar Categorias</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="usuario.php">Adicionar Usuarios</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../produto/produto.php">Adicionar Produtos</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../Vendas/listarvendas.php">Listar Vendas</a>
	</div>
	<script>
		document.getElementById("usuario").classList.add("active");
	</script>

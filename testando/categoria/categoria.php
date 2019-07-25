<?php
	include_once "../topo.php";
?>
	<div style="text-align: center; margin: 10px auto 10px auto ">
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../index2.php">Inicio</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="listacat.php">Listar Categorias</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../usuario/listausu.php">Listar Usuarios</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../produto/listaprod.php">Listar Produtos</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../comanda/listavenda.php">Listar Vendas</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../usuario/logout.php">Sair</a>
		</div>
	
		<form action="addcat_ok.php" method="post">
			<h2 style="text-align:center;"> &nbsp &nbsp &nbsp Adicionar Categoria &nbsp &nbsp</h2>
			<div class="container mt-3">
				<div class="input-group mb-3">
					<input type="text" class="form-control" name="Nome" placeholder="Escreva a nova categoria">
					<button class="btn btn-sucess" style="border:0.5px solid gray; background:#4ECDC4; color: white" type="submit" name="adicionar" value="Adicionar">
					Adicionar</button>
					<a type="button" class="btn btn-success" style="border:0.5px solid gray; background:#4ECDC4; color: white" onclick='window.location.href="listacat.php"'>
					Voltar</a>
				</div>
			</div>
		</form>
		
<?php
	
	if(isset($_GET['erro'])){
			echo "<span style='color:red'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Preencha todos os campos!</span>";
	}	
	if(isset($_GET['sucesso'])){
			echo "<br><span Style='color:blue'> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Categoria adicionada com sucesso!</span>";
	}
	
	
	
?>
<?php
	include_once "../rodape.php";
?>
<div style="text-align: center; margin: 10px auto 10px auto ">
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../categoria/categoria.php">Adicionar Categorias</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../usuario/usuario.php">Adicionar Usuarios</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../produto/produto.php">Adicionar Produtos</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../comanda/listavenda.php">Listar Vendas</a>
		</div>
	<!-- <script>
		document.getElementById("categoria").classList.add("active");
	</script> -->
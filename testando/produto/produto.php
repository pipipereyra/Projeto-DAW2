<?php
	include_once "../topo.php";
	include_once "../class/Produtos.class.php";
	$conectar= new Produtos();
	$produto=$conectar->listar();
	$listacategorias=null;
	
	foreach($produto as $valor){
		$listacategorias.="<option value='$valor->ID'>$valor->Nome</option>";
	}
?>
    <div style="text-align: center; margin: 10px auto 10px auto ">
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../index2.php">Inicio</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../categoria/listacat.php">Listar Categorias</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../usuario/listausu.php">Listar Usuarios</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="listaprod.php">Listar Produtos</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../comanda/listavenda.php">Listar Vendas</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../usuario/logout.php">Sair</a>
		</div>

	<form action="addprodutos_ok.php" method="post">
			<h2 style="text-align:center;"> &nbsp &nbsp &nbsp Adicionar Produtos &nbsp &nbsp</h2>
		</form>
	<form class="col-lg-4" method="POST" action="addprod_ok.php" enctype="multipart/form-data">
		<div class="container mt-3">
			<div class="input-group mb-3" style="flex-direction: column;/* align-content: center; */align-items: unset;/* margin: auto; */width: 220%;padding-left: 100%;">
					<div class="input-group-prepend">
						<label class="input-group-text" for="Nome">Nome:</label>
						<input type="text" class="form-control" id="Nome" name="Nome">
					</div>
					<div class="input-group">
						<label class="custom-file-label" for="customFile">Imagem:</label>
						<input type="file" class="custom-file-input" id="Imagem" name="Imagem">
					</div>
					<div class="input-group-prepend">
						<label class="input-group-text">Descrição:</label>
						<input type="text" class="form-control" id="Descricao" name="Descricao">
					</div>
					<div class="input-group-prepend">
						<label class="input-group-text">Valor:</label>
						<input type="number" class="form-control" id="Valor" name="Valor">
					</div>
					<div class="form-group">
						<label for="sel1">Selecione a Categoria</label>
								<select class="form-control" name='ID_Categoria'>
									<option>
										<?php echo $listacategorias;?>
									</option>
								</select>
					</div>
					<button type="submit" class="btn btn-success" style="border:0.5px solid gray; background:#4ECDC4; color: white;">Adicionar</button>
					<button type="submit" class="btn btn-success" style="border:0.5px solid gray; background:#4ECDC4; color: white;" onclick='window.location.href="listaprod.php"'>Voltar</button>	
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
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="produto.php">Adicionar Produtos</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../comanda/listavenda.php">Listar Vendas</a>
		</div>
	<script>
		document.getElementById("produto").classList.add("active");
	</script>

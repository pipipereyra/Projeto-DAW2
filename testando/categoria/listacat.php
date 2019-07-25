<?php
	include_once "../topo.php";
	include_once "../class/Categorias.class.php";
?>

<div style="text-align: center; margin: 10px auto 10px auto ">
		<img src="../imagem/logoGR&L.png" height="80" width="80" style="text-align: 20px">
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../index2.php">Inicio</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="listacat.php">Listar Categorias</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../usuario/listausu.php">Listar Usuarios</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../produto/listaprod.php">Listar Produtos</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../comanda/listavenda.php">Listar Vendas</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../usuario/logout.php">Sair</a>
		</div>
	
	<h2 style="text-align:center;">Listar Categorias</h2>
	<form>
	<div class="container mt-3">
		<div class="input-group mb-3">
			<input class="form-control" style= "width: 200px; margin-left:10px" type="text" name="Buscar" placeholder="Buscar"/>
			<button class="btn btn-primary" style="border:0.5px solid gray; background:#4ECDC4; color: white" type="submit" value="Enviar">Enviar</button>
			<button class="btn btn-success" style="border:0.5px solid gray; background:#4ECDC4; color: white" onclick='window.location.href="listar.php"'>Voltar</button><br>
	</form>
	

<?php
	$objCategorias = new Categorias;
	if(isset($_GET['Buscar']))
		$retorno = $objCategorias->listar('where ID="'.$_GET['Buscar'].'" or Nome like "%'.$_GET['Buscar'].'%"');
	else	
		$retorno = $objCategorias-> listar();
	echo "<div class='container'>
	<table class='table table-hover'>
		<thead>
			<th>Nome</th>
			<th colspan='2'>Açoes</th>
		</thead>
		<tbody>";
		if($retorno ==''){
		echo "Sua busca não retornou nenhum resultado, tente novamente";}
		else {
			foreach ($retorno as $linha){
			echo "<tr>
					<td>$linha->Nome</td>
					<td style= 'padding:5px'><a href='editcat.php?ID=$linha->ID' >Editar</a></td>
					<td style= 'padding:5px'><a href='apagarcat.php?ID=$linha->ID' >Apagar</a></td>
			   </tr>";
			}
		}
		echo "</tbody></table></div>";
		
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
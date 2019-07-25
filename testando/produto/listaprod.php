<?php
	include_once "../topo.php";
	include_once "../class/Produtos.class.php";
?>

    <div style="text-align: center; margin: 10px auto 10px auto ">
		<img src="../imagem/logoGR&L.png" height="80" width="80" style="text-align: 20px">
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../index2.php">Inicio</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../categoria/listacat.php">Listar Categorias</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../usuario/listausu.php">Listar Usuarios</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="listaprod.php">Listar Produtos</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../comanda/listavenda.php">Listar Vendas</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../usuario/logout.php">Sair</a>
		</div>

	
	<h2 style="text-align: center;">Listar Produtos</h2>
	<form>
		<div class="container mt-3">
			<div class="input-group mb-3">
				<input class="form-control" type="text" name="Buscar" placeholder="Buscar"/>
				<div class="input-group-append">
					<input class="btn btn-success" style="border:0.5px solid gray; background:#4ECDC4; color: white" type="submit" value="Enviar">
					<button class="btn btn-success" style="border:0.5px solid gray; background:#4ECDC4; color: white" onclick='window.location.href="listar.php"'>Voltar</button>
				</div>
			</div>
		</div>
	</form>
	

<?php
	$obj = new Produtos;
	if(isset($_GET['Buscar']))
		$retorno = $obj->listar('where produtos.ID="'.$_GET['Buscar'].'" or produtos.Nome like "%'.$_GET['Buscar'].'%"');
	else	
		$retorno = $obj-> listar();
	echo "<div class='container'>
	<table class='table table-hover'>
	
		<thead>
			<th>Nome</th>
			<th>Descricao</th>
			<th>Valor</th>
			<th>Imagem</th>
			<th>Categoria</th>
			<th colspan='3'>Açoes</th>
			
		</thead>
		<tbody>";
		if($retorno ==''){
		echo "Sua busca não retornou nenhum resultado, tente novamente";}
		else {
			foreach ($retorno as $linha){
			echo "<tr>
					<td>$linha->Nome</td>
					<td>$linha->Descricao</td>
					<td>$linha->Valor</td>
					<td><img src='../imagem/$linha->Imagem' width='100px'/></td>
					<td>$linha->ID_Categoria</td>
					<td style= 'padding:5px'><a href='mudaimg.php?ID=$linha->ID'</a>Alterar Imagem</td>
					<td style= 'padding:5px'><a href='editaprod.php?ID=$linha->ID' >Editar</a></td>
					<td style= 'padding:5px'><a href='apagaprod.php?ID=$linha->ID' >Apagar</a></td>
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
	<script>
		document.getElementById("produto").classList.add("active");
	</script>
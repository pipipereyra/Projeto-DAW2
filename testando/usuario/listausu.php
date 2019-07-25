<?php
	include_once "../topo.php";
	include_once "../class/Usuarios.class.php";
?>

<div style="text-align: center; margin: 10px auto 10px auto ">
		<img src="../imagem/logoGR&L.png" height="80" width="80" style="text-align: 20px">
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../index2.php">Inicio</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../categoria/listacat.php">Listar Categorias</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="listausu.php">Listar Usuarios</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../produto/listaprod.php">Listar Produtos</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../comanda/listavenda.php">Listar Vendas</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../usuario/logout.php">Sair</a>
		</div>
	
	<h2 style="text-align:center;">Listar Usuarios</h2>
	<form method="GET" action="">
		<div class="container mt-3">
			<div class="input-group mb-3">
				<input class="form-control" type="text" name="Buscar" placeholder="Buscar"/>
				<div class="input-group-append">
					<button class="btn btn-success" style="border:0.5px solid gray; background:#4ECDC4; color: white" type="submit" value="Enviar">Enviar</button>
					<button class="btn btn-success" style="border:0.5px solid gray; background:#4ECDC4; color: white" onclick='window.location.href="listausu.php"'>
					Voltar</button>
				</div>
			</div>
		</div>
	</form>
	

<?php
	$obj = new Usuarios;
	if(isset($_GET['Buscar']))
		$retorno = $obj->listar('where ID="'.$_GET['Buscar'].'" or Nome like "%'.$_GET['Buscar'].'%"');
		//$retorno = $obj->listar("where ID='{$_GET['Buscar']}' or Nome like '%{$_GET['Buscar']}%'");
	else	
		$retorno = $obj-> listar();
	echo "<div class='container'>
	<table class='table table-hover'>
		<thead>
			<th>Nome</th>
			<th>E_mail</th>
			<th>Nascimento</th>
			<th>RG</th>
			<th>Tipo</th>
			<th>Senha</th>
			<th>CPF</th>
			<th>Endereco</th>
			
			<th colspan='2'>Açoes</th>
		</thead>
		<tbody>";
		if($retorno ==''){
		echo "Sua busca não retornou nenhum resultado, tente novamente";}
		else {
			foreach ($retorno as $linha){
				if($linha->Tipo == 0){$tipoUser = "Administrador";}else{$tipoUser = "Cliente";}
			echo "<tr>
					<td>$linha->Nome</td>
					<td>$linha->E_mail</td>
					<td>".date("d/m/Y", strtotime($linha->Nascimento))."</td>
					<td>$linha->RG</td>
					<td>$tipoUser</td>
					<td>*****</td>
					<td>$linha->CPF</td>
					<td>$linha->Endereco</td>
					<td style= 'padding:5px'><a href='editausu.php?ID=$linha->ID' >Editar</a></td>
					<td style= 'padding:5px'><a href='apagausu.php?ID=$linha->ID' >Apagar</a></td>
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
		document.getElementById("usuario").classList.add("active");
	</script> -->
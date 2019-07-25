<?php
	include_once "../topo.php";
	include_once "../class/Comanda.class.php";
?>

    <div style="text-align: center; margin: 10px auto 10px auto ">
		<img src="../imagem/logoGR&L.png" height="80" width="80" style="text-align: 20px">
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../index2.php">Inicio</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../categoria/listacat.php">Listar Categorias</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../usuario/listausu.php">Listar Usuarios</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../produto/listaprod.php">Listar Produtos</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="listavenda.php">Listar Vendas</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../usuario/logout.php">Sair</a>
		</div>
	
	<h2 style="text-align:center;">Listar Vendas</h2>
	<form>
		<div class="container mt-3">
			<div class="input-group mb-3">
				<input class="form-control" type="text" name="Buscar" placeholder="Buscar"/>
				<div class="input-group-append">
					<input class="btn btn-success" style="border:0.5px solid, gray; background:#4ECDC4; color: white" type="submit" value="Enviar">
					<button class="btn btn-success" style="border:0.5px solid, gray; background:#4ECDC4; color: white" onclick='window.location.href="listavenda.php"'>Voltar</button>
				</div>
			</div>
		</div>
	</form>
	

<?php
	$obj = new Vendas;
	if(isset($_GET['Buscar']))
		$retorno = $obj->listar('where comanda.ID = "'.$_GET['Buscar'].'" or comanda.ID_mesa = "'.$_GET['Buscar'].'"');
	else	
		$retorno = $obj-> listar();
	echo "<div class='container'>
	<table class='table table-hover'>
	 
		<thead>
			<th>Data_venda</th>
			<th>Status</th>
			<th>Valor_total</th>
			<th>Forma_pagamento</th>
            <th>ID_usuarios</th>
            <th>ID_mesa</th>
			
		</thead>
		<tbody>";
		if($retorno ==''){
			echo "Sua busca não retornou nenhum resultado, tente novamente";
		}
		else {
			foreach ($retorno as $linha){
				if ($linha->Status == 0){
					$statusOk = "Pedido Realizado";
				}
				elseif($linha->Status == 1){
					$statusOk = "Em Andamento";
					}
				else{
					$statusOk = "Pedido Pronto";
				}
				if ($linha->Forma_pagamento == 0){
					$pagamentoOk = "Dinheiro";
				}
				elseif($linha->Forma_pagamento == 1){
					$pagamentoOk = "Débito";
				}
				else{
					$pagamentoOk = "Crédito";
				}
			echo "<tr>
					<td>".date("d/m/Y", strtotime($linha->Data_venda))."</td>
					<td>$statusOk</td>
                    <td>$linha->Valor_total</td>
                    <td>$pagamentoOk</td>
                    <td>$linha->nomeUser</td>
                    <td>$linha->ID_mesa</td>
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
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="listavenda.php">Listar Vendas</a>
		</div>
	<script>
		document.getElementById("produto").classList.add("active");
	</script>
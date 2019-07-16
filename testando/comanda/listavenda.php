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
	
	<h2 style="margin-left:10px;">Listar Vendas</h2>
	<form>
		<input style= "width: 200px; margin-left:10px" type="text" name="Buscar" placeholder="Buscar"/>
		<input type="submit" value="Enviar">
		<button style="margin-left:2px; margin-top:5px;" onclick='window.location.href="listavenda.php"'>Voltar</button><br>
	</form>
	

<?php
	$obj = new Vendas;
	if(isset($_GET['Buscar']))
		$retorno = $obj->listar('where ID="'.$_GET['Buscar'].'" or Nome like "'.$_GET['Buscar'].'"');
	else	
		$retorno = $obj-> listar();
	echo "<table border style='margin:25px'>
		<thead>
			<th>ID</th>
			<th>Data_venda</th>
			<th>Status</th>
			<th>Valor_total</th>
			<th>Forma_pagamento</th>
            <th>ID_Usuario</th>
            <th>ID_mesa</th>
			
		</thead>
		<tbody>";
		if($retorno ==''){
		echo "Sua busca não retornou nenhum resultado, tente novamente";}
		else {
			foreach ($retorno as $linha){
			echo "<tr>
					<td>$linha->ID</td>
					<td>$linha->Data_venda</td>
					<td>$linha->Status</td>
                    <td>$linha->Valor_total</td>
                    <td>$linha->Forma_pagamento</td>
                    <td>$linha->ID_Usuario</td>
                    <td>$linha->ID_mesa</td>
			   </tr>";
			}
		}
		echo "</tbody></table>";
		
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
<?php
	include_once "../topo.php";
	include_once "../class/Produtos.class.php";
	$obj = new Produtos();
	$obj->ID =$_GET['ID'];
	$resultado = $obj->retornarunico();
?>
	<form action="editprod_ok.php" method="post">
		<div class="container">
					<h2 style="text-align:center;">Editar Produtos</h2>
			<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text">Nome:</span>
					</div>
							<input class="form-control" type="text" name= "Nome" value="<?php echo $resultado->Nome;?> "/>
			</div>
			<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text">Descricao:</span>
					</div>
							<input class="form-control" type="text" name= "Descricao" value="<?php echo $resultado->Descricao;?> "/>
			</div>
			<div class="input-group mb-3">
					<div class="input-group-prepend">	
						<span class="input-group-text">Valor:</span>
					</div>
							<input class="form-control" type="number" name= "Valor" value="<?php echo $resultado->Valor;?> "/>
			</div>
					<input style= "display:none;" type="text" name= "ID" value="<?php echo $resultado->ID;?> "/>
					<input class="btn btn-success" style="border:0.5px solid gray; background:#4ECDC4; color: white;" type="submit" name="adicionar" value="Editar">
					<button class="btn btn-success" style="border:0.5px solid gray; background:#4ECDC4; color: white;" onclick="window.location.href='listaprod.php'">Voltar</button><br>
				
			</div>
		</form>
<?php
	include_once "../rodape.php";
?>

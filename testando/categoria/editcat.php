<?php
	include_once "../topo.php";
	include_once "../class/Categorias.class.php";
	$obj = new Categorias();
	$obj->ID =$_GET['ID'];
	$resultado = $obj->retornarunico();
?>
	<form action="editcat_ok.php" method="post">
			<h2 style="text-align:center;"> &nbsp &nbsp &nbsp Editar Categoria &nbsp &nbsp</h2>
			<div class="container mt-3">
				<div class="input-group mb-3">
					<span style="margin-top:5px;"> &nbsp &nbsp &nbsp Edite a categoria:</span>
					<input type="text" class="form-control" name= "Nome" value="<?php echo $resultado->Nome;?>"/>
					<div class="input-group-append">
						<input style= "display:none;" type="text" name= "ID" value="<?php echo $resultado->ID;?> "/>
						<button  class="btn btn-primary" style="border:0.5px solid gray; background:#4ECDC4; color: white" type="submit" name="adicionar"	value="Editar">Editar</button><br>
						<button class="btn btn-success" style="border:0.5px solid gray; background:#4ECDC4; color: white" onclick='window.location.href="listar.php"'>Voltar</button><br>
					</div>
				</div>
			</div>
		</form>


<?php
	include_once "../rodape.php";
?>

<!-- update categoria set Nome='novonome' where id=13; -->
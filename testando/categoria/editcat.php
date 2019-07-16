<?php
	include_once "../topo.php";
	include_once "../class/Categorias.class.php";
	$obj = new Categorias();
	$obj->ID =$_GET['ID'];
	$resultado = $obj->retornarunico();
?>
	<form action="editcat_ok.php" method="post">
			<h2> &nbsp &nbsp &nbsp Editar Categoria &nbsp &nbsp</h2>
			<span> &nbsp &nbsp &nbsp Edite a categoria:</span><input style= "width: 200px; margin-left:2px" type="text" name= "Nome" value="<?php echo $resultado->Nome;?> "/>
			<input style= "display:none;" type="text" name= "ID" value="<?php echo $resultado->ID;?> "/>
			<input type="submit" name="adicionar" value="Editar">
			<br><button style="margin-left:327px; margin-top:5px;"onclick='window.location.href="listar.php"'>Voltar</button><br>
		</form>


<?php
	include_once "../rodape.php";
?>

<!-- update categoria set Nome='novonome' where id=13; -->
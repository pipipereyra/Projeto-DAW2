<?php
include_once "../topo.php";
	include_once "../class/Categorias.class.php";
	$objCategoria = new Categorias();
	
	$objCategoria->ID = $_POST['ID'];
	$objCategoria->Nome = strip_tags($_POST['Nome']);
	$objCategoria->editar();
	$resultado = $objCategoria->editar();
	if ($resultado){
		echo "<div style='text-align:center;' class='alert alert-success'> 
		<strong>Editado com sucesso!</strong>
		</div>";
		header("Refresh:3; url=listacat.php");}
	else{
		echo "<div style='text-align:center;' class='alert alert-danger'>
		<strong>Categoria não pode ser editada</strong>
		</div>";
		header("Refresh:3; url=listacat.php");}
?>

<?php
	include_once "../rodape.php";
?>
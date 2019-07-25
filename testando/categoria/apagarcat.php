<?php
	include_once "../topo.php";
	include_once "../class/Categorias.class.php";
	if (!isset($_GET['ID']) || $_GET['ID'] ==''){
		header('Location:listar.php');
	}
	$obj = new Categorias();
	$obj->ID = $_GET['ID'];
	$resultado = $obj->apagar();
	if ($resultado){
		echo " <div style='text-align:center;' class='alert alert-success'>
		<strong>Excluido com sucesso!</strong>
		</div>";
		header("Refresh:3; url=listacat.php");}
	else{
		echo "<div style='text-align:center;' class='alert alert-danger'>
		<strong>Categoria não pode ser excluida</strong>
		</div>";
		header("Refresh:3; url=listacat.php");}
	

?>

<?php
	include_once "../rodape.php";
?>
<?php
	include_once "../topo.php";
	include_once "../class/Usuarios.class.php";
	if (!isset($_GET['ID']) || $_GET['ID'] ==''){
		header('Location:listarusuarios.php');
	}
	$obj = new Usuarios();
	$obj->ID = $_GET['ID'];
	$resultado = $obj->apagar();
	if ($resultado){
		echo "<div style='text-align:center;' class='alert alert-success'> 
		<strong>Excluído com sucesso!</strong>
		</div>";
		header("Refresh:3; url=listausu.php");}
	else{
		echo "<div style='text-align:center;' class='alert alert-danger'>
		<strong>Usuário não pode ser excluído!</strong>
		</div>";
		header("Refresh:3; url=listausu.php");}
	

?>

<?php
	include_once "../rodape.php";
?>
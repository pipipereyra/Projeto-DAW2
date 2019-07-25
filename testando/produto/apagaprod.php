<?php
	include_once "../topo.php";
	include_once "../class/Produtos.class.php";
	if (!isset($_GET['ID']) || $_GET['ID'] ==''){
		header('Location:listaprod.php');
	}
	$obj = new Produtos();
	$obj->ID = $_GET['ID'];
	$resultado = $obj->apagar();
	if ($resultado){
		echo "<div style='text-align:center;' class='alert alert-success'> 
		<strong>Excluído com sucesso!</strong>
		</div>";
		header("Refresh:3; url=listaprod.php");}
	else{
		echo "<div style='text-align:center;' class='alert alert-danger'>
		<strong>Usuário não pode ser excluído!</strong>
		</div>";
		header("Refresh:3; url=listaprod.php");}
	




	include_once "../rodape.php";
?>
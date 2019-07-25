<?php
include_once "../topo.php";
	include_once "../class/Produtos.class.php";
	$obj = new Produtos();
	
	$obj->ID = strip_tags($_POST['ID']);
	$obj->Nome = strip_tags($_POST['Nome']);
	$obj->Descricao = strip_tags($_POST['Descricao']);
	$obj->Valor = strip_tags($_POST['Valor']);
	$obj->editar();
	$resultado = $obj->editar();
	//var_dump($resultado);
	if ($resultado){
		echo "<div style='text-align:center;' class='alert alert-success'> 
		<strong>Editado com sucesso!</strong>
		</div>";
	header("Refresh:3; url=listaprod.php");}
	else{
		echo "<div style='text-align:center;' class='alert alert-danger'>
		<strong>Produto não pode ser editado!</strong>
		</div>";
		header("Refresh:3; url=listaprod.php");}
?>


<?php
	include_once "../rodape.php";
?>
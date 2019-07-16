<?php
include_once "../topo.php";
	include_once "../class/Produtos.class.php";
	$obj = new Produtos();
	
	$obj->ID =$_POST['ID'];
	$obj->Nome = $_POST['Nome'];
	$obj->editar();
	$resultado = $obj->editar();
	var_dump($resultado);
	if ($resultado)
		echo "Editado com sucesso!";
	else
		echo "Produto não pode ser editado";
?>

<br><button style="margin-left:255px; margin-top:5px;" onclick="window.location.href='listaprod.php'">Voltar</button><br>

<?php
	include_once "../rodape.php";
?>
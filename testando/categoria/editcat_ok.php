<?php
include_once "../topo.php";
	include_once "../class/Categorias.class.php";
	$objCategoria = new Categorias();
	
	$objCategoria->ID =$_POST['ID'];
	$objCategoria->Nome = $_POST['Nome'];
	$objCategoria->editar();
	$resultado = $objCategoria->editar();
	if ($resultado)
		echo "Editado com sucesso!";
	else
		echo "Categoria não pode ser editada";
?>

<br><button style="margin-left:255px; margin-top:5px;" onclick='window.location.href="listacat.php"'>Voltar</button><br>

<?php
	include_once "../rodape.php";
?>
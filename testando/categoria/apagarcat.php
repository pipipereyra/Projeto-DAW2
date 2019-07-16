<?php
	include_once "../topo.php";
	include_once "../class/Categorias.class.php";
	if (!isset($_GET['ID']) || $_GET['ID'] ==''){
		header('Location:listar.php');
	}
	$obj = new Categorias();
	$obj->ID = $_GET['ID'];
	$resultado = $obj->apagar();
	if ($resultado)
		echo "Excluido com sucesso!";
	else
		echo "Categoria não pode ser excluida";
	

?>
<br><button style="margin-left:255px; margin-top:5px;" onclick='window.location.href="listacat.php"'>Voltar</button><br>

<?php
	include_once "../rodape.php";
?>
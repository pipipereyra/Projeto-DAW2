<?php
	include_once "../topo.php";
	include_once "../class/Produtos.class.php";
	if (!isset($_GET['ID']) || $_GET['ID'] ==''){
		header('Location:listaprod.php');
	}
	$obj = new Produtos();
	$obj->ID = $_GET['ID'];
	$resultado = $obj->apagar();
	if ($resultado)
		echo "Excluido com sucesso!";
	else
		echo "Produto não pode ser excluido";
	

?>
<br><button style="margin-left:255px; margin-top:5px;" onclick="window.location.href='listaprod.php'">Voltar</button><br>

<?php
	include_once "../rodape.php";
?>
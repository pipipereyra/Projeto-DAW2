<?php
	include_once "../topo.php";
	include_once "../class/Usuarios.class.php";
	if (!isset($_GET['ID']) || $_GET['ID'] ==''){
		header('Location:listarusuarios.php');
	}
	$obj = new Usuarios();
	$obj->ID = $_GET['ID'];
	$resultado = $obj->apagar();
	if ($resultado)
		echo "Excluido com sucesso!";
	else
		echo "Usuario não pode ser excluido";
	

?>
<br><button style="margin-left:255px; margin-top:5px;" onclick='window.location.href="listausu.php"'>Voltar</button><br>

<?php
	include_once "../rodape.php";
?>
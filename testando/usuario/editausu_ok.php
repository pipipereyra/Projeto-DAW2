<?php
include_once "../topo.php";
	include_once "../class/Usuarios.class.php";
	$obj = new Usuarios();
	
	$obj->ID =$_POST['ID'];
	$obj->Nome = $_POST['Nome'];
	$obj->E_mail = $_POST['E_mail'];
	$obj->Nascimento = $_POST['Nascimento'];
	$obj->RG = $_POST['RG'];
	$obj->Tipo = $_POST['Tipo'];
	$obj->Senha = $_POST['Senha'];
	$obj->CPF = $_POST['CPF'];
	$obj->Endereco = $_POST['Endereco'];
	$obj->editar();
	$resultado = $obj->editar();
	if ($resultado)
		echo "Editado com sucesso!";
	else
		echo "Usuario não pode ser editado";
?>

<br><button style="margin-left:255px; margin-top:5px;" onclick='window.location.href="listausu.php"'>Voltar</button><br>

<?php
	include_once "../rodape.php";
?>
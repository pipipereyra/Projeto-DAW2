<?php
include_once "../topo.php";
	include_once "../class/Usuarios.class.php";
	$obj = new Usuarios();
	//$obj->ID=$_POST['ID'];
	$obj->Nome = strip_tags($_POST['Nome']);
	$obj->E_mail= strip_tags($_POST['E_mail']);
	$obj->Nascimento= strip_tags($_POST['Nascimento']);
	$obj->RG= strip_tags($_POST['RG']);
	$obj->Tipo= strip_tags($_POST['Tipo']);
	$obj->Senha= strip_tags(md5($_POST['Senha']));
	$obj->CPF= strip_tags($_POST['CPF']);
	$obj->Endereco= strip_tags($_POST['Endereco']);
	$resultado = $obj->adicionar();
	if ($resultado){
		echo "<div style='text-align:center;' class='alert alert-success'> 
		<strong>Adicionado com sucesso!</strong>
		</div>";
		header("Refresh:3; url=listausu.php");}
	else{
		echo "<div style='text-align:center;' class='alert alert-danger'>
		<strong>Usuário não pode ser adicionado!</strong>
		</div>";
		header("Refresh:3; url=listausu.php");}
?>


<?php
	include_once "../rodape.php";
?>
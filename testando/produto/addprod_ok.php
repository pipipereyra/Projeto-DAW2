<?php
	include_once "../topo.php";
	include_once "../class/Produtos.class.php";
	$obj = new Produtos();
	
	$obj->Nome = strip_tags($_POST['Nome']);
	$obj->Valor = strip_tags($_POST['Valor']);
	$obj->ID_Categoria = strip_tags($_POST['ID_Categoria']);
	$obj->Descricao= strip_tags($_POST['Descricao']);
	//var_dump($_POST['ID_Categoria']);
	//$obj->editar();
	$tmpName = $_FILES['Imagem']['tmp_name'];
	$name=$_FILES['Imagem']['name'];
	
	//echo $tmpName;
	//echo $name;
	move_uploaded_file($tmpName, "../imagem/".$name);
	$obj->Imagem=$name;
	$resultado = $obj->adicionar();
	if ($resultado){
		echo "<div style='text-align:center;' class='alert alert-success'> 
		<strong>Adicionado com sucesso!</strong>
		</div>";
		header("Refresh:3; url=listaprod.php");}
	else{
		echo "<div style='text-align:center;' class='alert alert-danger'>
		<strong>Produto não pode ser adicionado!</strong>
		</div>";
		header("Refresh:3; url=listaprod.php");}
	//var_dump($resultado);
	?>


<?php
	include_once "../rodape.php";
?>
<?php
include_once "../topo.php";
	include_once "../class/Produtos.class.php";
	$obj = new Produtos();
	
	$obj->Nome =$_POST['Nome'];
	$obj->Valor = $_POST['Valor'];
	$obj->ID_Categoria = $_POST['ID_Categoria'];
	$obj->Descricao=$_POST['Descricao'];
	//var_dump($_POST['ID_Categoria']);
	//$obj->editar();
	$tmpName = $_FILES['Imagem']['tmp_name'];
	$name=$_FILES['Imagem']['name'];
	
	//echo $tmpName;
	//echo $name;
	move_uploaded_file($tmpName, "../imagem/".$name);
	$obj->Imagem=$name;
	$resultado = $obj->adicionar();
	if ($resultado)
		echo "Adicionado com sucesso!";
	else
		echo "Produto não pode ser adicionado";
	//var_dump($resultado);
	?>

<br><button style="margin-left:255px; margin-top:5px;" onclick='window.location.href="../produto/listaprod.php"'>Voltar</button><br>

<?php
	include_once "../rodape.php";
?>
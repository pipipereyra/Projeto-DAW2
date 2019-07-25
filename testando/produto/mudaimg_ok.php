<?php
include_once "../topo.php";
	include_once "../class/Produtos.class.php";
	$conectar = new Produtos();
		$Imagem = $_POST['ID']; 
		$conectar->ID=$Imagem;
		$tmpName = $_FILES['Imagem']['tmp_name'];
		$name=$_FILES['Imagem']['name'];
	//var_dump($_FILES['Imagem']);
	//echo $tmpName;
	//echo $name;
	move_uploaded_file($tmpName, "../imagem/".$name);
	$conectar->Imagem=$name;
	$resultado=$conectar->editarimagem();
	if($resultado){
		echo "<div style='text-align:center;' class='alert alert-success'> 
		<strong>Editado com sucesso!</strong>
		</div>";
	header("Refresh:3; url=listaprod.php");}
	else{
		echo "<div style='text-align:center;' class='alert alert-danger'>
		<strong>Imagem não pode ser editada!</strong>
		</div>";
		header("Refresh:3; url=listaprod.php");}
?>

<?php
	include_once "../rodape.php";
?>	

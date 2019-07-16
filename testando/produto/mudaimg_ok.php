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
	echo 'Imagem alterada com sucesso!';
	}
	else{
	echo 'Erro ao editar imagem';}
?>
	<button style="margin-left:2px; margin-top:5px;" onclick="window.location.href='../produto/listaprod.php'">Voltar</button><br>
<?php
	include_once "../rodape.php";
?>	

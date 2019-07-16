<?php
	include_once "../topo.php";
	include_once "../class/Produtos.class.php";
	$obj = new Produtos();
	$obj->ID =$_GET['ID'];
	$resultado = $obj->retornarunico();
?>
	<form action="editprod_ok.php" method="post">
			<div style="margin-left:50px">
			<h2>Editar Produtos</h2>
			<span style="display:block">Nome:</span><input style= "width: 200px; margin-left:2px" type="text" name= "Nome" value="<?php echo $resultado->Nome;?> "/></br>
			<span style="display:block">Descricao:</span><input style= "width: 200px; margin-left:2px" type="text" name= "Descricao" value="<?php echo $resultado->Descricao;?> "/></br>
			<span style="display:block">Valor:</span><input style= "width: 200px; margin-left:2px" type="number" name= "Valor" value="<?php echo $resultado->Valor;?> "/></br>
			<input style= "display:none;" type="text" name= "ID" value="<?php echo $resultado->ID;?> "/>
			<input type="submit" name="adicionar" value="Editar">
			<button style="margin-left:15px; margin-top:5px"; onclick="window.location.href='listaprod.php'">Voltar</button><br>
			</div>
			
		</form>
<?php
	include_once "../rodape.php";
?>

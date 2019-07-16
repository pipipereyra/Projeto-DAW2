<?php
	include_once "../topo.php";
	include_once "../class/Comanda.class.php";
	$obj = new Vendas();
	$obj->ID =$_GET['ID'];
	$resultado = $obj->retornarunico();
?>
	<form action="editavenda_ok.php" method="post">
			<div style="margin-left:50px">
			<h2>Editar Vendas</h2>
			<span style="display:block">Status:</span><input style= "width: 200px; margin-left:2px" type="number" name= "Status" value="<?php echo $resultado->Status;?> "/><br>
			<span style="display:block">Valor total:</span><input style= "width: 200px; margin-left:2px" type="number" name= "Valor_total" value="<?php echo $resultado->Valor_total;?> "/><br>
			<span style="display:block">Forma de Pagamento:</span><input style= "width: 200px; margin-left:2px" type="number" name= "Forma_pagamento" value="<?php echo $resultado->Forma_pagamento;?> "/><br>
            <span style="display:block">Usuario:</span><input style= "width: 200px; margin-left:2px" type="number" name= "ID_Usuario" value="<?php echo $resultado->ID_Usuario;?> "/><br>
            <span style="display:block">Mesa:</span><input style= "width: 200px; margin-left:2px" type="number" name= "ID_mesa" value="<?php echo $resultado->ID_mesa;?> "/><br>
			<input style= "display:none;" type="text" name= "ID" value="<?php echo $resultado->ID;?> "/>
			<input type="submit" name="adicionar" value="Editar">
			<button style="margin-left:15px; margin-top:5px"; onclick="window.location.href='listavenda.php'">Voltar</button><br>
			</div>
			
		</form>
<?php
	include_once "../rodape.php";
?>

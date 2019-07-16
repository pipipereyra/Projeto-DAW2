<?php
	include_once "../topo.php";
	include_once "../class/Usuarios.class.php";
	$obj = new Usuarios();
	$obj->ID =$_GET['ID'];
	$resultado = $obj->retornarunico();
	//var_dump($resultado);
?>
	<form action="editausu_ok.php" method="post">
			<h2> &nbsp &nbsp &nbsp Editar Usuarios &nbsp &nbsp</h2>
			<span> &nbsp &nbsp &nbsp Edite o usuario:</span><br>
			Nome:
			<input style= "width: 200px; margin-left:2px" type="text" name="Nome" value="<?php echo $resultado->Nome;?> "/><br>
			E-mail:
			<input style= "width: 200px; margin-left:2px" type="text" name="E_mail" value="<?php echo $resultado->E_mail;?> "/><br>
			Data de Nascimento:
			<input style= "width: 200px; margin-left:2px" type="text" name="Nascimento" value="<?php echo $resultado->Nascimento;?> "/><br>
			RG:
			<input style= "width: 200px; margin-left:2px" type="text" name="RG" value="<?php echo $resultado->RG;?> "/><br>
			Tipo de Usuario:
			<input style= "width: 200px; margin-left:2px" type="text" name="Tipo" value="<?php echo $resultado->Tipo;?> "/><br>
			Senha:
			<input style= "width: 200px; margin-left:2px" type="text" name="Senha" value="<?php echo $resultado->Senha;?> "/><br>
			CPF:
			<input style= "width: 200px; margin-left:2px" type="text" name="CPF" value="<?php echo $resultado->CPF;?> "/><br>
			Endereco:
			<input style= "width: 200px; margin-left:2px" type="text" name="Endereco" value="<?php echo $resultado->Endereco;?> "/><br>

			<input style= "display:none;" type="text" name= "ID" value="<?php echo $resultado->ID;?> "/>
			<input type="submit" name="adicionar" value="Editar">
			<br><button style="margin-left:327px; margin-top:5px;"onclick='window.location.href="listausu.php"'>Voltar</button><br>
		</form>


<?php
	include_once "../rodape.php";
?>

<!-- update usuario set Nome='novonome' where id=13; -->
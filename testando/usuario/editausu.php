<?php
	include_once "../topo.php";
	include_once "../class/Usuarios.class.php";
	$obj = new Usuarios();
	$obj->ID =$_GET['ID'];
	$resultado = $obj->retornarunico();
	//var_dump($resultado);
?>
	<form action="editausu_ok.php" method="post">
		<h2 style="text-align:center;"> &nbsp &nbsp &nbsp Editar Usuarios &nbsp &nbsp</h2>
		<label style="text-align:center;"> &nbsp &nbsp &nbsp Edite o usuario:</label>
		<div class="container">
			<div class="input-group mb-3" style="flex-direction: column;">	
					<div class="input-group-prepend">
					<span class="input-group-text">Nome</span>
						<input class="form-control" type="text" name="Nome" value="<?php echo $resultado->Nome;?> "/>
					</div>
					<div class="input-group-prepend">
						<span class="input-group-text">E-mail:</span>
						<input class="form-control" type="text" name="E_mail" value="<?php echo $resultado->E_mail;?> "/>
					</div>
					<div class="input-group-prepend">
						<span class="input-group-text">Data de Nascimento:</span>
						<input class="form-control" type="text" name="Nascimento" value="<?php echo $resultado->Nascimento;?> "/>
					</div>
					<div class="input-group-prepend">
						<span class="input-group-text">RG:</span>
						<input class="form-control" type="text" name="RG" value="<?php echo $resultado->RG;?> "/>
					</div>
					<div class="input-group-prepend">
						<span class="input-group-text">Tipo de Usuario:</span>
						<input class="form-control" type="text" name="Tipo" value="<?php echo $resultado->Tipo;?> "/>
					</div>
					<div class="input-group-prepend">
						<span class="input-group-text">Senha:</span>
						<input class="form-control" type="text" name="Senha" value="<?php echo $resultado->Senha;?> "/>
					</div>
					<div class="input-group-prepend">
						<span class="input-group-text">CPF:</span>
						<input class="form-control" type="text" name="CPF" value="<?php echo $resultado->CPF;?> "/>
					</div>
					<div class="input-group-prepend">
						<span class="input-group-text">Endereco:</span>
						<input class="form-control" type="text" name="Endereco" value="<?php echo $resultado->Endereco;?> "/>
					</div>

					<input style= "display:none;" type="text" name= "ID" value="<?php echo $resultado->ID;?> "/>
					<div class="input-group-append">
						
						<button class="btn" style="border:0.5px solid gray; background:#4ECDC4; color: white" type="submit" name="adicionar" value="Editar">Editar</button>
						<button class="btn" style="border:0.5px solid gray; background:#4ECDC4; color: white;" onclick='window.location.href="listausu.php"'>Voltar</button>
						
					</div>
			</div>
		</div>
	</form>


<?php
	include_once "../rodape.php";
?>

<!-- update usuario set Nome='novonome' where id=13; -->
<?php
	include_once "../topo.php";
	include_once "../class/Produtos.class.php";
?>
				<h2 style="text-align: center;">Editar Imagem</h2>
	<form action="mudaimg_ok.php" method="post" enctype="multipart/form-data">
		<div class="form-group" style="display: flex; flex-direction: column; width: 70%;padding-left: 32%">
			<div class="custom-file mb-3">
				<input type="file" class="custom-file-input" id="Imagem" name="Imagem">
				<label class="custom-file-label" for="customFile">Imagem:</label>
				<input style= "display:none;" type="text" name= "ID" value="<?php echo $_GET['ID'];?> "/>
				<div class="buttons" style="padding-left: 37%; padding-top: 2%;">
					<input class="btn btn-success" style="border:0.5px solid gray; background:#4ECDC4; color: white;" type="submit" name="adicionar" value="Editar">
					<button class="btn btn-success" style="border:0.5px solid gray; background:#4ECDC4; color: white;" onclick="window.location.href='../produto/listaprod.php'">Voltar</button><br>
				</div>
			</div>
		</div>
	</form>
	
	
<?php
	include_once "../rodape.php";
?>

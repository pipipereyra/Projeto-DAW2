<?php
	include_once "../topo.php";
	include_once "../class/Produtos.class.php";
?>
	<form action="mudaimg_ok.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
    <label for="Imagem">Imagem:</label>
    <input type="file" class="form-control" id="Imagem" name="Imagem">
	<input style= "display:none;" type="text" name= "ID" value="<?php echo $_GET['ID'];?> "/>
	<input style="margin-left:13px" type="submit" name="adicionar" value="Editar">
	</form>
	<button style="margin-left:2px; margin-top:5px;" onclick="window.location.href='../produto/listaprod.php'">Voltar</button><br>
	
<?php
	include_once "../rodape.php";
?>
